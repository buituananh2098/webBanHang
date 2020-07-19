<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"
        data-no-defer
></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"
        integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4="
        crossorigin="anonymous"
        data-no-defer
></script>
<script data-no-defer>
    if (!window.jQuery) {
        document.write('<script type="text/javascript" src="att/js/lib/jquery/jquery-3.3.1.min.js?ver=1585294392" ><\/script>');
        document.write('<script type="text/javascript" src="att/js/lib/jquery/jquery-migrate-3.0.1.min.js?ver=1585294392" ><\/script>');
    }
</script>
<script type="text/javascript" src="att/js/tygh/scripts-ca69a9418a2f57daa778cc3f9402b9771585294389.js"></script>
<script type="text/javascript" src="att/js/att/customatt.js"></script>
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Slideshow header -->
<script type="text/javascript" src="att/js/att/slideshow_header.js"></script>

<script type="text/javascript" src="att/design/themes/vivashop/js/owl.carousel.min.js" ></script>


<!-- carousel sản phẩm mới -->
<script type="text/javascript" src="att/js/att/slideshow_new_products.js"></script>

<!-- khách hàng đánh giá -->
<script type="text/javascript" src="att/js/att/comment_cl.js"></script>

<!-- carousel bài viết mới nhất -->
<script type="text/javascript" src="att/js/att/carousel_new_blog.js"></script>


{{--<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit&hl=vi" async defer></script>--}}

<!-- click hỗ trợ -->
<script async defer src="att/js/att/support_ol.js"></script>

<script>
    $('a[data-action-cart="add_to_cart"]').on('click', function () {
        var bt_id = $(this).attr('id');
        var imt = 1;
        $.ajax({
            url: '{{ route('att.addcart') }}',
            type: 'GET',
            dataType: 'html',
            data: {
                id: bt_id,
                imt : imt,
            }
        }).success(function(result) {
            $('#att_cart_items').html(result);
            alert('thêm thành công sản phẩm');
        }).fail(function() {
            alert( "error" );
        });
    });
</script>
