@extends('layouts.app',['pageTitle' => __('Newsletter')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('Newsletter') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('Newsletter List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New Newsletter') }}</h5>
                </div>
            </div>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Email</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newsletter as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->email }}</td>
                            <td>

                                <form method="POST" id="deleteButton{{$item->id}}"
                                    action="{{ url('/admin/newsletter' . '/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete newsletter"
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
