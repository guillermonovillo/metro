$(function(){

	$('input, textarea').placeholder();
	$('form').each(function(i, el){
		$(el).validate({
			errorPlacement: function(error, element){
				var error_msj = error.text();
				$(element).attr('placeholder', error_msj);
			}
		});
	});

});