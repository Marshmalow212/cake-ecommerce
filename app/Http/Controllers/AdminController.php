<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminFormValidation;
use App\Models\Admin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.server.server-login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminFormValidation $request)
    {
        // dd($request);
        $valid = $request->validated();
        // dd($valid);
        $admin = new Admin($valid);
        $hashedpass = Hash::make($valid['password']);
        $admin->password = $admin->confirm_password = $hashedpass;
        // dd($admin);
        $admin->save();

        return redirect()->route('admins.index')->with('success','Admin Registered!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function register(){
        return view('backend.server.server-register');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email','password');
        // dd($credentials);
        $check = Auth::attempt($credentials);
        // dd($check);
        // dd(auth()->user());
        return view('backend.home')->with('success','Welcome to Cake Avenue Dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admins.index');
    }
}
