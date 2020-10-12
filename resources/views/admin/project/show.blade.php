@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">Products {{ $project->id }}</div>
        <div class="card-body">

            <a href="javascript:history.back()" title="Back"><button class="btn btn-warning btn-sm"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/admin/Products/' . $project->id . '/edit') }}" title="Edit Class"><button
                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button></a>
            <form method="POST" id="deleteButton{{$project->id}}"
                action="{{ url('/admin/Products' . '/' . $project->id) }}" accept-charset="UTF-8"
                style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete Products"
                    onclick="sweetalertDelete({{$project->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    Delete</button>
            </form>
            <br />
            <br />

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><img width="100px" src="{{ asset(Storage::url($project->thumbnail))}}" alt="photo"></td>
                            {{-- <td><img width="100px" src="{{ asset(Storage::url($project->image))}}" alt="photo">
                            </td> --}}
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{ $project->id }}</td>
                        </tr>
                        <tr>
                            <th> project Header </th>
                            <td> {{ $project->header }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {!! $project->description !!} </td>
                        </tr>
                        {{-- <tr>
                            <th> Client Name </th>
                            <td> {{ $project->client_name }} </td>
                        </tr>
                        <tr>
                            <th> Client Name </th>
                            <td> {{ $project->lication }} </td>
                        </tr>
                        <tr>
                            <th> Client Name </th>
                            <td> {{ $project->year }} </td>
                        </tr> --}}
                        <tr>
                            <th> Price </th>
                            <td> {{ $project->value }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
