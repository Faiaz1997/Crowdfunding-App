@extends('layouts.adminapp')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Type</th>
            <th>Email</th>
            <th>Transaction No</th>
            <th></th>
        </tr>
        @foreach($donors as $donors )
            <tr>
                <td>{{$donors->donordetails->name}}</td>
                <td>{{$donors->donordetails->phone}}</td>
                <td>{{$donors->donordetails->type}}</td>
                <td>{{$donors->donordetails->email}}</td>
                <td>{{$donors->tran_id}}</td>
                <td>
                <td><a href="{{route('donation.details',['id'=>$donors->tran_id])}}"><button type="button" class="btn btn-primary" >Donation Details</button></a></td>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('project.list')}}" class="btn btn-secondary" >Back</a>
@endsection