$(function () {
    $("#profile-img").hover(function () {
      let originalImage = $(this).data("original");
      showHoverImage(originalImage);
    }, function(){
      removeHoverImage();
    });
    
    function showHoverImage(originalImage) {
      $('#profile-img').after('<div class="hover-image"><img src="'+ originalImage +'" /></div>');
      $('.hover-image').fadeIn()
    }
    
    function removeHoverImage(){
      let $hoverImage = $('.hover-image')
      $hoverImage.fadeOut(function(){
        $hoverImage.remove()
      });
    }
    
  });