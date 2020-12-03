<?php

   

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

   

use Illuminate\Http\Request;
use Validator,Redirect,Response;

use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;

  

class ChangePasswordController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

   

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {
        if(Auth::check()){

        return view('admin.changePassword');
     }
	        return Redirect::to("login");

    } 

   

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function store(Request $request)

    {

        $request->validate([

            'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);

   

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

   

       return Redirect::to("admin/home")->with('success', 'Password update with success!');

    }

}