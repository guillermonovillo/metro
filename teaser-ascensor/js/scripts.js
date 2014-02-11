$(function(){

	var ascensor = $('#ascensor-container').ascensor({direction: [[0,0], [0,1], [0,2], [1,0]]});

	$('.trigger-home').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 0);
	});

	$('.trigger-purchaser').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 1);
	});

	$('.trigger-broker').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 2);
	});

	$('.trigger-disclaimer').click(function(e){
		e.preventDefault();
		ascensor.trigger('scrollToStage', 3);
	});
	
	$('input, textarea').placeholder();

	$('form').each(function(i, el){
		$(el).validate({
			errorPlacement: function(error, element){
				var error_msj = error.text();
				$(element).attr('placeholder', error_msj);
			}
		});
	});
	$('#brokers-form').submit(function(){
		$('#realtor-name').val( $('#broker-firstname').val() + ' ' + $('#broker-lastname').val() );
	})

});