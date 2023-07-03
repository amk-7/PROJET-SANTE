<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_admin =  Admin::all();
        return view('staffs.index', ['list_admin' => $list_admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'profile_file_path' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'contact' => 'required',
            'enable' => 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required'
        ]);
        $u = User::create([
            'user_id' => $request->user_id,
            'profile_file_path' => $request->profile_file_path,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'contact' => $request->contact,
            'enable' => $request->enable,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password
        ]);
        Admin::create([
            'user_id' => $u->user_id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::find($id);
        return view("staffs.show", ['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view("staffs.show", ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->update([
            'profile_file_path' => $request->profile_file_path,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'contact' => $request->contact,
            'enable' => $request->enable,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
    }
}