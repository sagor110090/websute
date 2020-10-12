@extends('layouts.app',['pageTitle' => lang(' Gallery Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ lang(' Gallery') }}
    @endslot
@endcomponent
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ lang(' Gallery') }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/gallery') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ lang('Back') }}</button></a>
                        <a href="{{ url('/admin/gallery/' . $gallery->id . '/edit') }}" title="Edit  Gallery"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> {{ lang('Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/gallery' . '/' . $gallery->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete  Gallery" onclick="sweetalertDelete({{$item->id}})"><i class="fa fa-trash" aria-hidden="true"></i> {{ lang('Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $gallery->id }}</td>
                                    </tr>
                                    <tr><th> Image </th><td> <img class="img-full" src="{{ Storage::url($gallery->image) }}" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
