@extends('layouts.app',['pageTitle' => __('BlogCategory Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __('BlogCategory') }}
    @endslot
@endcomponent

        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title"> {{ __('Blogcategory List') }}</h4>
                            <h5 class="card-subtitle">{{ __('Create New Blogcategory') }}</h5>
                        </div>
                    </div>
                    <a href="{{ url('/admin/blog-category/create') }}" class="btn btn-success btn-sm"
                        title="Add New BlogCategory">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th  width='30'>#</th><th>Name</th><th width='300'>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogcategory as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="{{ url('/admin/blog-category/' . $item->id . '/edit') }}"
                                            title="Edit BlogCategory"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-edit" aria-hidden="true"></i>
                                               </button></a>

                                        <form method="POST" id="deleteButton{{$item->id}}" action="{{ url('/admin/blog-category' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                title="Delete BlogCategory"
                                                onclick="sweetalertDelete({{$item->id}})"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
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
