@extends('frontEnd.layouts.app',['pageTitle' => __('Service Details')])
@section('content')

<!--Page Title-->

<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited</div>
                <h2>solutions Detail</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">home</a></li>
                    <li>solutions Detail</li>
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
                    <h2 class="text-dark mb-4"> {{$solutions->header}} </h2>

                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset(Storage::url($solutions->image))}}" alt="" />
                        </div>
                        <div class="lower-content">
                            <h2>Overview</h2>
                            <div class="text">
                                <p>{{$solutions->shortDescription }}</p>
                                <div class="two-column">
                                    <div class="row clearfix">
                                        <!-- Column -->
                                        <div class=" col-sm-12">
                                            <h3>We Make Creative solutions</h3>
                                            {!!$solutions->description !!}

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
        </div>
    </div>
</div>

@endsection
