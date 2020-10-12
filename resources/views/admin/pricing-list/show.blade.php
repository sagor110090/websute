@extends('layouts.app',['pageTitle' => lang(' Pricing List Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ lang(' Pricing List') }}
    @endslot
@endcomponent
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ lang(' Pricing List') }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/pricing-list') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ lang('Back') }}</button></a>
                        <a href="{{ url('/admin/pricing-list/' . $pricinglist->id . '/edit') }}" title="Edit  Pricing List"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> {{ lang('Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/pricinglist' . '/' . $pricinglist->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete  Pricing List" onclick="sweetalertDelete({{$item->id}})"><i class="fa fa-trash" aria-hidden="true"></i> {{ lang('Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pricinglist->id }}</td>
                                    </tr>
                                    <tr><th> Pricing  Name </th><td> {{ $pricinglist->pricing _name }} </td></tr><tr><th> Short Description </th><td> {{ $pricinglist->short_description }} </td></tr><tr><th> Price </th><td> {{ $pricinglist->price }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

@endsection
