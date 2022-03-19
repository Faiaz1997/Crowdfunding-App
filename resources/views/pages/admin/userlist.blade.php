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
        @foreach($userlist as $userlist)
            <tr>
                <td>{{$userlist->name}}</td>
                <td>{{$userlist->phone}}</td>
                <td>{{$userlist->type}}</td>
                <td>{{$userlist->email}}</td>
                <td><a href="/admin/useredit/{{$userlist->id}}}"><button class="btn btn-info" style="text-decoration: none">Edit User</button></a></td>
                <td><a href="/admin/userdelete/{{$userlist->id}}"><button type="button" class="btn btn-danger" style="text-decoration: none">Delete</button></a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('admin.dashboard')}}" class="btn btn-secondary" >Back</a>
@endsection