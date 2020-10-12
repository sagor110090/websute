@extends('frontEnd.layouts.app',['pageTitle' => __('portfolios')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited BD</div>
                <h2>Portfolios</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>portfolios</li>
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
                            <h2>portfolios</h2>
                        </center>
                    </div>
                    <div class="row">
                        @foreach (App\Portfolio::get() as $item)
                        <div class="col-md-4" >
                            <div class="card mb-4 box-shadow" style="-webkit-box-shadow: -6px -5px 36px -13px rgba(0,0,0,0.74);
                            -moz-box-shadow: -6px -5px 36px -13px rgba(0,0,0,0.74);
                            box-shadow: -6px -5px 36px -13px rgba(0,0,0,0.74);">
                                <img class="card-img-top"
                                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                    alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                                    src="{{Storage::url($item->image)}}" data-holder-rendered="true">
                                <div class="card-body">
                                    <h4>{{$item->project_name}}</h4>
                                    <p class="card-text">{{$item->porject_description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</section>


@endsection
