<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <title>
            #hastag on Tagit. See what people are saying and join the conversation.
        </title>
        <!--     Fonts and icons     -->

        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Nucleo Icons -->
        <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{ asset('css/blk-design-system.css?v=1.0.0') }}" rel="stylesheet">
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
        <script src="{{ asset('js/core/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
var webUrl = {!! json_encode(url('/')) !!};
        </script>
    </head>

    <body class="index-page">
        <!-- Navbar -->
        @include('layouts.element.navbar')

        <!-- End Navbar -->
        <div class="wrapper">
            @yield('content')
            @include('layouts.element.modal')
            <!--           @include('layouts.element.footer')-->
        </div>
        <!--   Core JS Files   -->

        <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/bootstrap-switch.js') }}" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
        <!-- Chart JS -->
        <script src="{{ asset('js/plugins/chartjs.min.js') }}" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="{{ asset('js/plugins/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
        <!-- Black Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('demo/demo.js') }}" type="text/javascript"></script>
        <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('js/blk-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>
        <script src="{{ asset('js/ajax.js') }}" type="text/javascript"></script>

        <script>
$(document).ready(function () {
    blackKit.initDatePicker();
    blackKit.initSliders();
});

function scrollToDownload() {

    if ($('.section-download').length != 0) {
        $("html, body").animate({
            scrollTop: $('.section-download').offset().top
        }, 1000);
    }
}
        </script>
    </body>

</html>