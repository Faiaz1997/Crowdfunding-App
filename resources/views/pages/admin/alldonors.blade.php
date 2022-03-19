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
        @foreach($donors as $donors )
            <tr>
                <td>{{$donors->name}}</td>
                <td>{{$donors->phone}}</td>
                <td>{{$donors->type}}</td>
                <td>{{$donors->email}}</td>
                <td>
                <td><a href="{{route('all.donations',['id'=>$donors->id])}}"><button type="button" class="btn btn-primary" >Donation Details</button></a></td>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('admin.dashboard')}}" class="btn btn-secondary" >Back</a>
@endsection