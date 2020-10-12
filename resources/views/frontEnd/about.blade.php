@extends('frontEnd.layouts.app',['pageTitle' => __('About')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited BD</div>
                <h2>About us</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Introduction Section -->
<section class="introduction-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="{{asset(Storage::url(Helpers::findFirst('about')->image))}}" alt="" />
                        {{-- <div class="projects">
                            More than 350 projects <br> were completed.
                        </div> --}}
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>About Us</h2>
                    </div>
                    <div class="text">
                        <p>{{Helpers::findFirst('about')->short_description}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Introduction Section -->

<!-- Process Section -->
<section class="process-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <div class="title">OUR MISSION and VISSION</div>
            <h2>{{Helpers::findFirst('about')->header}}</h2>
            <div class="text">{!!Helpers::findFirst('about')->description!!}</div>
        </div>
    </div>
</section>
<!-- End Process Section -->

@endsection
