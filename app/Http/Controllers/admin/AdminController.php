<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


use Session;


class AdminController extends Controller 
{
   public function index() 
   {
	   if(Auth::check()){
        $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
      return view('admin/user_view',['users'=>$users]);
      }
      
   }
   public function show() 
   {
      $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
      return view('admin/admin_update',['users'=>$users]);
   }
   public function edit(Request $request) 
   {
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $country = $request->input('country');
      $updated_at = $request->input('updated_at');
      DB::update('update users set firstname = ?, lastname = ?, email = ?, country = ?, updated_at = ? where id = ?',[$firstname,$lastname,$email,$country,$updated_at,ucfirst(Auth()->user()->id)]);
      return redirect('admin/profile')->with('success', 'Пост успешно добавлен!');

   }
   
   
    public function dashboard()
    {

      if(Auth::check())
	  {
		
	
		
		$manage_admin_documents = DB::table('manage_admin_documents')
		->where('id_admin', '=', "".ucfirst(Auth()->user()->id)."")
        ->count('id');
		

		
		  $userscount = DB::table('users')
        ->count('id');
		  
		  $tasks = DB::table('tasks')
		->where('task_date', '=', "".date('Y-m-d')."")
		->where('id_admin', '=', "".ucfirst(Auth()->user()->id)."")
        ->count('id');
		
		$tasks_completed = DB::table('tasks')
		->where('etats', '=', "1")
		->where('id_admin', '=', "".ucfirst(Auth()->user()->id)."")
        ->count('id');
		
		$tasks_nocompleted = DB::table('tasks')
		->where('etats', '=', "0")
		->where('id_admin', '=', "".ucfirst(Auth()->user()->id)."")
        ->count('id');
		
		
		 return view('admin.home', compact('manage_admin_documents','manage_clientscount','userscount','tasks','tasks_completed','tasks_nocompleted'));
      }
       return Redirect::to("admin/login")->withSuccess('Opps! You do not have access');
    }

	
	

	
	
	
    public function profile()
    {

      if(Auth::check()){
        return view('admin.profile');
      }
       return Redirect::to("admin/login")->withSuccess('Opps! You do not have access');
    }
   
    public function setting()
    {

      if(Auth::check()){
        return view('admin.setting');
      }
       return Redirect::to("admin/login");
    }


}