@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">contact {{ $contact->id }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/contact/' . $contact->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <form method="POST" id="deleteButton{{$contact->id}}"
                action="{{ url('/admin/contact' . '/' . $contact->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact"
                    onclick="sweetalertDelete({{$contact->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $contact->id }}</td>
                        </tr>
                        <tr>
                            <th> Header </th>
                            <td> {{ $contact->header }} </td>
                        </tr>
                        <tr>
                            <th> Address </th>
                            <td> {!! $contact->address !!} </td>
                        </tr>
                        <tr>
                            <th> Phone </th>
                            <td> {{ $contact->phone }} </td>
                        </tr>
                        <tr>
                            <th> Mail </th>
                            <td> {{ $contact->mail }} </td>
                        </tr>
                        <tr>
                            <th> Body Text </th>
                            <td> {!! $contact->body_text !!} </td>
                        </tr>
                        <tr>
                            <th> Start Time </th>
                            <td> {{ $contact->start_time }} </td>
                        </tr>
                        <tr>
                            <th> End Time </th>
                            <td> {{ $contact->end_time }} </td>
                        </tr>
                        <tr>
                            <th> Off Day </th>
                            <td> {{ $contact->off_day }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
