@extends('frontEnd.layouts.app',['pageTitle' => __('Clients')])
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
            <h2>WE HAVE DONE OVER {{Helpers::findAll('project')->count()}} + PROJECT</h2>
        </div>
        <div class="row clearfix">

            <!-- Team Block -->
            @foreach (Helpers::findAll('client') as $item)

            <div class="col-xs-12 col-sm-6 col-md-6">
                <a href="{{$item->link}}">
                </a>
                <div class="clientArea"><a href="{{$item->link}}">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <img id="client_logo" src="{{asset(Storage::url($item->image))}}" height="80px" weight="100px" class="center">
                        </div>
                    </a>
                    <div class="col-xs-12 col-sm-8 col-md-8"><a href="{{$item->link}}">
                        </a>
                        <h4><a href="http://iranetbd.com/"></a><a href="{{$item->link}}"> Iranet</a> </h4>
                        <p><strong>Address: </strong> {{$item->address}} </p>
                        <p><strong>Service: </strong> {{$item->service}} </p>
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
