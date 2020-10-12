@extends('layouts.app',['pageTitle' => __(' Pricing List Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Pricing List') }}
    @endslot
@endcomponent


        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">{{ __('Create New  Pricing List') }}</h4>
                        </div>
                    </div>
                    <a href="{{ url('/admin/pricing-list') }}" title="Back"><button
                            class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>{{ __('Back') }}
                            </button></a>
                    <br />
                    <br />


                    <form method="POST" action="{{ url('/admin/pricing-list') }}" accept-charset="UTF-8"
                        class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('admin.pricing-list.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>

@endsection