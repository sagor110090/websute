@extends('layouts.app',['pageTitle' => __('Our Team Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('Our Team') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('Our Team List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New Our Team') }}</h5>
                </div>
            </div>
            <a href="{{ url('/admin/our_team/create') }}" class="btn btn-success btn-sm" title="Add New Our Team">
                <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Google+</th>
                            <th>LinkedIn</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($our_team as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->designation }}</td>
                            <td>{{ $item->facebook }}</td>
                            <td>{{ $item->twitter }}</td>
                            <td>{{ $item->google_plus }}</td>
                            <td>{{ $item->linkedin }}</td>
                            <td>

                                <a href="{{ url('/admin/our_team/' . $item->id . '/edit') }}" title="Edit Class"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                                    <a href="{{ url('/admin/our_team/' . $item->id) }}" title="View our_team"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button></a>

                                <form method="POST" id="deleteButton{{$item->id}}"
                                    action="{{ url('/admin/our_team' . '/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Our Team"
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
