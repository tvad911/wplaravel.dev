</div><!-- end wrapper -->
 <!-- Template core JavaScript's
    ================================================== -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/retina.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <!-- SLIDER REV -->
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:620,
            hideThumbs:200,
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4",
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",
            keyboardNavigation:"off",
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner4",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            forceFullWidth:"off",
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""
            });
        });
    </script>
    @include('include.js')

</body>

<!-- Mirrored from templatevisual.com/demo/kalista/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Oct 2015 14:18:39 GMT -->
</html>