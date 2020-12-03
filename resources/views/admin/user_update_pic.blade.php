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
<form action = "{{ route('change.pic.admin') }}" method = "post" accept-charset="utf-8" enctype="multipart/form-data">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		 <input type = 'hidden' name = 'updated_at' class="form-control" value = '<?php echo date('Y-m-d'); ?> <?php echo date('h:i:s'); ?>'/>

         <table style="width:100%;">
            <tr>
               <td style="width:20%;">Photo</td>
               <td >
                  <input type = 'file' name = 'image[]' class="form-control"/>
               </td>
            </tr>
			 
		
			
            <tr>
               <td colspan = '2'>
                  </br><input type = 'submit' class="btn btn-primary"value = "Update" />
               </td>
            </tr>
         </table>
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