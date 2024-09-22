//javaScript Document
function swapImage(){
var $active   =$('#myGallery .active');
var $next = ($('#myGallery .active').next().lenght >0))?$('#myGallery .active').next() : $('#myGallery img:first');
 $active .fadeOut(function(){
 $active.removeClass('active');
  $next.fadeIn().addClass('active');
  });
}
// Run our swapImage() function every 5secs
setInterval('swapImage()',3000);
setInterval('swapImage()',3000);