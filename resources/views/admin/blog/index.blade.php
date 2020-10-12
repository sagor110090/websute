@extends('layouts.app',['pageTitle' => __('Blog Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ __('Blog') }}
@endslot
@endcomponent

<div class="col-md-12">
    <div class="card">

        <div class="card-body">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title"> {{ __('Blog List') }}</h4>
                    <h5 class="card-subtitle">{{ __('Create New Blog') }}</h5>
                </div>
            </div>
            <a href="{{ url('/admin/blog/create') }}" class="btn btn-success btn-sm" title="Add New Blog">
                <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width='30'>#</th>
                            <th>Header</th>
                            <th>ShortDescription</th>
                            <th>Description</th>
                            <th>Tag</th>
                            <th>Thumbnail</th>
                            <th>Image</th>
                            <th>Slug</th>
                            <th>Blog Category Id</th>
                            <th width='300'>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blog as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->header }}</td>
                            <td>{{Helpers::limit_text($item->shortDescription, 20)}}</td>
                            <td>{{Helpers::limit_text($item->shortDescription, 20)}}</td>
                            <td>{{ $item->tag }}</td>
                            <td>{{ $item->thumbnail }}</td>
                            <td>{{ $item->image }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->blog_category_id }}</td>
                            <td>
                                <a href="{{ url('/admin/blog/' . $item->id) }}" title="View Blog"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button></a>
                                <a href="{{ url('/admin/blog/' . $item->id . '/edit') }}" title="Edit Blog"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>

                                <form method="POST" id="deleteButton{{$item->id}}"
                                    action="{{ url('/admin/blog' . '/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Blog"
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
