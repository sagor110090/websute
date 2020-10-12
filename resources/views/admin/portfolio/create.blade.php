@extends('layouts.app',['pageTitle' => __(' Portfolio Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Portfolio') }}
    @endslot
@endcomponent


        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">{{ __('Create New  Portfolio') }}</h4>
                        </div>
                    </div>
                    <a href="{{ url('/admin/portfolio') }}" title="Back"><button
                            class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>{{ __('Back') }}
                            </button></a>
                    <br />
                    <br />


                    <form method="POST" action="{{ url('/admin/portfolio') }}" accept-charset="UTF-8"
                        class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('admin.portfolio.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>

@endsection