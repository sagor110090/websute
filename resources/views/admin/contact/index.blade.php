@extends('layouts.app',['pageTitle' => __('Contact Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('Contact') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('Contact List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New Contact') }}</h5>
                </div>
            </div>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Header</th>
                            <th>Mail</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Body Text</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Off Day</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->header }}</td>
                            <td>{{ $item->mail }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->body_text }}</td>
                            <td>{{ $item->start_time }}</td>
                            <td>{{ $item->end_time }}</td>
                            <td>{{ $item->off_day }}</td>
                            <td>

                                <a href="{{ url('/admin/contact/' . $item->id . '/edit') }}" title="Edit Class"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                                <a href="{{ url('/admin/contact/' . $item->id) }}" title="View Contact"><button
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
