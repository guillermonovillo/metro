
// window.onload(function(){
// 	var $split = $('#split');
// 	$split.fadeOut('slow');
// });

$(function(){
	var $split = $('#split');
	var ascensor = $('#ascensor-container').ascensor({
						direction: [[0,0], [0,1], [0,2], [1,1]]
						,windowsOn: 1
						,ready: function(){
							$split.fadeOut('slow');
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

	$("#credits").click(function(e){
		e.preventDefault();
		$(this).html($(this).text() == 'Developed by: Bridger Conway' ? 'Site Credits' : 'Developed by: Bridger Conway');
	});

});