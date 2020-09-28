<!--/footer-->
<footer class="pt-lg-5 inner-page-footer">
    <div class="social_media_w3layouts text-center">
        <ul class="social-icons justify-content-center mt-md-5 mt-3">
            <li class="mr-1"><a href="https://fb.com/fenix.p2h"><span class="fab fa-facebook-f"></span></a></li>
            <li class="mx-1"><a href="https://twitter.com/#"><span class="fab fa-twitter"></span></a></li>

        </ul>
        <p class="copy-right-w3ls my-3">© 2020 PHP Test. All rights reserved | D&P by <a href="https://fb.com/fenix.p2h">Muhammad Khalaf</a></p>
    </div>
</footer>



</section>
<!--//footer-->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src='{{asset('js/aos.js')}}'></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>

<!--  light box js -->
<script src="{{asset('js/lightbox-plus-jquery.min.js')}}">
</script>
<!-- //light box js-->
<!--/ start-smoth-scrolling -->
<script src="{{asset('js/move-top.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->

<!-- //js -->

<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('js/jquery.lazy.plugins.min.js')}}"></script>

<script>
    $(function(){
        $('#loader').fadeOut(2000);
        $('img').addClass('lazy');
        $('.lazy').Lazy({
            // your configuration goes here
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true,
            onError: function(element) {
                //console.log('error loading ' + element.data('src'));
            }
        });
    });
    </script>
</body>

</html>
