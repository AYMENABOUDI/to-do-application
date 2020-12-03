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
use App\book_about;

class WebController extends Controller 
{
   public function index() 
   {
	   if(Auth::check()){
        $book_about = DB::select('select * from book_abouts');
        $book_slider = DB::select('select * from book_sliders');
        $book_manage = DB::select('select * from book_manage');	  
        $book_web_title = DB::select('select * from book_web_title');	  
	     return view('admin/web/index', compact('book_about','book_slider','book_manage','book_web_title'));

      }
             return Redirect::to("admin")->withSuccess('Opps! You do not have access');

   }
  
}