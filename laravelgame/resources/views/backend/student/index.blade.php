@extends('backend.app')
@section("content")
<h1>Student Information</h1>

<a href="" class="btn btn-success float-right">Add New</a>
<table class="table table-light">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>

        </tr>

    </thead>
    <tbody>
        @foreach ( $st as $s)


        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->phone}}</td>
            <td>{{$s->address}}</td>
            <td>Edit|Delete</td>

        </tr>

        @endforeach


    </tbody>
</table>
@endsection
