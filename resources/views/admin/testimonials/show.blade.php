@extends('layouts.app',['pageTitle' => lang(' Testimonial Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ lang(' Testimonial') }}
    @endslot
@endcomponent
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ lang(' Testimonial') }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/testimonials') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ lang('Back') }}</button></a>
                        <a href="{{ url('/admin/testimonials/' . $testimonial->id . '/edit') }}" title="Edit  Testimonial"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> {{ lang('Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/testimonials' . '/' . $testimonial->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete  Testimonial" onclick="sweetalertDelete({{$item->id}})"><i class="fa fa-trash" aria-hidden="true"></i> {{ lang('Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $testimonial->id }}</td>
                                    </tr>
                                    <tr><th> Text </th><td> {{ $testimonial->text }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
