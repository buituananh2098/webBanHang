<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'dashboard')</title>
    {{-- <link rel="icon" href="assets/favicon.png" type="image/x-icon" /> --}}
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    {{-- <link rel="stylesheet" href="/backend/libs/select2/dist/css/select2.min.css"> --}}
    <link rel="stylesheet" href="/backend/assets/css/site.min.css">
    <link rel="stylesheet" href="/backend/assets/css/jquery.toast.css">
    <link rel="stylesheet" href="/backend/assets/css/att.css">
    @yield('css')
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
            border-radius: 50px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background: #999;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #448bff;
        }
    </style>
</head>
<body class="layout-row">
@include('backend.layouts.left_sidebar')
<div id="main" class="layout-column flex">
    @include('backend.layouts.header')
    <div id="content" class="flex">
        @yield('content')
    </div>
    @include('backend.layouts.footer')
</div>
<script src="/backend/assets/js/site.min.js"></script>
<script src="/backend/libs/pjax/pjax.js"></script>
<script src="/backend/assets/js/toast.js"></script>
<script src="/backend/assets/js/crud.js"></script>
<script src="/ckeditor/ckeditor.js" type="text/javascript"></script>

{{-- <script src="/backend/libs/typeahead.js/dist/typeahead.bundle.min.js"></script> --}}
{{-- <script src="/backend/assets/js/plugins/typeahead.js"></script> --}}
{{-- <script src="/backend/libs/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script> --}}
{{-- <script src="/backend/assets/js/plugins/fullscreen.js"></script> --}}
{{-- <script src="/backend/libs/select2/dist/js/select2.min.js"></script>
<script src="/backend/assets/js/plugins/select2.js"></script> --}}


<script>
        @if(Session::has('message'))
    var type = "{{ Session::get('type', 'success') }}";
    var message = "{{ Session::get('message') }}";
    notification(type, message);
    @endif
</script>
@yield('js')
</body>
</html>
