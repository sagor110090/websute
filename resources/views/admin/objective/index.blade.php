@extends('layouts.app',['pageTitle' => __('Objective Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('objective') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('objective List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New objective') }}</h5>
                </div>
            </div>
            <a href="{{ url('/admin/objective/' . 1 . '/edit') }}" class="btn btn-success btn-sm"
                title="Add New ojective">
                <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Update') }}
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Header</th>
                            <th>Description</th>
                            <th>FAQ's</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($objective as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->header }}</td>
                            <td>{{Helpers::limit_text($item->description, 20)}}</td>
                            <td>{{ $item->faq }}</td>
                            <td>

                                <a href="{{ url('/admin/objective/' . $item->id . '/edit') }}"
                                    title="Edit Class"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"
                                            aria-hidden="true"></i>
                                    </button></a>
                                    <a href="{{ url('/admin/objective/' . $item->id) }}" title="View ojective"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
