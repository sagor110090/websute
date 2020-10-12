@extends('frontEnd.layouts.app',['pageTitle' => __('Projects')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited</div>
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Projects Page Section -->
<section class="projects-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Our Products</h2>
        </div>

        <!-- MixitUp Galery -->
        <div class="mixitup-gallery">

            <!--Filter-->
            <div class="filters text-center clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    @foreach (Helpers::findAll('category') as $item)
                    <li class="filter" data-role="button" data-filter=".{{$item->id}}">{{$item->name}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="filter-list row clearfix">
                @foreach (Helpers::findAll('project') as $item)
                <!-- Portfolio Block -->
                <div class="project-block mix all {{$item->category_id}} strategy col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img class="" src="{{asset(Storage::url($item->thumbnail))}}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="title">Category</div>
                                    <h4><a
                                            href="{{ isset($item->link) ? $item->link : 'javascript:void(0)' }}">{{$item->header}}</a>
                                    </h4>

                                    <a href="{{ url('/project-details', [$item->slug]) }}" data-caption=""
                                        class="plus icon flaticon-arrow-pointing-to-right"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Projects Page Section -->
@endsection
