<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Session;
use DB;
use App\Category;
use App\questions;
use App\reponseuser;
use App\User;
use App\book_manage;

class HomeController extends Controller
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
        $book_manage = DB::select('select * from book_manage');

		 
          return view('home', compact('book_manage','usersnotifcount','category', 'categorycount','reponseuserscount','questionscount','users','myreponseuserscount','reponseuserscountday','usersmale','usersfemale','reponseuserscountmonth01','reponseuserscountmonth02','reponseuserscountmonth03','reponseuserscountmonth04','reponseuserscountmonth05','reponseuserscountmonth06','reponseuserscountmonth07','reponseuserscountmonth08','reponseuserscountmonth09','reponseuserscountmonth10','reponseuserscountmonth11','reponseuserscountmonth12'));
    }
		return redirect::to("login");

	}
}
