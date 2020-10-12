@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">message {{ $message->id }}</div>
        <div class="card-body">

            <a href="{{ url()->previous() }}" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/message/' . $message->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <form method="POST" id="deleteButton{{$message->id}}"
                action="{{ url('/admin/message' . '/' . $message->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Message"
                    onclick="sweetalertDelete({{$message->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $message->id }}</td>
                        </tr>
                        <tr>
                            <th> Name </th>
                            <td> {{ $message->name }} </td>
                        </tr>
                        <tr>
                            <th> Subject </th>
                            <td> {{ $message->subject }} </td>
                        </tr>
                        <tr>
                            <th> Mail </th>
                            <td> {{ $message->mail }} </td>
                        </tr>
                        <tr>
                            <th> Phone </th>
                            <td> {{ $message->phone }} </td>
                        </tr>
                        <tr>
                            <th> Message </th>
                            <td> {!! $message->message !!} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
