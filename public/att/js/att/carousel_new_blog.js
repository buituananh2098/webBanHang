(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_373');

        var item = 3,
            // default setting of carousel
            itemsDesktop = 4,
            itemsDesktopSmall = 3;
        itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        function loadImage(){
            var check_delay=400+100;
            setTimeout(function() {
                check_animate();
            },check_delay)
        }
        var delay = '3000';
        var windowWidth = window.innerWidth || document.documentElement.clientWidth;
        if (elm.length) {
            elm.owlCarousel({
                direction: 'ltr',
                items: 3,
                itemsDesktop: [1247, itemsDesktopSmall],
                itemsDesktopSmall: [1008, 3],
                itemsTablet: [768, 2],
                itemsMobile: [320, 1],
                autoPlay: '3000',
                slideSpeed: 400,
                rewindSpeed: 400,
                stopOnHover: true,
                navigation: true,
                navigationText: ['', ''],
                pagination: false,
                addClassActive:true,
                afterInit: vs_check_loaded,
                afterMove: vs_check_loaded,
            });
            function vs_check_loaded(elem){
                elem.trigger('owl.stop');
                images=$(".active img.lazyOwl",elm);
                active_anim=$(".active .scroll-image,.active .jscroll-item",elm);
                if (elm.visible(true)){
                    active_anim.each(function(){
                        $(this).one('load',loadImage());
                    });
                    images.each(function(){
                        var img=$(this);
                        img.one('load', function() {
                            img.removeAttr("data-src");
                            img.removeAttr("style");
                            img.removeClass("lazyOwl");
                            img.removeClass("vs_lazy_mobile");
                            if (delay && windowWidth > 1006){
                                elem.trigger('owl.play',delay);
                            }
                            return;
                        }).attr('src', img.data("src"))
                            .each(function() {
                                //Cache fix for browsers that don't trigger .load()
                                if(this.complete) $(this).trigger('load');
                            });
                    });
                }

            }
            var owl = elm.data('owlCarousel');
            owl.stop();
            elm.addClass('stopped');
        }
    });
}(Tygh, Tygh.$));
