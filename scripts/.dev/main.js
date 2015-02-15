$( document ).ready(function() {	
    $(window).resize(function() {
	    $('#Home').height($(window).height());
	});

	$(window).trigger('resize');






    //main content height
    $(function () {
    
        updateDivsMargins();
        $(window).resize(updateDivsMargins);
        
        function updateDivsMargins() {
            $('#Home .content, figcaption').each(function () {
                $(this).css({
                    'margin-top': (-$(this).height() / 2),
                });
            });
        }
        
    });

        //Isotope Portfolio
    $( document ).ready(function() {
        (function ($) {
            var $container = $('.folio'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 0;
                    if (w > 1200) {
                        columnNum  = 5;
                    } else if (w > 900) {
                        columnNum  = 4;
                    } else if (w > 600) {
                        columnNum  = 3;
                    } else if (w > 300) {
                        columnNum  = 2;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.item').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                },
                isotope = function () {
                    $container.isotope({
                        itemSelector: '.item',
                        masonry: {
                            columnWidth: colWidth()
                        }
                    });
                };
            isotope();
            $(window).on('debouncedresize', isotope);
        }(jQuery));
    });





     //Header change on scroll
    $(function() {
        var header = $(".dark");
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
        
            if (scroll >= 100) {
                header.removeClass('dark').addClass("light");
            } else {
                header.removeClass("light").addClass('dark');
            }
        });
    });


    //smooth anchor scrolling
    $(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 900,'easeOutQuint');
     });

    //Mobile Hamburger Menu
    $('button').click(function() {
      $(this).toggleClass('expanded').siblings('div').slideToggle();
    });


//END
});




