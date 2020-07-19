(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_81');

        var item = 4,
            // default setting of carousel
            itemsDesktop = 3,
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
        itemsDesktopSmall=itemsTablet=2;

        function loadImage(){
            var check_delay=400+100;
            setTimeout(function() {
                check_animate();
            },check_delay)
        }
        var delay = false;
        var windowWidth = window.innerWidth || document.documentElement.clientWidth;

        //
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
        function outsideNav (elem) {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_81").hide();
            } else {
                $("#owl_outside_nav_81").show();
            }
            vs_check_loaded(elem);
        }
        //
        if (elm.length) {

            elm.owlCarousel({
                items: item,
                direction: 'ltr',
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                autoPlay: false,
                slideSpeed: 400,
                stopOnHover: true,
                pagination: false,
                addClassActive:true,
                afterInit: vs_check_loaded,
                afterMove: vs_check_loaded,
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

            $('#owl_prev_81000').click(function(){
                elm.trigger('owl.prev');
            });
            $('#owl_next_81000').click(function(){
                elm.trigger('owl.next');
            });




            var owl = elm.data('owlCarousel');
            owl.stop();
            elm.addClass('stopped');

        }
    });
}(Tygh, Tygh.$));
