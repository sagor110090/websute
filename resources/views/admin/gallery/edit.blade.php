@extends('layouts.app',['pageTitle' => __(' Gallery Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Gallery') }}
    @endslot
@endcomponent

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit  Gallery') }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/gallery') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{ url('/admin/gallery/' . $gallery->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.gallery.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
