<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	   <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    
	<link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{ asset('public/master_assets/styles/shards-dashboards.1.1.0.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/master_assets/styles/extras.1.1.0.min.css')}}">
    
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

	
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
	</head>
<style>
.has-error{border-color:#cc0000;background-color:#ffff99;}
.model_btn_save:disabled,.model_btn_save[disabled]{opacity: 0.2;}


.td_btn{padding:2px 2px 0px 2px;text-align:right;width:160px;}

.btn-edite{text-align:center;background-color:transparent;border-radius:50%;padding:7px;}
.btn-edite i{margin-top:5px;margin-left:2px;color:#000000;}
.btn-edite:hover i{margin-top:5px;color:#858585;}

.btn-delete{text-align:center;background-color:transparent;border-radius:50%;padding:7px;}
.btn-delete i{margin-top:5px;margin-left:1px;color:#000000;}
.btn-delete:hover i{margin-top:5px;color:#858585;}

.btn-delete-form{text-align:center;background-color:transparent;border:1px solid transparent;border-radius:50%;padding:7px;}
.btn-delete-form i{margin-top:5px;margin-left:1px;color:#000000;}
.btn-delete-form:hover i{margin-top:5px;color:#858585;}


.tablenodata{position:absolute;margin-top:80px;text-align:center;}
.page-title2{color:#0408b3;font-size:17px;font-weight:blod;font-weight:700;}


.btn_add{text-decoration:none;background-color:#f1f1f1;border:1px solid#f1f1f1;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add:hover{text-decoration:none;background-color:#edebeb;border:1px solid#edebeb;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}



.btn_add2{text-decoration:none;background-color:#f1f1f1;border:1px solid#f1f1f1;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add2:hover{text-decoration:none;background-color:#edebeb;border:1px solid#edebeb;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add2active{text-decoration:none;background-color:#d5d2d2;border:1px solid#d5d2d2;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add2active:hover{text-decoration:none;background-color:#d5d2d2;border:1px solid#d5d2d2;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}



.titleappseconde{margin-top:20px;}
.titleappseconde h3{color:#000000;}
.bluetext{color:#0408b3;font-size:17px;font-weight:blod;font-weight:700;}
.pagetitle_seconde{color:#000000;font-size:25px;font-weight:normal;font-weight:400;}

.cadre_add{background-color:#ffffff;border:1px solid#dad9d9;padding:10px;}
.cadre_filter{background-color:#ffffff;border:1px solid#dad9d9;padding:10px;}


.model_fa_close{float:right;}

.model_btn_delete{text-decoration:none;text-align:center;background-color:#c60202;border:1px solid#c60202;color:#ffffff;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_delete:hover{text-decoration:none;text-align:center;background-color:#920202;border:1px solid#920202;color:#ffffff;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_save{background-color:#0408b3;border:1px solid#0408b3;color:#ffffff;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_save:hover{background-color:#020697;border:1px solid#020697;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_close{background-color:#e9e9ec;border:1px solid#e9e9ec;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_close:hover{background-color:#dddde0;border:1px solid#dddde0;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.bgr-black{background-color:#2f9aea;}
#menu-a{color:#ffffff;background-color:#2f9aea;}
#menu-a:hover{color:#007bff;background-color:#ffffff;font-weight:blod;font-weight:700;}
.text-while{color:#ffffff;}

.btn-cercle{float:right;text-align:center;background-color:#e1dede;width:30px;height:30px;border-radius:50%;margin-top:-5px;}
.btn-cercle i{margin-top:6px;color:#c0c0c0;}
.btn-cercle:hover i{margin-top:6px;color:#858585;}

#border-left{border-left:7px solid #59a4f0;background-color:#f1f5f9;}
#border-left:hover{border-left:7px solid #59a4f0;background-color:#ffffff;}
#card-gris{background-color:#f1f1f1;}
#card-gris h6{color:#000000;}
.space{width:100%;height:8px;}
table {font-size:14px;}
.showbox1{background-color:#ffffff;padding:20px 20px 20px 20px;}
.titleapp{margin-top:20px;padding:10px 10px 10px 10px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}


.lastinfo{color:#3931d8;}
.border_list{border-bottom:1px solid #c0c0c0;padding:10px 0px 10px 0px;}
.dashhome{background-color:#ffffff;border-bottom:1px solid #c0c0c0;padding:10px 0px 10px 0px;}
#dashhomelink{color:#09029c;}
.dashhometitre{color:#000000;font-size:25px;}
.textblod{color:#000000;font-size:15px;font-weight:blod;font-weight:700;}
.textnormal{color:#000000;font-size:15px;font-weight:normal;font-weight:400;}

.textblod_h2{color:#000000;font-size:35px;font-weight:blod;font-weight:700;}
.textnormal_h2{color:#000000;font-size:17px;font-weight:normal;font-weight:400;line-height:1.8;}

.textblodfull{color:#000000;font-size:15px;font-weight:blod;font-weight:700;width:100%;}
.textnormalfull{color:#000000;font-size:15px;font-weight:normal;font-weight:400;width:100%;}

.textbloddelete{color:#000000;font-size:25px;font-weight:blod;font-weight:700;width:100%;}
.textnormaldelete{color:#000000;font-size:15px;font-weight:normal;font-weight:400;width:100%;}


.textnormalbtn{color:#ffffff;font-size:15px;font-weight:normal;font-weight:400;}
.navbarleft{background-color:#3c4b64;}
.navbarleftlink{background-color:#3c4b64;color:#ffffff;font-size:13px;font-weight:normal;font-weight:400;}
.navbarleftlink:hover{background-color:#321fdb;color:#ffffff;font-size:13px;font-weight:normal;font-weight:400;}
.sidebar-heading{color:#ffffff;font-size:13px;font-weight:blod;font-weight:700;}
#menu-toggle{color:#7f7f8a;}
#menu-toggle:hover{color:#a0a0a3;}
.pagetitle{color:#000000;font-size:20px;font-weight:normal;font-weight:400;}
#pagetitleprimerlink{color:#887ee5;font-size:15px;font-weight:normal;font-weight:400;}
#pagetitlesecondelink{color:#a0a0a3;font-size:15px;font-weight:normal;font-weight:400;}

.textred{color:#c60113;font-size:13px;font-weight:normal;font-weight:700;}
.textvert{color:#037300;font-size:13px;font-weight:normal;font-weight:700;}

.backrred{background-color:#c60113;border:1px solid #c60113;color:#ffffff;}
.backrvert{background-color:#037300;border:1px solid #037300;color:#ffffff;}


</style>


<style type="text/css">
        
.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}



.blueblod 
{
background-color: #2316a5;
}
.circle-tile-heading.blueblod:hover 
{
background-color: #140885;
}


.bluenormal 
{
background-color: #3194f5;
}
.circle-tile-heading.bluenormal:hover 
{
background-color: #2c89dc;
}



.asfirblod 
{
background-color: #f7a10f;
}
.circle-tile-heading.asfirblod:hover 
{
background-color: #d98a03;
}


.redblod 
{
background-color: #e34e4e;
}
.circle-tile-heading.redblod:hover 
{
background-color: #de4343;
}




.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

</style>
  </head>
  <body class="h-100">

    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        
@include('layouts.adminmenu')

<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
<div class="main-navbar sticky-top bg-white">          
@include('layouts.adminnavbarre')
</div>
		  
	
<div class="main-content-container container-fluid px-4">
 @section('content')
@show
</div>


</main>
</div>
</div>

<div class="promo-popup animated" >
      <a href="" class="pp-cta extra-action">
        <img src="{{ asset('public/profile_pic/admin/1604750972.jpg') }}"  style="margin-left:10px;margin-top:50px;width:100px;height:100px;border-radius:50%;"> </a>
      <div class="pp-intro-bar">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
      </div>
      <div class="pp-inner-content">
        <h2>{{ Auth::user()->firstname }}</h2>
        <p>{{ Auth::user()->email }}</br>Since : {{ Auth::user()->created_at }}</p>
        <a class="pp-cta extra-action" href="{{route('admin.profile')}}">Profile</a>
      </div>
    </div>
	
		   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>


    <script src="{{ asset('public/master_assets/scripts/extras.1.1.0.min.js')}}"></script>
    <script src="{{ asset('public/master_assets/scripts/shards-dashboards.1.1.0.min.js')}}"></script>
    <script src="{{ asset('public/master_assets/scripts/app/app-blog-overview.1.1.0.js')}}"></script>
 </body>
  

	
   
</html>