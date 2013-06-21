
// masonry code 
$(document).ready(function() {
  // $('#post-area').masonry({
  //   // options
  //   itemSelector : '.post',
  //   // options...
  // isAnimated: true,
  // isFitWidth: false,
  // animationOptions: {
  //   duration: 400,
  //   easing: 'linear',
  //   queue: false
  // }
	
  // });
	
  var $container = $('#post-area');
  $container.isotope({

  	masonry: {
    columnWidth: 1
  }
	  // options
	  // itemSelector : '.post',
	  // layoutMode : 'masonry'
  });




  //  $('#filters a').click(function(){
	 //  var selector = $(this).attr('data-filter');
	 //  $container.isotope({ filter: selector });
	 //  return false;
  //  });	

  //  $(".collection_filter").click(function(){

  //  		var checked = $($(".collection_filter").attr('checked', true)).attr('data-filter');
  //  		$container.isotope({ filter: checked });
	 //    return false;
  //  });
  //  var checked = $($(".collection_filter").attr('checked', true)).attr('data-filter');
		// $('.collection_filter').click(function(){
		// 	$container.isotope({ filter: checked });
		// });

	$(".filter").on('change', function(){
    var tags = []
    var checked = $("input:checkbox:checked").map(function(){
        tags.push($(this).attr('data-filter'));
    });
    tags = tags.join();
    $container.isotope({ filter: tags });
});
});




// hover code for index  templates
$(document).ready(function() {
	
		$('.gridly-image').mouseenter(
			function() {
				$(".post-info").stop().fadeOut(200);
				$(this).prev(".post-info").stop().fadeTo(300, 0.6);
				$(this).prev(".post-info a").css("color: rgba(255,255,255,1);");
			}
		);
		$('.post-info').mouseleave(
			function() {
				$(this).fadeOut(300);
			}
		);	

		$($(".collection_filter").attr('checked', true)).attr('data-filter');
		$('#filters a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  return false;
   });	
});


// comment form values
$(document).ready(function(){
	$("#comment-form input").focus(function () {
		var origval = $(this).val();	
		$(this).val("");	
		//console.log(origval);
		$("#comment-form input").blur(function () {
			if($(this).val().length === 0 ) {
				$(this).val(origval);	
				origval = null;
			}else{
				origval = null;
			};	
		});
	});
});


// clear text area
$('textarea.comment-input').focus(function() {
   $(this).val('');
});