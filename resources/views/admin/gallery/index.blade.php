@extends('layouts.app',['pageTitle' => __(' Gallery Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __(' Gallery') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('Gallery List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New Gallery') }}</h5>
                </div>
            </div>
            <a href="{{ url('/admin/gallery/create') }}" class="btn btn-success btn-sm" title="Add New  Gallery">
                <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Image</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gallery as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img class="img-thumbnail" height="100" width="100"
                                    src="{{ Storage::url($item->image) }}" alt=""></td>
                            <td>
                                <a href="{{ url('/admin/gallery/' . $item->id) }}" title="View  Gallery"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button></a>
                                <a href="{{ url('/admin/gallery/' . $item->id . '/edit') }}"
                                    title="Edit  Gallery"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"
                                            aria-hidden="true"></i>
                                    </button></a>

                                <form method="POST" action="{{ url('/admin/gallery' . '/' . $item->id) }}"
                                    accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete  Gallery"
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
