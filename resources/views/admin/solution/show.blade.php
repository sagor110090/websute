@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">solution {{ $solution->id }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/solution/' . $solution->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <form method="POST" id="deleteButton{{$solution->id}}"
                action="{{ url('/admin/solution' . '/' . $solution->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete solution"
                    onclick="sweetalertDelete({{$solution->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($solution->image))}}" alt="photo"></td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $solution->id }}</td>
                        </tr>
                        <tr>
                            <th> solution Header </th>
                            <td> {{ $solution->header }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {!! $solution->description !!} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
