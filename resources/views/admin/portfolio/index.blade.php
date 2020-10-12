@extends('layouts.app',['pageTitle' => __(' Portfolio Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Portfolio') }}
    @endslot
@endcomponent

        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title"> {{ __('Portfolio List') }}</h4>
                            <h5 class="card-subtitle">{{ __('Create New Portfolio') }}</h5>
                        </div>
                    </div>
                    <a href="{{ url('/admin/portfolio/create') }}" class="btn btn-success btn-sm"
                        title="Add New  Portfolio">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">  
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th  width='30'>#</th><th>Project Name</th><th>Porject Description</th><th>Image</th><th width='300'>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolio as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->project_name }}</td><td>{{ $item->porject_description }}</td><td><img class="img-thumbnail" src="{{ Storage::url($item->image) }}" alt=""></td>
                                    <td>
                                        <a href="{{ url('/admin/portfolio/' . $item->id) }}"
                                            title="View  Portfolio"><button class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <a href="{{ url('/admin/portfolio/' . $item->id . '/edit') }}"
                                            title="Edit  Portfolio"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-edit" aria-hidden="true"></i>
                                               </button></a>

                                        <form method="POST"
                                            action="{{ url('/admin/portfolio' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                title="Delete  Portfolio"
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