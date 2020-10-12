@extends('frontEnd.layouts.app',['pageTitle' => __('Home')])
@section('content')

<!--Main Slider-->
<section class="main-slider">

    <div class="main-slider-carousel owl-carousel owl-theme">
        @foreach (Helpers::findAll('slider') as $item)
        <div class="slide" style="background-image:url({{asset(Storage::url($item->image))}})">
            <div class="auto-container">

                <!-- Content boxed -->
                <div class="content-boxed">
                    <div class="title">{{$item->slider_small_title}}</div>
                    <h1>{{$item->slider_large_title}}</h1>
                    <div class="link-box clearfix">
                        <a href="{{ url('/' . $item->video_link) }}" class="lightbox-image video-box"><span
                                class="fa fa-play"><i class="ripple"></i></span></a>
                        <a href="{{ url('/services') }}" class="theme-btn btn-style-three"><span class="txt">View
                                Service</span></a>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</section>
<!--End Main Slider-->

<!-- Services Section -->
<section class="services-section">
    <div class="patern-layer" style="background-image: url({{ asset('frontEnd') }}/images/background/pattern-1.jpg)">
    </div>
    <div class="auto-container">
        <div class="inner-container">

            <div class="three-item-carousel owl-carousel owl-theme">
                @foreach (Helpers::findAll('service') as $item)
                <!-- Service Block -->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="icon-box">
                                {{-- <span class="icon flaticon-pie-chart-3"></span> --}}
                                <img class="img-thumbnail" src=" {{Storage::url($item->image)}}" alt="">
                            </div>
                            <h5><a href="{{ url('/service-details', [$item->slug]) }}">{{$item->header}}</a></h5>
                            <div class="text">{{ Helpers::limit_text($item->shortDescription, 20) }}</div>
                        </div>
                        <div class=""></div>
                        <a href="{{ url('/service-details', [$item->slug]) }}" class="arrow-box"><span
                                class="icon flaticon-arrow-pointing-to-right"></span></a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="consult">You can also find our <a href="{{url('/contacts')}}">Consultant Service</a> to contact for
            the consulting</div>
    </div>
</section>
<!-- End Services Section -->

<!-- Introduction Section -->
<!--<section class="introduction-section">-->
<!--    <div class="auto-container">-->
<!--        @foreach (Helpers::findAll('objective') as $item)-->
<!--        <div class="row clearfix">-->

<!-- Image Column -->
<!--            <div class="image-column col-lg-6 col-md-12 col-sm-12">-->
<!--                <div class="inner-column">-->
<!--                    <div class="image">-->
<!--                        <img src="{{ asset(Storage::url($item->image))}}" alt="" />-->
<!--                        <div class="projects">-->
<!--                            More than {{Helpers::findAll('project')->count()}} products.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!-- Content Column -->
<!--            <div class="content-column col-lg-6 col-md-12 col-sm-12">-->
<!--                <div class="inner-column">-->
<!--                    <div class="sec-title">-->
<!--                        <div class="title">Our introduction</div>-->
<!--                        <h2>{{$item->header}}</h2>-->
<!--                    </div>-->
<!--                    <div class="text">-->
<!--                        <p>{!!$item->description!!}</p>-->
<!--                    </div>-->

<!-- Contact -->
<!--                    <div class="contact">-->
<!--                        <span class="question">Call to Ask Any Question</span>-->
<!--                        <a href="javascript:void(0)">{{$item->faq}}</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--        @endforeach-->
<!--    </div>-->
<!--</section>-->
<!-- End Introduction Section -->


{{-- <section class="portfolio-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Ouer Products</h2>
        </div>

        <!--Isotope Galery-->
        <div class="sortable-masonry">

            <!--Filter-->
            <div class="filters clearfix">

                <ul class="filter-tabs filter-btns text-center clearfix">
                    <li class="active filter" data-role="button" data-filter=".all">All</li>
                    @foreach (Helpers::findAll('category') as $item)
                    <li class="filter" data-role="button" data-filter=".{{$item->id}}">{{$item->name}}</li>
@endforeach
</ul>

</div>

<div class="items-container row clearfix">

    @foreach (Helpers::findAll('project')->slice(0, 6) as $item)
    <!-- Portfolio Block -->
    <div class="project-block masonry-item all {{$item->category_id}} strategy col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box">
            <div class="image">
                <img src="{{asset(Storage::url($item->thumbnail))}}" alt="" />
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="title">{{$item->header}}</div>
                        <h4><a
                                href="{{ isset($item->link) ? $item->link : 'javascript:void(0)' }}">{{$item->header}}</a>
                        </h4>
                        <a href="{{ url('/product-details', [$item->slug]) }}" data-caption=""
                            class="plus icon flaticon-arrow-pointing-to-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
</div>

<!-- Text Box -->
<div class="text-box text-center">
    <div class="text">If You Want More Product Now Then <a href="{{ url('/products') }}">Click Hear</a>.</div>
</div>

</div>
</section> --}}
<!-- End Portfolio Section -->

<!-- Contact Section -->
<section class="contact-section" style="background-image: url(images/background/2.jpg)">
    <div class="auto-container">

        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Default Form -->
                    <div class="default-form">
                        <form class="well form-horizontal" action="{{url('/message')}}" method="post"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <fieldset>
                                <div class="row clearfix">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Name *" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="mail" value="" placeholder="Email *" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Subject *" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone *" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group text-center btn-column col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one"><span
                                                class="txt">Submit</span></button>
                                    </div>

                                </div>
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Content Column -->
            @foreach (Helpers::findAll('contact') as $item)
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <h2>{{$item->header}}</h2>
                        {{-- <div class="text">{!! $item->body_text !!}</div> --}}
                    </div>

                    <ul class="list-style-two">
                        <li>
                            <span class="icon flaticon-maps-and-flags"></span>
                            <strong>Head Office Address:</strong>
                            {{$item->address}}
                        </li>
                        <li>
                            <span class="icon flaticon-call"></span>
                            <strong>Call for help:</strong>
                            {{$item->phone}}
                        </li>

                    </ul>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Contact Section -->



@endsection
