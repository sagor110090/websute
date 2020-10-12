@extends('layouts.app',['pageTitle' => __(' Testimonial Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Testimonial') }}
    @endslot
@endcomponent


        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">{{ __('Create New  Testimonial') }}</h4>
                        </div>
                    </div>
                    <a href="{{ url('/admin/testimonials') }}" title="Back"><button
                            class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>{{ __('Back') }}
                            </button></a>
                    <br />
                    <br />


                    <form method="POST" action="{{ url('/admin/testimonials') }}" accept-charset="UTF-8"
                        class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('admin.testimonials.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>

@endsection