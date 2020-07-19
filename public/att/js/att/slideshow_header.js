(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_2176');
        var delay = '5000';
        var windowWidth = window.innerWidth || document.documentElement.clientWidth;

        if (slider.length) {
            slider.owlCarousel({
                direction: 'ltr',
                items: 1,
                singleItem : true,
                slideSpeed: 400,
                autoPlay: delay,
                stopOnHover: true,
                addClassActive:true,
                afterInit: vs_check_loaded,
                afterMove: vs_check_loaded,
                pagination: false,
                navigation: true,
                navigationText: ['', ''],
            });
            owl = slider.data('owlCarousel');
            owl.stop();
            slider.addClass('stopped');

            function vs_check_loaded(elem){

                elem.trigger('owl.stop');
                images=$(".active img.lazyOwl",slider);
                if (images!==null && images.length>0){
                    if (slider.visible(true)){
                        images.each(function(){
                            var img=$(this);
                            img.one('load', function() {
                                img.removeAttr("data-src");
                                img.removeAttr("style");
                                img.removeClass("vs_lazy_mobile");
                                if (delay){
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
                }else{
                    elem.trigger('owl.play',delay);
                }
            }
        }
    });
}(Tygh, Tygh.$));
