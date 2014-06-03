
// window.onload(function(){
// 	var $split = $('#split');
// 	$split.fadeOut('slow');
// });

$(function(){
	var $split = $('#split');
	var first_scroll = true;
	
	var ascensor = $('#ascensor-container').ascensor({
						direction: [[0,0], [0,1], [0,2], [2,1], [1,1]]
						,windowsOn: 1
						// ,ready: function(){
						// 	$split.fadeOut('slow');
						// }
					});

	ascensor.on("scrollEnd", function(event, floor){
	  if( first_scroll ) {
	  	ascensor.trigger('scrollToStage', 1);
	  	// $split.fadeOut('slow');
	  	init();
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

	$('.trigger-press').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 4);
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
		
		if( $(el).find('#hasbroker').length ) {

			var $el_hasbroker = $(el).find('#hasbroker');

			$(el).validate({
				errorPlacement: function(error, element){
					var error_msj = error.text();
					$(element).attr('placeholder', error_msj);
					if ( ! placeholder_support ) {
						$(element).siblings('label').children('span').text(error_msj);
					}
				},
				rules: {
					broker_firstname: {
						required: function(element) {
							return $el_hasbroker.val() == 1
						}
					},
					broker_lastname: {
						required: function(element) {
							return $el_hasbroker.val() == 1
						}
					},
					brokerage_company: {
						required: function(element) {
							return $el_hasbroker.val() == 1
						}
					},
					realtor_phone:  {
						required: function(element) {
							return $el_hasbroker.val() == 1;
						}
					},
					realtor_email: {
						required: function(element) {
							return $el_hasbroker.val() == 1;
						}
					}
				}
			});
		} else {

			$(el).validate({
				errorPlacement: function(error, element){
					var error_msj = error.text();
					$(element).attr('placeholder', error_msj);
					if ( ! placeholder_support ) {
						$(element).siblings('label').children('span').text(error_msj);
					}
				}
			});

		}

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
	})

	$(".option-broker-no").click(function(){
		$(".popup").removeClass('visible');	
	})

});

(function($){


	/*****************************************************************************************************************
	 * ANIMATION
	 *****************************************************************************************************************/

	 init = function () {
	     var mod = window.Modernizr,
	         modCSSAnimations  = mod && mod.cssanimations,
	         modCSSTransforms  = mod && mod.csstransforms,
	         modCSSTransitions = mod && mod.csstransitions,
	         modTouch          = mod && mod.touch,
	         modAnim           = modCSSAnimations && modCSSTransitions;

	     var $splitWrapper   = $('#split-wrapper'),
	         $splitLeft      = $('#split-left'),
	         $splitRight     = $('#split-right'),
	         $window         = $(window),
	         w               = $window.width(),
	         h               = $window.height(),
	         pos             = (w + h / Math.tan(Math.PI / 180 * 57.5)) / 2 / w * 100 + 50 + '%';

	     $splitLeft.css({ 
	         "-webkit-transform"   : "skewX(0deg) translateX(-100%)",
	         "-ms-transform"       : "skewX(0deg) translateX(-100%)",
	         "-moz-transform"      : "skewX(0deg) translateX(-100%)",
	         "-o-transform"        : "skewX(0deg) translateX(-100%)",
	         "transform"           : "skewX(0deg) translateX(-100%)"
	     });
	     $splitRight.css({ 
	         "-webkit-transform"   : "skewX(0deg) translateX(100%)",
	         "-ms-transform"       : "skewX(0deg) translateX(100%)",
	         "-moz-transform"      : "skewX(0deg) translateX(100%)",
	         "-o-transform"        : "skewX(0deg) translateX(100%)",
	         "transform"           : "skewX(0deg) translateX(100%)"
	     });
	     $splitWrapper.on('transitionend webkitTransitionEnd', function (event) {
	         $splitWrapper.remove();
	     });
	 };

})(jQuery);

// window.onload = init();