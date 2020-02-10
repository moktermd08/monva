<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">

</head>
<body>
    <header>
    <nav>
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo"></div>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
    <div class="container">
        <div class="justify-content-center">
            @include('components.alertMessages')
        </div>
    </div>

    @yield('content')


<!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                    <h5 class="pt2">Find us</h5>
                    <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p><i class="fa fa-location-arrow"></i> 116 Windmill Rd, Croydon CR0 2XQ </p>
                    <p><i class="fa fa-phone"></i> +xxx-xxxxxxxxx </p>
                    <p><i class="fa fa fa-envelope"></i> info@example.com </p>
                </div>

                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="pt2">Quick links</h5>
                    <ul class="footer_ul">
                        <li><a href="#">Image Rectoucing</a></li>
                        <li><a href="#">Clipping Path</a></li>
                        <li><a href="#">Hollow Man Montage</a></li>
                        <li><a href="#">Ebay & Amazon</a></li>
                        <li><a href="#">Hair Masking/Clipping</a></li>
                        <li><a href="#">Image Cropping</a></li>
                    </ul>
                </div>

                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="pt2">Quick links</h5>
                    <ul class="footer_ul">
                        <li><a href="#">Remove Background</a></li>
                        <li><a href="#">Shadows & Mirror Reflection</a></li>
                        <li><a href="#">Logo Design</a></li>
                        <li><a href="#">Vectorization</a></li>
                        <li><a href="#">Hair Masking/Clipping</a></li>
                        <li><a href="#">Image Cropping</a></li>
                    </ul>
                </div>

                <div class=" col-sm-4 col-md  col-12 col">
                    <h5 class="pt2">Follow us</h5>
                    <ul class="footer_ul2">
                        <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a>
                            <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a>
                            <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a>
                            <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="foote_bottom_ul">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p class="text-center">Copyright @<?= date('Y')?></p>

            <ul class="social_footer_ul">
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>

<!-- Scripts -->
<script src="{{asset('js/app.js')}}" type="application/javascript"></script>
</body>
</html>
