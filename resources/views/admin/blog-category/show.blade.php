@extends('layouts.app',['pageTitle' => lang('BlogCategory Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ lang('BlogCategory') }}
    @endslot
@endcomponent
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ lang('BlogCategory') }}</div>
                    <div class="card-body">

                        <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ lang('Back') }}</button></a>
                        <a href="{{ url('/admin/blog-category/' . $blogcategory->id . '/edit') }}" title="Edit BlogCategory"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> {{ lang('Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/blogcategory' . '/' . $blogcategory->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete BlogCategory" onclick="sweetalertDelete({{$blogcategory->id}})"><i class="fa fa-trash" aria-hidden="true"></i> {{ lang('Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blogcategory->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $blogcategory->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
