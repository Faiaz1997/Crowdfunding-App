@extends('layouts.adminapp')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Type</th>
            <th>Email</th>
            <th></th>
        </tr>
        <tr>
            <td>{{$info->name}}</td>
            <td>{{$info->phone}}</td>
            <td>{{$info->type}}</td>
            <td>{{$info->email}}</td>
            <td><a href="/admin/userdelete/{{$info->id}}"><button type="button" class="btn btn-danger" style="text-decoration: none">Delete</button></a></td>
        </tr>
    </table>
    <a href="{{route('project.list')}}" class="btn btn-secondary" >Back</a>
@endsection