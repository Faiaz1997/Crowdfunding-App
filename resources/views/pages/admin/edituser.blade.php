@extends('layouts.adminapp')
@section('content')
<form action="{{route('user.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$info->id}}">
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{$info->name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="integer" name="phone" value="{{$info->phone}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>User Type</span>
            <select name="type" id="type" class="form-control">
										<option value="{{$info->type}}">{{$info->type}}</option>
										<option value="Initiator">Initiator</option>
										<option value="Moderator">Moderator</option>
										<option value="Donor">Donor</option>
            </select>
            @error('type')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="password" name="password" value="{{$info->password}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{$info->email}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Update" >
        <a href="{{route('user.list')}}" class="btn btn-secondary" >Back</a>
    </form>
    

@endsection