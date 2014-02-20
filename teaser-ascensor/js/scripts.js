
// window.onload(function(){
// 	var $split = $('#split');
// 	$split.fadeOut('slow');
// });

$(function(){
	var $split = $('#split');
	var first_scroll = true;
	
	var ascensor = $('#ascensor-container').ascensor({
						direction: [[0,0], [0,1], [0,2], [1,1]]
						,windowsOn: 1
						// ,ready: function(){
						// 	$split.fadeOut('slow');
						// }
					});

	ascensor.on("scrollEnd", function(event, floor){
	  if( first_scroll ) {
	  	ascensor.trigger('scrollToStage', 1);
	  	$split.fadeOut('slow');
	  		first_scroll = false;
	  }
	});

	$('.trigger-home').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 1);
	});

	$('.trigger-purchaser').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 0);
	});

	$('.trigger-broker').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 2);
	});

	$('.trigger-disclaimer').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 3);
	});
	
	var placeholder_support = true;
	if ( ! Modernizr.input.placeholder ) {
		placeholder_support = false;
	}

	if ( typeof (validation_messages) !== "undefined" ) {
			
		$.extend($.validator.messages, {	
			required: validation_messages.required,
			email: validation_messages.email
		});
	}

	$('form').each(function(i, el){
		$(el).validate({
			errorPlacement: function(error, element){
				var error_msj = error.text();
				$(element).attr('placeholder', error_msj);
				if ( ! placeholder_support ) {
					$(element).siblings('label').children('span').text(error_msj);
				}
			}
		});
	});

	var $hasbroker = $('#hasbroker');
	$('#represented-by-broker-wrap a').click(function(e){
		e.preventDefault();
		var $this = $(this);
		if( ! $this.hasClass('selected') ) {
			$this
				.addClass('selected')
				.siblings('a').removeClass('selected');
			$hasbroker.val( $this.attr('data-hasbroker') );
		}
	});

	$('#purchaser-form').submit(function(){
		$('#purchaser-realtor-name').val( $('#purchaser-broker-firstname').val() + ' ' + $('#purchaser-broker-lastname').val() );
	});

	$('#brokers-form').submit(function(){
		$('#realtor-name').val( $('#broker-firstname').val() + ' ' + $('#broker-lastname').val() );
	});

	$(".option-broker-yes").click(function(){
		$(".popup").addClass('visible');
		// $("input[name='hasbroker']").val("true");
		// $("[name='form_broker_first_name'], [name='form_broker_last_name'], [name='brokerage_company']").addClass("required");
	})

	$(".option-broker-no").click(function(){
		$(".popup").removeClass('visible');
		// $("input[name='hasbroker']").val("false");
		// $("[name='form_broker_first_name'], [name='form_broker_last_name'], [name='brokerage_company']").removeClass("required");
	})

});

(function($){

	var narrow      = false;
	var header      = $('#globalheader');
	var headerTop   = header.find('.top');
	var menuSec     = header.find('.sec');
	var menuSub     = header.find('.sub');
	var buttonsTop  = headerTop.find('a');
	var buttonsSub   = menuSec.find('a');
	var buttonMenu  = buttonsTop.eq(0);
	var buttonAmaz  = buttonsTop.eq(1);
	var buttonLang  = buttonsTop.eq(2);
	var buttonLocal = buttonsTop.eq(3);
	var spClose     = header.find('.intsp-btn-close');
	var regions     = header.find('#local .regions a');

	var chageTimerID = null;
	var closeTimerID = null;
	var closeTimeout = 2500;

	/*****************************************************************************************************************
	 * INIT
	 *****************************************************************************************************************/

	$('#menu a').each(function(i){
		var rel = this.getAttribute('rel');

		if(rel && rel.indexOf('#') === 0){
			$(this).append('<span class="ind"></span>');
		}
	});

	if(Shared.css.hasTransition){
		header.transform('translateZ(0)');

		menuSec.css({display:'none', opacity:0, '-webkit-backface-visibility':'hidden'}).transition('all', 400, 'easeInOutQuart').transformOrigin('50%', '0%');
		menuSub.css({display:'none', opacity:0, '-webkit-backface-visibility':'hidden'}).transition('all', 400, 'easeInOutQuart').transformOrigin('50%', '0%');

		if(Shared.ua.isAndroid){
			menuSec.transform('rotateX(-90deg)');
			menuSub.transform('rotateX(-90deg)');
		}else{
			menuSec.transform('perspective(1000px) rotateX(-90deg)');
			menuSub.transform('perspective(1000px) rotateX(-90deg)');
		}

		menuSec.transitionEnd(function(){
			if($(this).hasClass('open')){
				// videoタグのクリック対応
				if(Shared.ua.isiPhone){
					$('.flplayer video, .ytplayer iframe').each(function(){
						if($(this).offset().top < 1000){
							$(this).addClass('video_unclickable');
						}
					});
				}
			}else{
				this.style.display = 'none';
			}
		});
		menuSub.transitionEnd(function(){
			if(!$(this).hasClass('open')) this.style.display = 'none';
		});
		if(Shared.ua.isAndroid){
			menuSec.css({webkitPerspective:'none', opacity:1});
			menuSub.css({webkitPerspective:'none', opacity:1});
		}
	}else{
		menuSec.css({display:'none', opacity:1});
		menuSub.css({display:'none', opacity:1});
	}

	/*****************************************************************************************************************
	 * ANIMATION
	 *****************************************************************************************************************/

	// open sec
	function openSec(button){
		var sec = $('#' + button.attr('href').split('#')[1]);

		sec.addClass('open').css({display:'block'});

		if(Shared.css.hasTransition){
			setTimeout(function(){
				if(button.hasClass('selected')){
					if(Shared.ua.isAndroid){
						sec.transform('rotateX(0deg)').css({opacity:1});
					}else{
						sec.transform('perspective(1000px) rotateX(0deg)').css({opacity:1});
					}
				}
			}, 300);
		}

		if(sec.attr('id') == 'local'){
			map();
		}
	}

	// open sub
	function openSub(button, e){
		var sub = $(button.attr('rel'));

		sub.addClass('open').css({display:'block'});

		if(e.type == 'click'){
			var delay = 30;
		}else{
			var delay = 300;
		}
		if(Shared.css.hasTransition){
			setTimeout(function(){
				if(button.hasClass('selected')){
					if(Shared.ua.isAndroid){
						sub.transform('rotateX(0deg)').css({opacity:1});
					}else{
						sub.transform('perspective(1000px) rotateX(0deg)').css({opacity:1});
					}
				}
			}, delay);
		}
	}

	// close sec
	function closeSec(button){
		if(button){
			var sec = $('#' + button.attr('href').split('#')[1]);
			button.removeClass('selected');
		}else{
			var sec = menuSec.filter('.open');
			buttonsTop.filter('.selected').not('.intlang').removeClass('selected');
		}

		if(Shared.ua.isiPhone){
			$('.flplayer video, .ytplayer iframe').removeClass('video_unclickable');
		}

		sec.removeClass('open');

		if(Shared.css.hasTransition){
			if(Shared.ua.isAndroid){
				sec.transform('rotateX(-90deg)').css({opacity:1});
			}else{
				sec.transform('perspective(1000px) rotateX(-90deg)').css({opacity:0});
			}
		}else{
			sec.css({display:'none'});
		}
	}

	// close sub
	function closeSub(button){
		if(button){
			var sub = $(button.attr('rel'));
			button.removeClass('selected');
		}else{
			var sub = menuSub.filter('.open');
			buttonsSub.filter('.selected').removeClass('selected');
		}

		sub.removeClass('open');

		if(Shared.css.hasTransition){
			if(Shared.ua.isAndroid){
				sub.transform('rotateX(-90deg)').css({opacity:1});
			}else{
				sub.transform('perspective(1000px) rotateX(-90deg)').css({opacity:0});
			}
		}else{
			sub.css({display:'none'});

		}
	}
	
})(jQuery);