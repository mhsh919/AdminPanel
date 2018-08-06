@extends('layouts.admin')
@section('content')
    @include('admin.allErors.success')
    <div class="card-title">
        <h4>لیست کاربران </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive" id="list_table_main">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>تاریخ ثبت نام</th>
                    <th>وضعیت</th>
                    <th>ویرایش کردن</th>
                    <th>حذف کردن</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><span class="badge badge-{{$user->status == 1 ?'success' : 'danger'}}">
                                    {{ $user->status == 1 ? 'فعال' : 'غیر فعال' }}
                                </span></td>
                            <td>  </td>
                            <td><a href="{{route('admin.users.edit',[$user->id])}}"><i class="fa fa-edit"></i> </a></td>
                            <td><a href="{{route('admin.users.delete',[$user->id])}}"><i class="fa fa-trash"></i> </a></td>

                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection