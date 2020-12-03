<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;



class ProfileController extends Controller
{


     public function profile()
    {

      if(Auth::check()){
        return view('admin.profile');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
	
	  


	  public function show() 
   {
        if(Auth::check()){

      $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
      return view('admin/user_update',['users'=>$users]);
	        }
       return Redirect::to("login");
   }
   
   public function edit(Request $request) 
   {
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $country = $request->input('country');
	    $city = $request->input('city');
	    $birthday = $request->input('birthday');
	    $birthmonth = $request->input('birthmonth');
	    $birthyear = $request->input('birthyear');

      $updated_at = $request->input('updated_at');
      DB::update('update users set firstname = ?, lastname = ?, email = ?, country = ?, city = ?, birthday = ?, birthmonth = ?, birthyear = ?, updated_at = ? where id = ?',[$firstname,$lastname,$email,$country,$city,$birthday,$birthmonth,$birthyear,$updated_at,ucfirst(Auth()->user()->id)]);
      return redirect('admin/profile')->with('success', '!');

   }
   
   
       public function setting()
    {

      if(Auth::check()){
        return view('admin.setting');
      }
       return Redirect::to("login");
    }
	
}