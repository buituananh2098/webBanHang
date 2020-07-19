<style>
    #autoHide {
        -moz-animation: cssAnimation 0s ease-in 3s forwards;
        /* Firefox */
        -webkit-animation: cssAnimation 0s ease-in 3s forwards;
        /* Safari and Chrome */
        -o-animation: cssAnimation 0s ease-in 3s forwards;
        /* Opera */
        animation: cssAnimation 0s ease-in 3s forwards;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    @keyframes cssAnimation {
        to {
            width:0;
            height:0;
            overflow:hidden;
        }
    }
    @-webkit-keyframes cssAnimation {
        to {
            width:0;
            height:0;
            visibility:hidden;
        }
    }
</style>
<div class="cm-notification-container notification-container" id="autoHide">
    <div class="cm-notification-content notification-content alert-{{ Session::has('type') ? Session::get('type') : '' }}">
        <button type="button" class="close cm-notification-close " data-dismiss="alert">×</button>
{{--        <strong>{{ Session::has('type') ? Session::get('type') : '' }}</strong>--}}
        {{ Session::has('message') ? Session::get('message') : '' }}
    </div>
</div>
