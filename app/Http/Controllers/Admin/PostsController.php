<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
public function index(){
    $posts= Post::all();
    return view('admin.Posts.posts',compact('posts'));
}

    public function create()
    {
        $PostStatus=Post::getPostsStatus();
        return view('admin.Posts.create',compact('PostStatus'));
    }

    public function store(Request $request)
    {

        $post=  Post::create([
            'post_title'=>$request->input('PostTitle'),
            'Post_Slug'=>$request->input('PostTitle'),
            'post_content'=>$request->input('PostContent'),
            'post_author'  => Auth::id(), //Auth::id(),
            'post_status'=>$request->input('PostStatus')

        ]);
        if ($post && $post instanceof Post) {
            return back()->with('status', 'مطلب جدید با موفقیت ایجاد گردید!');
        }

    }
}
