//!function ($) {
 //   $(function(){
$(document).ready(function(){
        var $root = $('html, body');

        $("a[href*='#']:not(#monCarousel a)").click(function() {
            var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                window.location.hash = href;
            });
            return false;
        });
    });
  //  })
//}(window.jQuery)

