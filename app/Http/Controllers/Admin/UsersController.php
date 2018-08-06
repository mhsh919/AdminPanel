<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use App\Http\Requests\UserUpdate;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $UsersRole = User::getUsersRoles();
        return view('admin.users.create', compact('UsersRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {

        User::create([
            'name' => $request->input('firstname'),
            'email' => $request->input('emailUser'),
            'password' => $request->input('pass'),
            'role' => $request->input('UserRole')
        ]);
        return back()->with('status', 'کابر جدید با موفقیت ایجاد گردید ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $UsersRole = User::getUsersRoles();
        $user = User::find($id);
        return view('admin.users.edit', compact('user', 'UsersRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, $user_id)
    {
        $user = User::find($user_id);
        $userData = [

            'name' => $request->input('FullName'),
            'email' => $request->input('Useremail')
        ];
        if ($request->filled('userPassword')) {
            $userData['password'] = $request->input('userPassword');
        }

        $updateUser =$user->update($userData);
        if ($updateUser){
            return redirect()->route('admin.users')->with('status' ,'کاربر با موفقیت به روز رسانی شد ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($user_id)
    {
        $users = User::destroy($user_id);

        if ($users)
            return back()->with('status', 'کابر مورد نظر شما با موفقیت حذف شد ');


    }
}
