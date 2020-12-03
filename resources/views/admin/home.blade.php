@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
		  


<div class="container">

            <div class="row">

            <!-- Page Header -->
            <div class="py-4 col-lg-12 col-md-12 col-sm-12 mb-4 row">
			     <div class="page-header no-gutters col-md-5 col-sm-5 mb-5">
                <h3 class="page-title"style="" >Your dashboard</h3>
			    <div class="space"></div>
				@include('layouts.welcomeday')

                </div>
				
				
			  
				<div class="col-md-7 col-sm-7 mb-7">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex" id="border-left">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <h6 class="stats-small__value count my-3">Hello {{ Auth::user()->firstname }}</h6>
						<span class="stats-small__label text-uppercase textnormal">{{ Auth::user()->email }}</span>
						<div class="space"></div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
			  <div class="col-lg-12 col-md-12 col-sm-12 mb-4 row">
              <div class="col-md-3 col-sm-6 mb-6">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex" id="border-left">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
					  <div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/images/icons/1.png') }}" style="width:100px;height:100px;margin-top:10px;"></div>
                        <h6 class="stats-small__value count my-3">{{$tasks}}</h6>
						<span class="stats-small__label text-uppercase textnormal">Task this day</span>
						<div class="space"></div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3 col-sm-6 mb-6">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex" id="border-left">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
					  <div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/images/icons/close.png') }}" style="width:100px;height:100px;margin-top:10px;"></div>
                        <h6 class="stats-small__value count my-3">{{$tasks_completed}}</h6>
						<span class="stats-small__label text-uppercase textnormal">Task completed</span>
						<div class="space"></div>
                       </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 mb-6">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex" id="border-left">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
					  <div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/images/icons/open.png') }}" style="width:100px;height:100px;margin-top:10px;"></div>
                        <h6 class="stats-small__value count my-3">{{$tasks_nocompleted}}</h6>
						<span class="stats-small__label text-uppercase textnormal">Task not completed</span>
						<div class="space"></div>
                       </div>
                     
                    </div>
                  </div>
                </div>
              </div>
			  
			  <div class="col-md-3 col-sm-6 mb-6">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex" id="border-left">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
					  <div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/images/icons/file2.png') }}" style="width:100px;height:100px;margin-top:10px;"></div>
                        <h6 class="stats-small__value count my-3">{{$manage_admin_documents}}</h6>
						<span class="stats-small__label text-uppercase textnormal">My documents</span>
						<div class="space"></div>
                       </div>
                      
                    </div>
                  </div>
                </div>
              </div>
  <div class="space"></div>
  <div class="space"></div>
  <div class="space"></div>
             
 

			  </div>
            </div>
            </div>
			
			
			
            <!-- End Small Stats Blocks -->
            

<script>
	//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
type: 'pie',
data: {
labels: ["Male ( 4)", "Female ( 6 )"],
datasets: [{
data: [4, 6],
backgroundColor: ["#052ab4", "#6a84e8"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
}]
},
options: {
responsive: true
}
});
	</script>


@endsection
