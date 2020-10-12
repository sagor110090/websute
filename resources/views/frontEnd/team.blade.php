@extends('frontEnd.layouts.app',['pageTitle' => __('Our Team')])
@section('content')

 <!--Page Title-->
 <section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited</div>
                <h2>Team</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Our Team is Very Expert to help <br> Your Business Growth</h2>
            <div class="text">Employees need to realize the importance of working well with their teammates <br> when coming into a new job or an existing one.</div>
        </div>
        <div class="row clearfix">

            <!-- Team Block -->
            @foreach (Helpers::findAll('our_team') as $item)
            <div class="team-block col-lg-3 col-md-4 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                            <img src="{{asset(Storage::url($item->image))}}" alt="" />
                        <div class="overlay-box">
                            <ul class="social-nav">
                                <li class="facebook"><a href="{{$item->facebook}}"><span class="fa fa-facebook-f"></span></a></li>
                                <li class="twitter"><a href="{{$item->twitter}}"><span class="fa fa-twitter"></span></a></li>
                                <li class="google"><a href="{{$item->google_plus}}"><span class="fa fa-google-plus"></span></a></li>
                                <li class="linked"><a href="{{$item->linkedin}}"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                            <div class="content">
                                <h4><a href="javascript:void(0)">{{ $item->name }}</a></h4>
                                <div class="designation">{{ $item->designation }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Team Block -->
            {{-- <div class="team-block col-lg-3 col-md-4 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('frontEnd') }}/images/resource/team-2.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-nav">
                                <li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li class="linked"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                            <div class="content">
                                <h4><a href="#">John Legend</a></h4>
                                <div class="designation">Marketing Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>


@endsection
