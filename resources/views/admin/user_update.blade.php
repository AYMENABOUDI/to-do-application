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
                    <h6 class="m-0">Account Details
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
<form action = "{{ route('admin.edit') }}" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		 <input type = 'hidden' name = 'updated_at' class="form-control" value = '<?php echo date('Y-m-d'); ?> <?php echo date('h:i:s'); ?>'/>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName" class="textblodfull">First Name</label>
                                <input type="text" class="form-control textnormalfull" id="feFirstName" name="firstname" value="<?php echo$users[0]->firstname; ?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName" class="textblodfull">Last Name</label>
                                <input type="text" class="form-control textnormalfull" id="feLastName"  name="lastname" value="<?php echo$users[0]->lastname; ?>"> </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="feEmailAddress" class="textblodfull">Email</label>
                                <input type="email" class="form-control textnormalfull" id="feEmailAddress" name="email" value="<?php echo$users[0]->email; ?>"> 
								</div>
								<div class="form-group col-md-4">
                                <label for="feEmailAddress" class="textblodfull">Country</label>
                                <input type="text" class="form-control textnormalfull" id="feEmailAddress"  name="country" value="<?php echo$users[0]->country; ?>"> 
								</div>
								<div class="form-group col-md-4">
                                <label for="feEmailAddress" class="textblodfull">City</label>
                                <input type="text" class="form-control textnormalfull" id="feEmailAddress"  name="city" value="<?php echo$users[0]->city; ?>"> 
								</div>
								
								<div class="form-group col-md-12">
                                <label for="feEmailAddress" class="textblodfull">Birthday</label>
								</div>
								<div class="form-group col-md-4">
                                <label for="feEmailAddress" class="textnormalfull">Day</label>
                                <input type="number" class="form-control textnormalfull" id="feEmailAddress"  name="birthday" value="<?php echo$users[0]->birthday; ?>"> 
								</div>
								<div class="form-group col-md-4">
                                <label for="feEmailAddress" class="textnormalfull">Month</label>
                                <input type="number" class="form-control textnormalfull" id="feEmailAddress"  name="birthmonth" value="<?php echo$users[0]->birthmonth; ?>"> 
								</div>
								<div class="form-group col-md-4">
                                <label for="feEmailAddress" class="textnormalfull">Year</label>
                                <input type="number" class="form-control textnormalfull" id="feEmailAddress"  name="birthyear" value="<?php echo$users[0]->birthyear; ?>"> 
								</div>
                             </div>
                       
                            <button type="submit" class="btn btn-accent">Update Account</button>
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