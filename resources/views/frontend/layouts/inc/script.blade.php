<script src="{{asset('assets/frontend')}}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/slick.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/waypoints.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/wow.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/magnific-popup.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/select2.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/counterup.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/images-loaded.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/isotope.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/scrollup.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{asset('assets/frontend')}}/js/plugins/jquery.elevatezoom.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <!-- Template  JS -->
    <script src="{{asset('assets/frontend')}}/js/main.js"></script>
    <script src="{{asset('assets/frontend')}}/js/shop.js"></script>

    <script>
        @if($errors->any())
        @foreach($errors->all() as $error)

        toastr.error("{{ $error }}")
        @endforeach
        @endif
    </script>
