@extends('layouts.app',['pageTitle' => lang(' Portfolio Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ lang(' Portfolio') }}
    @endslot
@endcomponent
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ lang(' Portfolio') }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/portfolio') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ lang('Back') }}</button></a>
                        <a href="{{ url('/admin/portfolio/' . $portfolio->id . '/edit') }}" title="Edit  Portfolio"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> {{ lang('Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/portfolio' . '/' . $portfolio->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete  Portfolio" onclick="sweetalertDelete({{$item->id}})"><i class="fa fa-trash" aria-hidden="true"></i> {{ lang('Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $portfolio->id }}</td>
                                    </tr>
                                    <tr><th> Project Name </th><td> {{ $portfolio->project_name }} </td></tr><tr><th> Porject Description </th><td> {{ $portfolio->porject_description }} </td></tr><tr><th> Image </th><td> <img class="img-full" src="{{ Storage::url($portfolio->image) }}" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
