@extends('layouts.adminapp')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Project Id</th>
            <th>Fund</th>
            <th></th>
        </tr>
        @php
        $total = 0
        @endphp
        @foreach($fund as $fund)
        @php
            $total +=$fund->amount
        @endphp
        @endforeach
        <tr>
            <td>{{$fund->p_id}}</td>
            <td>{{$total}}</td>
        </tr>
    </table>
    <a href="{{route('project.list')}}" class="btn btn-secondary" >Back</a>
@endsection