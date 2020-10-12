@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">OurTeam {{ $our_team->id }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/our_team/' . $our_team->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <form method="POST" id="deleteButton{{$our_team->id}}"
                action="{{ url('/admin/our_team' . '/' . $our_team->id) }}" accept-charset="UTF-8"
                style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Our Team"
                    onclick="sweetalertDelete({{$our_team->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($our_team->image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $our_team->id }}</td>
                        </tr>
                        <tr>
                            <th> Name </th>
                            <td> {{ $our_team->name }} </td>
                        </tr>
                        <tr>
                            <th> Designation </th>
                            <td> {{ $our_team->designation }} </td>
                        </tr>
                        <tr>
                            <th> Faceook </th>
                            <td> {{ $our_team->facebook }} </td>
                        </tr>
                        <tr>
                            <th> Twitter </th>
                            <td> {{ $our_team->twitter }} </td>
                        </tr>
                        <tr>
                            <th> Google+ </th>
                            <td> {{ $our_team->google_plus }} </td>
                        </tr>
                        <tr>
                            <th> LinkedIn </th>
                            <td> {{ $our_team->linkedin }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
