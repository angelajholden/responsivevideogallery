//* Fancybox
$(document).ready(function() {
  $('.fancybox').fancybox({
    padding   : 0,
    maxWidth  : '100%',
    maxHeight : '100%',
    width   : 560,
    height    : 315,
    autoSize  : true,
    closeClick  : true,
    openEffect  : 'elastic',
    closeEffect : 'elastic'
  });
});

//* Smooth Scroll to Top
$(document).ready(function() {
  var offset = 220;
  var duration = 500;
  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $('.scroll-top').fadeIn(duration);
    } else {
      $('.scroll-top').fadeOut(duration);
    }
  });
$('.scroll-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
});