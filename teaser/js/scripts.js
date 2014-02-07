$(function(){

	$('input, textarea').placeholder();
	$('form').each(function(i, el){
		$(el).validate({
			errorPlacement: function(error, element){
				$(element).attr('placeholder', 'hola');
				console.log('hola');
			}
		});
	});

});