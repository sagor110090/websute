@extends('layouts.app',['pageTitle' => __(' Pricing List Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Pricing List') }}
    @endslot
@endcomponent

        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title"> {{ __('Pricinglist List') }}</h4>
                            <h5 class="card-subtitle">{{ __('Create New Pricinglist') }}</h5>
                        </div>
                    </div>
                    <a href="{{ url('/admin/pricing-list/create') }}" class="btn btn-success btn-sm"
                        title="Add New  Pricing List">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add New') }}
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">  
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th  width='30'>#</th><th>Pricing  Name</th><th>Short Description</th><th>Price</th><th width='300'>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pricinglist as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->pricing_name }}</td><td>{{ $item->short_description }}</td><td>{{ $item->price }}</td>
                                    <td>
                                        <a href="{{ url('/admin/pricing-list/' . $item->id) }}"
                                            title="View  Pricing List"><button class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <a href="{{ url('/admin/pricing-list/' . $item->id . '/edit') }}"
                                            title="Edit  Pricing List"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-edit" aria-hidden="true"></i>
                                               </button></a>

                                        <form method="POST"
                                            action="{{ url('/admin/pricing-list' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                title="Delete  Pricing List"
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