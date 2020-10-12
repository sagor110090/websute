@extends('layouts.app',['pageTitle' => __('BlogCategory Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __('BlogCategory') }}
    @endslot
@endcomponent


        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">{{ __('Create New BlogCategory') }}</h4>
                        </div>
                    </div>
                    <a href="javascript:history.back()" title="Back"><button
                            class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>{{ __('Back') }}
                            </button></a>
                    <br />
                    <br />


                    <form method="POST" action="{{ url('/admin/blog-category') }}" accept-charset="UTF-8"
                        class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('admin.blog-category.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>

@endsection
