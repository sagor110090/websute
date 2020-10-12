@extends('frontEnd.layouts.app',['pageTitle' => __('partner')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited BD</div>
                <h2>Gallery</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>Gallery</li>
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
                            <h2>Gallery</h2>
                        </center>
                    </div>
                    <div class="row">
                        @foreach (\App\Gallery::all() as $item)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src=" {{Storage::url($item->image)}} ">
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
</section>


@endsection
