@extends('layouts.app',['pageTitle' => __('Client Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('Client') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('Client List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New Client') }}</h5>
                </div>
            </div>
            <a href="{{ url('/admin/client/create') }}" class="btn btn-success btn-sm" title="Add New Client">
                <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Client Name</th>
                            <th>Address</th>
                            <th>Service</th>
                            <th>Link</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($client as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->client_name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->service }}</td>
                            <td>{{ $item->link }}</td>
                            <td>

                                <a href="{{ url('/admin/client/' . $item->id . '/edit') }}" title="Edit Class"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                                <a href="{{ url('/admin/client/' . $item->id) }}" title="View Client"><button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"
                                        aria-hidden="true"></i></button></a>
                                <form method="POST" id="deleteButton{{$item->id}}"
                                    action="{{ url('/admin/client' . '/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Client"
                                        onclick="sweetalertDelete({{$item->id}})"><i class="fa fa-trash"
                                            aria-hidden="true"></i></button>
                                </form>
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
