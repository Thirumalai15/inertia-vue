<!DOCTYPE html>
<html>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/animate.css') }} "/>
    <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/tiny-slider.css') }} "/>
    <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/main.css') }}" />

    <title>{{ config('app.name') }}</title>

</head>
<body>
{{--<div id="preloader">--}}
{{--    <div class="appmeet-load"></div>--}}
{{--</div>--}}
@inertia
@routes
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>
<script src="{{ asset('theme/appmeet/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/glightbox.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/count-up.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/isotope.min.js' )}}"></script>
<script src="{{ asset('theme/appmeet/assets/js/main.js') }}"></script>
<script src="{{ asset('/js/app.js') }}" defer></script>
<script type="text/javascript">
    //======== tiny slider
    tns({
        container: '.client-logo-carousel',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 5,
            }
        }
    });

    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });

    //====== counter up
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
    });
    cu.start();
</script>
</body>
</html>