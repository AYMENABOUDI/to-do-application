
@extends('layouts.admin')

@section('title', 'Add Pages')
@section('content')



<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Manage Calendar</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitleprimerlink" href="{{ route('tasks.index') }}">Calendar /</a>
<a id="pagetitlesecondelink">Add</a>
</div>
</div>
<div class="row titleappseconde">
<h3 class="page-title" style="padding:0px;">Add new event</h3>
</div>
<div class="row">
<div class="col-lg-12 cadre_filter">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
	
<form id="file-upload-form" class="uploader" action="{{ route('tasks.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="post_id" id="post_id" value="<?php echo date('Y-m-d');?><?php echo date('h:i:s');?>">
            <div class="form-group row">
                <label for="name" class="col-sm-2 control-label textblod">Title</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" value="" required="">
                </div>
            </div>
			
			<div class="form-group row">
            <div class="col-sm-12" style="padding:0px;">
			 <label for="name" class="col-sm-2 control-label textblod">Date</label>
                </div>
			<div class="col-sm-6">
			                 <label  class="control-label normal">Start</label>

                    <input type="datetime-local" class="form-control" id="task_date" name="task_date" value="" required="">
             </div>
			 
			 <div class="col-sm-6">
			 			                 <label  class="control-label normal">End</label>

                    <input type="datetime-local" class="form-control" id="task_enddate" name="task_enddate" value="" required="">
             </div>
			</div>
			
                 <div class="row">
<div class="col-sm-12" >
                 <label  class="control-label textblod">Event type</label>
                </div>
			  	<div class="col-sm-12">
                       <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">

                          <label class="btn btn-white active">
                            <input type="radio" name="type" id="option1" autocomplete="off" value="1" checked> Event </label>
                          <label class="btn btn-white">
                            <input type="radio" name="type" id="option2" autocomplete="off" value="2"> Meeting </label>
                          <label class="btn btn-white">
                            <input type="radio" name="type" id="option3" autocomplete="off" value="3"> Travel </label>
                          <label class="btn btn-white">
                            <input type="radio" name="type" id="option4" autocomplete="off" value="4"> Training </label>
                 </div>
                 </div>
                 </div>
						
			<div class="form-group row">
                <label for="name" class="col-sm-2 control-label textblod">Description</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="description" name="description" value="" required="">
                </div>
            </div>
            
<div class="modal-footer"style="text-align:right;">
<button type="submit" class="model_btn_save">Save</button>
</div>
</form>
</div>
</div>
</div>

</BR>


<script src="{{ asset('public/jquery/example/jQuery.maxlength.js')}}"></script>

<script>
$('div.form-group-max').maxlength();
</script>
<script>
$(document).ready(function () {
    $(".text").hide();
    $("#r1").click(function () {
        $(".text").show();
    });
	
    $("#r2").click(function () {
        $(".text").hide();
    });
	
	$(".text2").hide();
    $("#r1").click (function () {
        $(".text2").hide();
    });
	
    $("#r2").click(function () {
        $(".text2").show();
    });
});
</script>


<script>
   function loadPreview(input){
       var data = $(input)[0].files; //this file data
       $.each(data, function(index, file){
           if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
               var fRead = new FileReader();
               fRead.onload = (function(file){
                   return function(e) {
                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image thumb element
                       $('#thumb-output').append(img);
                   };
               })(file);
               fRead.readAsDataURL(file);
           }
       });
   }
</script>
@endsection