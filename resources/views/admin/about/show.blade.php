@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">About {{ $about->id }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/about/' . $about->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($about->image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $about->id }}</td>
                        </tr>
                        <tr>
                            <th> about Header </th>
                            <td> {{ $about->header }} </td>
                        </tr>
                        <tr>
                            <th>Short Description </th>
                            <td> {!! $about->short_description !!} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {!! $about->description !!} </td>
                        </tr>
                        <tr>
                            <th> Facebook </th>
                            <td> {!! $about->facebook !!} </td>
                        </tr>
                        <tr>
                            <th> Twitter </th>
                            <td> {!! $about->twitter !!} </td>
                        </tr>
                        <tr>
                            <th> Linkedin </th>
                            <td> {!! $about->linkedin !!} </td>
                        </tr>
                        <tr>
                            <th> Instagram </th>
                            <td> {!! $about->instagram !!} </td>
                        </tr>
                        <tr>
                            <th> Youtube </th>
                            <td> {!! $about->youtube !!} </td>
                        </tr>
                        <tr>
                            <th> Google Plus </th>
                            <td> {!! $about->google !!} </td>
                        </tr>
                        <tr>
                            <th> Skype </th>
                            <td> {!! $about->skype !!} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
