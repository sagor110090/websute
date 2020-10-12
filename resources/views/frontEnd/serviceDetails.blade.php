@extends('frontEnd.layouts.app',['pageTitle' => __('Service Details')])
@section('content')

<!--Page Title-->

<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited</div>
                <h2>Services Detail</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">home</a></li>
                    <li>Services Detail</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="service-detail">
                    <h2 class="text-dark mb-4"> {{$services->header}} </h2>

                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset(Storage::url($services->image))}}" alt="" />
                        </div>
                        <div class="lower-content">
                            <h2>Overview</h2>
                            <div class="text">
                                <p>{{$services->shortDescription }}</p>
                                <div class="two-column">
                                    <div class="row clearfix">
                                        <!-- Column -->
                                        <div class=" col-sm-12">
                                            <h3>We Make Creative Solutions</h3>
                                            {!!$services->description !!}

                                        </div>
                                        <!-- Column -->
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <div class="chart-image">
                                                <img src="images/resource/chart.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            {{-- <!--Sidebar Side-->
					<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar">
							<div class="sidebar-inner">

								<!-- Blog Services Widget -->
								<div class="sidebar-widget sidebar-services-category">
									<div class="widget-content">
										<ul class="services-cat">
											<li><a href="services.html"><span>Financial Analysis</span></a></li>
											<li class="active"><a href="oil-gas.html"><span>Investment Planning</span></a></li>
											<li><a href="services-single.html"><span>Wealth Balancing</span></a></li>
											<li><a href="services-single.html"><span>Business Consulting</span></a></li>
											<li><a href="services-single.html"><span>Consumer markets</span></a></li>
											<li><a href="services-single.html"><span>Strategic Consulting</span></a></li>
											<li><a href="services-single.html"><span>Restructuring</span></a></li>
											<li><a href="services-single.html"><span>Consulting Analytics</span></a></li>
											<li><a href="services-single.html"><span>Online Consulting</span></a></li>
										</ul>
									</div>
								</div>

								<!-- Brochure -->
								<div class="sidebar-widget brochure-widget">
									<div class="brochure-box">
										<div class="inner">
											<span class="icon flaticon-pdf"></span>
											<div class="text">Project-One .pdf</div>
											<span class="download fa fa-download"></span>
										</div>
										<a href="#" class="overlay-link"></a>
									</div>

									<div class="brochure-box">
										<div class="inner">
											<span class="icon flaticon-doc"></span>
											<div class="text">Project-One .doc</div>
											<span class="download fa fa-download"></span>
										</div>
										<a href="#" class="overlay-link"></a>
									</div>

									<div class="brochure-box">
										<div class="inner">
											<span class="icon flaticon-document"></span>
											<div class="text">Project-One .ppt</div>
											<span class="download fa fa-download"></span>
										</div>
										<a href="#" class="overlay-link"></a>
									</div>

								</div>

								<!-- Contact Widget -->
								<div class="sidebar-widget contact-widget">
									<div class="widget-content" style="background-image:url(images/background/pattern-12.png)">
										<div class="icon flaticon-phone-call"></div>
										<div class="text">Got any Questions? <br> Call Us Today</div>
										<div class="number">1-800-369-8527</div>
										<div class="email">support@merinaconsult.net</div>
									</div>
								</div>

							</div>
						</aside>
					</div> --}}

        </div>
    </div>
</div>

@endsection
