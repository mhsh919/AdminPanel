@extends('layouts.admin')
@section('content')
    <form action="{{route('admin.Posts.store')}} " method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">عنوان مطلب</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="PostTitle">
        </div>
        <div class="form-group">
            <textarea name="PostContent" id="" cols="30" rows="10">
            </textarea>
        </div>
        <div class="form-group">

            <select name="PostStatus" id="">

                @foreach($PostStatus as $postID=>$post_status)
                <option value="{{$postID}}" >{{$post_status}}</option>
                    @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">ارسال پست</button>
    </form>
@stop