// Waiting...
// $(document).ready(function() {
// 	$(".load-more").click(function(event) {
// 		event.preventDefault();
// 		pagina=$(this).data("page");
// 		cat=$(this).data("mode");
// 		$.ajax({
// 			url: path + '/loadmore.php',
// 			type: 'POST',
// 			data: {page: pagina, category:cat},
// 		})
// 		.done(function(html) {
// 			console.log("success");
// 			if(html.length > 0){
// 			$(".main-content").append(html);
// 			$(".load-more").data("page",pagina+1);
// 		}else{
// 			$(".load-more").hide();
// 		}
// 		})
// 		.fail(function() {
// 			console.log("error");
// 		})
// 		.always(function() {
// 			console.log("complete");
// 		});
		
// 	});
// });