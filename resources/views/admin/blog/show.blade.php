@extends('layouts.app',['pageTitle' => lang('Blog Add')])
@section('content')

@component('layouts.parts.breadcrumb')
@slot('title')
{{ lang('Blog') }}
@endslot
@endcomponent
<div class="col-md-12">
    <div class="card">
        <div class="card-header">{{ lang('Blog') }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> {{ lang('Back') }}</button></a>
            <a href="{{ url('/admin/blog/' . $blog->id . '/edit') }}" title="Edit Blog"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                    {{ lang('Edit') }}</button></a>

            <form method="POST" action="{{ url('admin/blog' . '/' . $blog->id) }}" accept-charset="UTF-8"
                style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Blog"
                    onclick="sweetalertDelete({{$blog->id}})"><i class="fa fa-trash" aria-hidden="true"></i>
                    {{ lang('Delete') }}</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($blog->thumbnail))}}" alt="photo"></td>
                            <td><img width="100px" src="{{ asset(Storage::url($blog->image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $blog->id }}</td>
                        </tr>
                        <tr>
                            <th> Header </th>
                            <td> {{ $blog->header }} </td>
                        </tr>
                        <tr>
                            <th> ShortDescription </th>
                            <td> {{ $blog->shortDescription }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {{ $blog->description }} </td>
                        </tr>
                        <tr>
                            <th> Tag </th>
                            <td> {{ $blog->tag }} </td>
                        </tr>
                        <tr>
                            <th> Slug </th>
                            <td> {{ $blog->slug }} </td>
                        </tr>
                        <tr>
                            <th> Blog Category Id </th>
                            <td> {{ $blog->blog_category_id }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
