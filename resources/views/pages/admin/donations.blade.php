@extends('layouts.adminapp')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Amount</th>
            <th></th>
        </tr>
        @foreach($alldonations as $alldonations)
            <tr>
                <td>{{$alldonations->donation->p_name}}</td>
                <td>{{$alldonations->donation->p_description}}</td>
                <td>{{$alldonations->amount}}</td>
              
            </tr>
        @endforeach
    </table>
    <a href="{{route('all.donorlist')}}" class="btn btn-secondary" >Back</a>
@endsection