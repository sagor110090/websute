@extends('layouts.app',['pageTitle' => __('BlogCategory Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __('BlogCategory') }}
    @endslot
@endcomponent

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit BlogCategory') }}</div>
                    <div class="card-body">
                        <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{ url('/admin/blog-category/' . $blogcategory->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.blog-category.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
