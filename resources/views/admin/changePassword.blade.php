@extends('layouts.admin')
@section('title', 'Profile')
@section('content')

<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Profile</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitleprimerlink" href="{{ route('admin.profile') }}">Profile /</a>
<a id="pagetitlesecondelink">Change password </a>
</div>
</div>
</br>

		   <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="{{ asset('public/profile_pic/admin/'.ucfirst(Auth()->user()->image)) }}" alt="User Avatar" width="150" height="160"> </div>
                    <h4 class="mb-0">{{ Auth()->user()->firstname }} {{ Auth()->user()->lastname }}</h4>
                    <span class="text-muted d-block mb-2">Admin</span>
                    <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Edite pic</button>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">{{ Auth()->user()->email }}</strong>
                        
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Change password
					<a href="{{route('admin.profile')}}">
					  <button style="float:right;margin-top:-5px;" type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="fa fa-user"></i>
					  </button>
					  </a></h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                    <form method="POST" action="{{ route('change.password.admin') }}">

                        @csrf 

   

                         @foreach ($errors->all() as $error)

                            <p class="text-danger">{{ $error }}</p>

                         @endforeach 

  

                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

  

                            <div class="col-md-6">

                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">

                            </div>

                        </div>

  

                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

  

                            <div class="col-md-6">

                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

                            </div>

                        </div>

  

                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

    

                            <div class="col-md-6">

                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">

                            </div>

                        </div>

   

                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="btn btn-primary">

                                    Update Password

                                </button>

                            </div>

                        </div>

                    </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
</div>
@endsection