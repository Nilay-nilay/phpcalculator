// JavaScript Document
function swapImages(){
  var $active = $('#myGallery .active');
  var $next = ($('#myGallery .active').next().length > 0) ? $('#myGallery .active').next() : $('#myGallery img:first');
  $active.fadeOut(function(){
    $active.removeClass('active');
    $next.fadeIn().addClass('active');
  });
}
// Run our swapImages() function every 5secs
setInterval('swapImages()', 3000);
