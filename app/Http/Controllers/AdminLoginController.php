<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminLoginController extends Controller
{

    public function index()
    {
        return view('admin.login');
    }
     

    public function registration()
    {
        return view('admin.registration');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/home');
        }
        return Redirect::to("admin")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
          
		  'role' => 'required',
          'section' => 'required',
'name' => 'required',
		  'image' => 'required',
          'country' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("admin/home")->withSuccess('Great! You have Successfully loggedin');
    }
    




    public function create(array $data)
    {
      return User::create([
        'role' => $data['role'],
        'section' => $data['section'],
		'name' => $data['name'],
        'image' => $data['image'],
        'country' => $data['country'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    


    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('admin');
    }
}