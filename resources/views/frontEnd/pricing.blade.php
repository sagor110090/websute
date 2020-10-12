@extends('frontEnd.layouts.app',['pageTitle' => __('pricing list')])
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">Welcome to Omega Micro Alliance Sevices Company Limited BD</div>
                <h2>Pricing list</h2>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>pricing list</li>
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
                            <h2>Pricing list</h2>
                        </center>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pricing Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\PricingList::get() as $item)
                                <tr>
                                    <td>{{$item->pricing_name}}</td>
                                    <td>{{$item->short_description}}</td>
                                    <td>{{$item->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</section>


@endsection
