<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('author')">
    <title>@yield('title')</title>
    <link href="/assets/css/login-register-lock.css" rel="stylesheet">
    <link href="/assets/css/style.min.css" rel="stylesheet">
<style>
    .form-control-line .form-control{padding:8px!important}
</style>
</head>
<body class="skin-default card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading</p>
        </div>
    </div>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(/images/H2R.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>
</html>
