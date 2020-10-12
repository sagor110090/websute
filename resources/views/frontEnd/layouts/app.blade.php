<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Omega Micro Alliance Sevices Company Limited | {{$pageTitle}}</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('frontEnd') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('frontEnd') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontEnd') }}/css/responsive.css" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="{{ asset('frontEnd') }}/css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('frontEnd') }}/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontEnd') }}/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header -->
        <header class="main-header header-style-one">



            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left upper-left clearfix row">
                            <div class="pull-left logo-box col-sm-3">
                                <div class="logo"><a href="{{ asset('/') }}"><img
                                            src="{{ asset('/frontEnd') }}/images/logo.png" alt="" height="400"
                                            width="400" title=""></a></div>
                            </div>
                            <p class="header-text" style="    text-align: center;
                                margin-top: 10px;
                                position: absolute;
                                left: 46%;
                                top: 45px;
                                font-size: 25px;
                                font-weight: 700;">Omega Micro Alliance Sevices Company Limited</p>
                            <!--Info Box-->
                            <!--<div class="upper-column info-box col-sm-3">-->
                            <!--    <div class="icon-box"><span class="flaticon-place"></span></div>-->
                            <!--    <ul>-->
                            <!--        <li><strong>Address</strong></li>-->
                            <!--        <li>{{Helpers::findFirst('contact')->address}}</li>-->
                            <!--    </ul>-->
                            <!--</div>-->

                            <!--Info Box-->
                            <!--<div class="upper-column info-box col-sm-3">-->
                            <!--    <div class="icon-box"><span class="flaticon-email-3"></span></div>-->
                            <!--    <ul>-->
                            <!--        <li>{{Helpers::findFirst('contact')->mail}}</li>-->
                            <!--        <li>{{Helpers::findFirst('contact')->phone}}</li>-->
                            <!--    </ul>-->
                            <!--</div>-->

                            <!--Info Box-->
                            <!--<div class="upper-column info-box col-sm-2">-->
                            <!--    <div class="icon-box"><span class="flaticon-clock-3"></span></div>-->
                            <!--    <ul>-->
                            <!--        <li> <b>{{Helpers::findFirst('contact')->start_time}}</b> to-->
                            <!--            <b>{{Helpers::findFirst('contact')->end_time}}</b> </li>-->
                            <!--        <li><strong>{{Helpers::findFirst('contact')->off_day}} Closed</strong></li>-->
                            <!--    </ul>-->
                            <!--</div>-->

                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Header Lower-->
            <div class="header-lower" style="    margin: -28px;">

                <div class="auto-container">
                    <div class="nav-outer clearfix">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
                        <!-- Main Menu -->
                        <nalov class="main-menu show navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{ asset('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About us</a></li>
                                    <li class="dropdown"><a href="{{ url('/services') }}">Services</a>
                                        <ul>
                                            @foreach (\App\Service::all() as $item)
                                            <li><a href="{{ url('/service-details', [$item->slug]) }}">
                                                    {{$item->header}} </a></li>
                                            @endforeach
                                        </ul>
                                        <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                    </li>
                                    <li class="dropdown"><a href="{{ url('/products') }}">Products</a>
                                        <ul>
                                            @foreach (\App\Project::all() as $item)
                                            <li><a href="{{ url('/product-details', [$item->slug]) }}">
                                                    {{$item->header}} </a></li>
                                            @endforeach
                                        </ul>
                                        <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                    </li>
                                    <li class="dropdown"><a href="{{ url('/products') }}">Solutions</a>
                                        <ul>
                                            @foreach (\App\Solution::all() as $item)
                                            <li><a href="{{ url('/solution-details', [$item->slug]) }}">
                                                    {{$item->header}} </a></li>
                                            @endforeach
                                        </ul>
                                        <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>
                                    </li>
                                    <li><a href="{{ url('/shop ') }}">Shop</a> </li>
                                    <li><a href="{{ url('/gallery ') }}">Gallery</a> </li>
                                    <li><a href="{{ url('/partner ') }}">Partner</a> </li>
                                    <li><a href="{{ url('/contacts') }}">Contact us</a></li>
                                </ul>
                            </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Options Box -->
                            <!--<div class="options-box clearfix">-->

                            <!-- Grid Box -->
                            <!--    <div class="grid-box navSidebar-button">-->
                            <!--        <a href="{{ asset('frontEnd') }}/#" class="icon flaticon-menu-2"></a>-->
                            <!--    </div>-->

                            <!--</div>-->

                    </div>
                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ asset('/') }}"><img src="images/logo.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->
        @yield('content')

        <!--Clients Section-->
        <section class="clients-section">
            <div class="auto-container">

                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        @foreach (Helpers::findAll('client') as $item)
                        <li class="slide-item">
                            <figure class="image-box"><a href="{{$item->link}}"><img
                                        src="{{asset(Storage::url($item->image))}}" alt=""></a></figure>
                        </li>
                        @endforeach

                        {{-- <li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img
                            src="{{ asset('frontEnd') }}/images/clients/2.png" alt=""></a></figure>
                        </li> --}}
                    </ul>
                </div>

            </div>
        </section>
        <!--End Clients Section-->

        <!-- Main Footer -->
        <footer class="main-footer" style="background-image: url({{ asset('frontEnd') }}/images/background/3.jpg)">

            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{ asset('/') }}"><img src="{{ asset('frontEnd') }}/images/footer-logo.png"
                                            height="100" width="100" alt="" /></a>
                                </div>
                                <!--<div class="text">-->
                                <!--    {{Helpers::limit_text(Helpers::findFirst('about')->short_description, 20)}}</div>-->
                                <ul class="contact-link">
                                    <li>
                                        <span class="icon flaticon-home-page"></span>
                                        {{Helpers::findFirst('contact')->address}} </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <!--<div class="footer-title">-->
                                <!--    <h4>Latest News</h4>-->
                                <!--</div>-->
                                <!-- Footer Column -->
                                <ul class="social-icon-one">
                                    <li class="title">Follow Us:</li>
                                    <li><a href="{{Helpers::findFirst('about')->facebook}}"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="{{Helpers::findFirst('about')->google}}"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li><a href="{{Helpers::findFirst('about')->twitter}}"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{Helpers::findFirst('about')->skype}}"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li><a href="{{Helpers::findFirst('about')->linkedin}}"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">

                            {{-- Popup Model --}}
                            <!-- Modal -->
                            <div class="modal fade" id="newsModal" tabindex="-1" role="dialog"
                                aria-labelledby="newsModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="error"><strong>{{$message = Session::get('success')}}</strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- popup model end --}}

                            <div class="footer-widget newsletter-widget">
                                <div class="footer-title">
                                    <h4>Newsletter</h4>
                                </div>

                                <div class="newsletter-form">
                                    <form method="post" action="{{url('/newsletter')}}">
                                        {{csrf_field()}}
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="email" name="email" value=""
                                                    placeholder="Enter your email address ....." required="">
                                                <button type="submit" class="theme-btn submit-btn"><span
                                                        class="txt flaticon-send"></span></button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="copyright">&copy; {{date('Y')}} Omega Micro Alliance Sevices Company Limited
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="{{ asset('fronted') }}/#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">

                        <!-- Sidebar Info Content -->
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{ asset('/frontEnd') }}/images/logo.png"
                                            alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h2>About Us</h2>
                                    <!--<p class="text">{!!Helpers::findFirst('about')->short_description!!}</p>-->
                                    <a href="{{url('/contacts')}}" class="theme-btn btn-style-two"><span
                                            class="txt">Consultation</span></a>
                                </div>
                                <div class="contact-info">
                                    <h2>Contact Info</h2>
                                    <ul class="list-style-one">
                                        <li><span
                                                class="icon fa fa-location-arrow"></span>{{Helpers::findFirst('contact')->address}}
                                        </li>
                                        <li><span
                                                class="icon fa fa-phone"></span>{{Helpers::findFirst('contact')->phone}}
                                        </li>
                                        <li><span
                                                class="icon fa fa-envelope"></span>{{Helpers::findFirst('contact')->mail}}
                                        </li>
                                        <li><span class="icon fa fa-clock-o"></span>Week Days:
                                            {{Helpers::findFirst('contact')->start_time}} to
                                            {{Helpers::findFirst('contact')->end_time}}
                                            {{Helpers::findFirst('contact')->off_day}}: Closed</li>
                                    </ul>
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="facebook"><a href="{{url('/' . Helpers::findFirst('about')->facebook)}}"
                                            class="fa fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="{{url('/' . Helpers::findFirst('about')->twitter)}}"
                                            class="fa fa-twitter"></a></li>
                                    <li class="linkedin"><a href="{{url('/' . Helpers::findFirst('about')->linkedin)}}"
                                            class="fa fa-linkedin"></a></li>
                                    <li class="instagram"><a
                                            href="{{url('/' . Helpers::findFirst('about')->instagram)}}"
                                            class="fa fa-instagram"></a></li>
                                    <li class="youtube"><a href="{{url('/' . Helpers::findFirst('about')->youtube)}}"
                                            class="fa fa-youtube"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

    <!-- Header Search -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow"></span></button>
        <form method="post" action="Javascript:void(0)">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Modal -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('/newsletter')}}">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" value=""
                                    placeholder="Enter your email address ....." required="">
                                <button type="submit" class="btn btn-secondary">Submit<span
                                        class="txt flaticon-send"></span></button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- popup model end --}}

    <script src="{{ asset('frontEnd') }}/js/jquery.js"></script>
    <script src="{{ asset('frontEnd') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('frontEnd') }}/js/appear.js"></script>
    <script src="{{ asset('frontEnd') }}/js/nav-tool.js"></script>
    <script src="{{ asset('frontEnd') }}/js/mixitup.js"></script>
    <script src="{{ asset('frontEnd') }}/js/owl.js"></script>
    <script src="{{ asset('frontEnd') }}/js/wow.js"></script>
    <script src="{{ asset('frontEnd') }}/js/isotope.js"></script>
    <script src="{{ asset('frontEnd') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('frontEnd') }}/js/script.js"></script>
    <script src="{{ asset('frontEnd') }}/js/color-settings.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    {{-- @include('layouts.elements.alert') --}}
    <script type="text/javascript">
        $(document).ready(function () {
            var message = '{{ Session::get('
            success ')}}';
            var errorCount = '{{count($errors)}}';
            if (message) {
                document.getElementById("error").style.color = "green";
                $('#newsModal').modal('show');
            }
            if (errorCount > 0) {
                document.getElementById("error").innerHTML = "The email has already been taken.";
                document.getElementById("error").style.color = "red";
                $('#newsModal').modal('show');
            }

            $('#contributor').click(function () {
                document.getElementById("error").innerHTML = "<br /><br />" +
                    "Name: Mehedi Hasan Sagor" + "<br />" +
                    "Designation: Web Developer " + "<br />" + "Mobile: +880 1797715948 " + "<br />" +
                    "Linkedin: ";
                $('#newsModal').modal('show');
            });
            $('#subscribe').click(function () {
                $('#subscribeModal').modal('show');
            });
        });

    </script>
</body>

</html>
