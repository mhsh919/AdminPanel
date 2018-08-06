@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>لیست مطالب </h4>
    </div>
    <div class="card-body">
        @include('admin.allErors.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                @include('admin.posts.column')
                </thead>
                <tbody>
                @each('admin.posts.items',$posts,'post')
                </tbody>
            </table>
        </div>
    </div>
@endsection