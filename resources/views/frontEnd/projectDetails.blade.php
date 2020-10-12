@extends('frontEnd.layouts.app',['pageTitle' => __('Project Details')])
@section('content')


<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited</div>
                <h2>Product Detail</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>Product Detail</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Projects Detail Section -->
<section class="projects-detail-section">
    <div class="auto-container">
        <div class="image">
            <img src="images/gallery/20.jpg" alt="" />
            <div class="project-info">
                <div class="info-inner">
                    <h3>Product Description</h3>
                    <h3 style="font-size: 14px">price: {{$projects->value}} </h3>

                </div>
            </div>
        </div>
        <div class="lower-content">
            <div class="title">{{$projects->header}}</div>
            <h3>Product Description</h3>
            <div class="two-column">
                <div class="row clearfix">
                    <div class="column col-lg-12 col-md-12 col-sm-12">
                        <img src="{{asset(Storage::url($projects->thumbnail))}}" alt="" />
                    </div>
                </div>
            </div>
            <p>{!!$projects->description!!}</p>
        </div>
    </div>
</section>
<!-- End Projects Detail Section -->



@endsection
