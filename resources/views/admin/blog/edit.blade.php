@extends('layouts.app',['pageTitle' => __('Blog Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __('Blog') }}
    @endslot
@endcomponent

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Blog') }}</div>
                    <div class="card-body">
                        <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{ url('/admin/blog/' . $blog->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.blog.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
