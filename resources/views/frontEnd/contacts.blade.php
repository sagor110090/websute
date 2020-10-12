@extends('frontEnd.layouts.app',['pageTitle' => __('Contacts')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited</div>
                <h2>Contact Us</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Info Column -->
            @foreach (Helpers::findAll('contact') as $item)
            <div class="info-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <div class="title">Get in Touch</div>
                        <h2>{{$item->header}}</h2>
                        <div class="text">{!!$item->body_text!!}</div>
                    </div>
                    <ul class="list-style-two style-two">
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

            <!-- Form Column -->
            <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Default Form -->
                    <div class="default-form style-two contact-form">
                            <form class="well form-horizontal" action="{{url('/message')}}" method="post" enctype="multipart/form-data">
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
                                        <button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit</span></button>
                                    </div>

                                </div>
                            </fieldset>
                            </form>
                        </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Price Section -->

<!-- Contact Map Section -->
<section class="contact-map-section">
    <div class="auto-container">
        <div class="map-outer">
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="{{ asset('frontEnd') }}/images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </div>
</section>
<!-- End Map Section -->


@endsection
