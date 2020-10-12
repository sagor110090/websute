@extends('layouts.app',['pageTitle' => __('About Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('About') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('About Us') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New About') }}</h5>
                </div>
            </div>
            {{-- <a href="{{ url('/admin/about/create') }}" class="btn btn-success btn-sm" title="Add New About">
                <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
            </a> --}}
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Header</th>
                            <th>shortDescription</th>
                            <th>Description</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($about as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->header }}</td>
                            <td>{{ Helpers::limit_text($item->short_description, 20) }}</td>
                            <td>{{ Helpers::limit_text($item->description, 20) }}</td>
                            <td>

                                <a href="{{ url('/admin/about/' . $item->id . '/edit') }}" title="Edit Class"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                                <a href="{{ url('/admin/about/' . $item->id) }}" title="View About"><button
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
