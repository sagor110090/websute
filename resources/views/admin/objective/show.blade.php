@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">objective {{ $objective->id }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/objective/' . $objective->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($objective->image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $objective->id }}</td>
                        </tr>
                        <tr>
                            <th> Header </th>
                            <td> {{ $objective->header }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {!! $objective->description !!} </td>
                        </tr>
                        <tr>
                            <th> FAQ's </th>
                            <td> {{ $objective->faq }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
