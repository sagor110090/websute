@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">Client {{ $client->id }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/client/' . $client->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <form method="POST" id="deleteButton{{$client->id}}"
                action="{{ url('/admin/client' . '/' . $client->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Client"
                    onclick="sweetalertDelete({{$client->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($client->image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $client->id }}</td>
                        </tr>
                        <tr>
                            <th> client Header </th>
                            <td> {{ $client->client_name }} </td>
                        </tr>
                        <tr>
                            <th> client Header </th>
                            <td> {{ $client->address }} </td>
                        </tr>
                        <tr>
                            <th> client Header </th>
                            <td> {{ $client->service }} </td>
                        </tr>
                        <tr>
                            <th> client Header </th>
                            <td> {{ $client->link }} </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
