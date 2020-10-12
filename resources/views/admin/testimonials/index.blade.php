@extends('layouts.app',['pageTitle' => __(' Testimonial Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Testimonial') }}
    @endslot
@endcomponent

        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title"> {{ __('Testimonials List') }}</h4>
                            <h5 class="card-subtitle">{{ __('Create New Testimonials') }}</h5>
                        </div>
                    </div>
                    <a href="{{ url('/admin/testimonials/create') }}" class="btn btn-success btn-sm"
                        title="Add New  Testimonial">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">  
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th  width='30'>#</th><th>Text</th><th width='300'>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testimonials as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->text }}</td>
                                    <td>
                                        <a href="{{ url('/admin/testimonials/' . $item->id) }}"
                                            title="View  Testimonial"><button class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <a href="{{ url('/admin/testimonials/' . $item->id . '/edit') }}"
                                            title="Edit  Testimonial"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-edit" aria-hidden="true"></i>
                                               </button></a>

                                        <form method="POST"
                                            action="{{ url('/admin/testimonials' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                title="Delete  Testimonial"
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