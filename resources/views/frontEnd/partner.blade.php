@extends('frontEnd.layouts.app',['pageTitle' => __('partner')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited BD</div>
                <h2>partner</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>partner</li>
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
                            <h2>Partner</h2>
                        </center>
                    </div>
                    <div class="row">
                        @foreach (\App\Partner::all() as $item)

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">

                                <div class="card-body">
                                    <p class="card-text">{{$item->info}}</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>

            </div>
        </div>
</section>


@endsection
