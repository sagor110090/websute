@extends('layouts.app',['pageTitle' => __('Message Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('Message') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('Message List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New Message') }}</h5>
                </div>
            </div>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Mail</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($message as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->mail }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ isset($item->status) ? $item->status : 'Unread'}}</td>
                            <td>

                                <a href="{{ url('/admin/message/' . $item->id . '/edit') }}" title="Edit Class"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                                <a href="{{ url('/admin/message/' . $item->id) }}" title="View Message"><button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"
                                        aria-hidden="true"></i></button></a>
                                <form method="POST" id="deleteButton{{$item->id}}"
                                    action="{{ url('/admin/message' . '/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Message"
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
