<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Sarujan P" />
	<meta name="description" content="தமிழ் மாணவர் ஒன்றியம் - களனி பல்கலைகழகம்." />
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<title>தமிழ் மாணவர் ஒன்றியம் | களனி பல்கலைகழகம்</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/css/assets.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/css/typography.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/css/shortcodes/shortcodes.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/toastr.min.css') }}" />
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/css/color/color-1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/vendors/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/vendors/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/assets/vendors/revolution/css/navigation.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Tamil:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</head>
<body id="bg">
    @include('blog.include.header')
    @yield('main')
    @include('blog.include.footer')

    <script src="{{asset('assets/blog/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/counter/waypoints-min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/counter/counterup.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/masonry/masonry.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/masonry/filter.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/blog/assets/js/functions.js')}}"></script>
    <script src="{{asset('assets/blog/assets/js/contact.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('assets/blog/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script>
    jQuery(document).ready(function() {
        var ttrevapi;
        var tpj =jQuery;
        if(tpj("#rev_slider_486_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_486_1");
        }else{
            ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"assets/vendors/revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"on",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    },
                    
                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%",
                    presize:false
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[768,600,600,600],
                lazyType:"none",
                parallax: {
                    type:"scroll",
                    origo:"enterpoint",
                    speed:400,
                    levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
                    type:"scroll",
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });	
    </script>
    @yield('scripts')
    <button class="back-to-top fa fa-chevron-up" ></button>
</body>
</html>



