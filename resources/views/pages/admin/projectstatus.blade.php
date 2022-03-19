@extends('layouts.adminapp')
@section('content')
<form action="{{route('project.changestatus')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$status->p_id}}">
        <div class="col-md-4 form-group">
            <span>Status</span>
            <select name="status" id="status" class="form-control">
										<option value="{{$status->p_status}}">{{$status->p_status}}</option>
										<option value="approved">approved</option>
										<option value="rejected">rejected</option>
            </select>
            @error('type')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Update" >
        <a href="{{route('project.list')}}" class="btn btn-secondary" >Back</a>
    </form>
    

@endsection
