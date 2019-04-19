jQuery(document).ready(function( $ ) {
  
    //Scroll to Links
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
              return false;
            }
        }
    });  

    //Match Height
    function matchHeight($container,$element) {
        var containers = $('body').find($($container));
        var maxHeight = 0;
        for (var i = 0; i < containers.length; i++ ) {
            var elements = $(containers[i]).find($($element));
            for (var f = 0; f < elements.length; f++ ) {
                var thisHeight =  $(containers[i]).find($(elements[f])).outerHeight();
                if (maxHeight < thisHeight) {
                    maxHeight = thisHeight;
                }
                if( f === (elements.length - 1 ) ){
                    $(containers[i]).find($($element)).css('height',maxHeight);
                    maxHeight = 0;
                }
            }        
        }     
    };

    //matchHeight();
    $(window).resize(function() {
        fillScreen();
        //matchHeight();
    });    
  
});
