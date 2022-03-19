@extends('layouts.adminapp')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Initiator Id</th>
            <th>Status</th>
            <th></th>
        </tr>
        @foreach($projectlist as $projectlist)
            <tr>
                <td>{{$projectlist->p_name}}</td>
                <td>{{$projectlist->p_description}}</td>
                <td><a href="{{route('user.detail',['id'=>$projectlist->i_id])}}">{{$projectlist->i_id}}</a></td>
                <td><a href="/admin/ProjectStatus/{{$projectlist->p_id}}}"><button class="btn btn-info" style="text-decoration: none">{{$projectlist->p_status}}</button></a></td>
                <td><a href="{{route('donor.list',['id'=>$projectlist->p_id])}}"><button type="button" class="btn btn-primary" >Donor List</button></a></td>
                <td><a href="{{route('total.fund',['id'=>$projectlist->p_id])}}"><button type="button" class="btn btn-primary" >Fund</button></a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('admin.dashboard')}}" class="btn btn-secondary" >Back</a>
@endsection