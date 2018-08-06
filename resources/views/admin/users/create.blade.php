@extends('layouts.admin')

@section('content')
    @include('admin.allErors.success')
    @if(count($errors))
        <div class="alert alert-danger">
            <ul >
                @foreach($errors->all() as $error)
                    <li style="text-align: center;">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="col-lg-3" >

    <form method="post" action="{{route('admin.create.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
             <input type="text" class="form-control" placeholder="نام کاربری" name="firstname" value="{{old('firstname')}}" >
        </div>

        <div class="form-group">
            <input type="email" class="form-control" placeholder="ایمیل" name="emailUser" value="{{old('emailUser')}}">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="گذرواژه" name="pass">
        </div>


        <select name="UserRole" id="">
            @foreach($UsersRole as $roleID=>$roletitle)
            <option value="{{$roleID}}">{{$roletitle}}</option>
            @endforeach
        </select><br><br>

        <button type="submit" class="btn btn-info">ذخیره</button>
    

    </form>

</div>
    @endsection