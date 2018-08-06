@extends('layouts.admin')
@section('content')

    <div class="col-lg-5">
    <form action="{{route('admin.users.update',[$user->id])}}" method="post" enctype="multipart">
       {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="FullName" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام و نام خانوادگی">
        </div>
        <div class="form-group">
            <input type="email" name="Useremail" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <input type="password" name="userPassword" value="{{$user->pass}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
        </div>
        <select name="UserRole" id="">
            @foreach($UsersRole as $roleID=>$roletitle)
                <option value="{{$roleID}} {{$user->role==$user->$roleID ? 'selected':''}}">{{$roletitle}}</option>
            @endforeach
        </select><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@stop

