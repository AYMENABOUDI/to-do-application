<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class PhotoController extends Controller 
{

   public function show() 
   {
      $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
      return view('admin/user_update_pic',['users'=>$users]);
   }
   public function edit(Request $request) 
   {
	   
	   
	      $this->validate($request,[
          'image' =>'required',
          'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);
      if ($request->hasFile('image')) {
          $image = $request->file('image');
          foreach ($image as $files) {
              $destinationPath = 'public/profile_pic/admin/';
              $file_name = time() . "." . $files->getClientOriginalExtension();
              $files->move($destinationPath, $file_name);
              $data[] = $file_name;
          }
      }
	  
      DB::update('update users set image = ? where id = ?',[$file_name,ucfirst(Auth()->user()->id)]);
      return redirect('admin/profile')->with('success', '!');

   }
   
 

}