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
<a id="pagetitlesecondelink">Profile </a>
</div>
</div>
</br>

		   <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="{{ asset('public/profile_pic/admin/1604750972.jpg') }}" alt="User Avatar" width="150" height="160"> </div>
                    <h4 class="mb-0">{{ Auth()->user()->firstname }} {{ Auth()->user()->lastname }}</h4>
                    <span class="text-muted d-block mb-2">Admin</span>
                      <a href="{{route('change.pic.adminview')}}">
                      <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Edit pic</button>
					  </a>
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
                    <span style="float:left;"class="m-0">Account Details  </span>
					  <a href="{{route('admin.edit.profile')}}">
					  <button style="float:right;margin-top:-5px;" type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2" data-toggle="modal" data-target="#exampleModal">
                      <i class="fa fa-edit"></i> Edit
					  </button>
					  </a>
					 
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                           

						   <div class="form-row">
                              <div class="form-group col-md-6">
                                <label class="textblodfull">Name</label>
                                <label class="textnormalfull">{{ Auth()->user()->firstname }} {{ Auth()->user()->lastname }}</label>
								</div>
								
								<div class="form-group col-md-6">
                                <label class="textblodfull">Email</label>
                                <label class="textnormalfull">{{ Auth()->user()->email }}</label>
								</div>
                            </div>
							
							
							
							<div class="form-row">
                              <div class="form-group col-md-6">
                                <label class="textblodfull">Since</label>
                                <label class="textnormalfull">{{ Auth()->user()->created_at }}</label>
								</div>
								
								<div class="form-group col-md-6">
                                <label class="textblodfull">Birthday</label>
                                <label class="textnormalfull">{{ Auth()->user()->birthday }}/{{ Auth()->user()->birthmonth }}/{{ Auth()->user()->birthyear }}</label>
								</div>
                            </div>
							
							<div class="form-row">
                              <div class="form-group col-md-6">
                                <label class="textblodfull">Country</label>
                                <label class="textnormalfull">{{ Auth()->user()->country }}</label>
								</div>
								
								<div class="form-group col-md-6">
                                <label class="textblodfull">City</label>
                                <label class="textnormalfull">{{ Auth()->user()->city }}</label>
								</div>
                            </div>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
</div>

@endsection