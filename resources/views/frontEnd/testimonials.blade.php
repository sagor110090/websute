@extends('frontEnd.layouts.app',['pageTitle' => __('testimonials')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited BD</div>
                <h2>Testimonials</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>testimonials</li>
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

            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <center>
                            <h2>Testimonials</h2>
                        </center>
                    </div>
                    <div class="row">
                        <p class="card-text"> {!!\App\Testimonial::find(1)->text!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</section>


@endsection
