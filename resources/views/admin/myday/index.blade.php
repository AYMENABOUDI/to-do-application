@extends('layouts.admin')
@section('title', 'My day')
@section('content')
<script src="{{ asset('public/ajax/libs/jquery.validate.js')}}"></script>




<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >My day</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitlesecondelink">My day</a>
</div>
</div>


<div class="space"></div>
<div class="space"></div>




<div class="row cadre_add" style="padding:10px 0px 5px 0px;">
<div class="col-md-7">
<span class="mt-4 pagetitle" >@include('layouts.day')
</div>
<div class="col-md-5" style="text-align:right;">
<a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-post">Add new</a> 
</div>
</div>
<div class="space"></div>
<div class="space"></div>





    <div class="row">
        <div class="col-12">
   @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
@endif 



<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                 <th>Name</th>
                 <th>Type</th>
                 <th>Date</th>
                 <th>Etats</th>
                 <th></th>
            </tr>
        </thead>
<tbody id="posts-crud">
@foreach($tasks as $post)
<div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="text-align:center;">
	          <h5 id="exampleModalLabel" class="textbloddelete">Delete ?</h5>
	          <h5 id="exampleModalLabel" class="textnormaldelete ">Please ensure and then confirm!</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="model_btn_close" data-dismiss="modal">No, cancel</button>
		<a  href="javascript:void(0)" id="delete-post" data-id="{{ $post->id }}" class="model_btn_delete delete-post" data-dismiss="modal">Yes, Delete</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="text-align:center;">
	          <h5 id="exampleModalLabel" class="textbloddelete">Delete ?</h5>
	          <h5 id="exampleModalLabel" class="textnormaldelete ">Please ensure and then confirm!</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="model_btn_close" data-dismiss="modal">No, cancel</button>
		<a  href="javascript:void(0)" id="delete-post" data-id="{{ $post->id }}" class="model_btn_delete delete-post" data-dismiss="modal">Yes, Delete</a>
      </div>
    </div>
  </div>
</div>

<tr id="post_id_{{ $post->id }}">
 <td>{{ $post->name  }}</td>
<td>@if($post->type=='1')
Event
@elseif($post->type=='2')
Meeting
@elseif($post->type=='3')
Travel
@elseif($post->type=='4')
Training
@endif</td>

<td>{{ $post->created_at  }}</td>
<td>@if($post->etats=='0')
<span class="textred">Not completed</span>
@elseif($post->etats=='1')
<span class="textvert">Completed</span>
@endif</td>
<td class="td_btn">
<a href="{{ route('myday.show', $post->id) }}" class="btn-edite"><i class="fa fa-eye"></i></a>
<a href="{{ route('myday.edit',$post->id) }}" class="btn-edite"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal{{ $post->id }}" class="btn-delete delete-post"><i class="fa fa-trash"></i></a>
</td>
</tr>
@endforeach
</tbody>
</table>        

       </div> 
    </div>
</div>

<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="postCrudModal"></h4>
				<button type="button" class="close model_fa_close" data-dismiss="modal">&times;</button>

    </div>

	
	
<form action="{{ route('myday.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
     @csrf
	 <div class="modal-body">

        <input type="hidden" name="post_id" id="post_id" value="<?php echo date('Y-m-d');?><?php echo date('h:i:s');?>">
		<input type="hidden" name="id_admin" id="id_admin" value="{{ Auth::user()->id }}">
		<input type="hidden" name="etats" id="etats" value="0">
		<input type="hidden" name="etatsnote" id="etatsnote" value="0">
		<input type="hidden" name="etatsdate" id="etatsdate" value="{{ date('Y-m-d') }}">

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
             <input type="date" class="form-control" value="{{ date('Y-m-d') }}" disabled />
             <input type="hidden" class="form-control" id="task_date" name="task_date" value="{{ date('Y-m-d') }}" required="">
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
                    <textarea type="text" class="form-control" id="description" name="description" value="" style="height:100px;" required=""></textarea>
                </div>
            </div>
</div>
<div class="modal-footer"style="text-align:right;">
<button type="button" class="model_btn_close" data-dismiss="modal">Close</button>
<button type="submit" class="model_btn_save" id="btn-save" value="create">Save</button>
</div>
</form>

</div>
</div>
</div>



<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#create-new-post').click(function () {
        $('#btn-save').val("create-post");
        $('#postForm').trigger("reset");
        $('#postCrudModal').html("Add New task");
        $('#ajax-crud-modal').modal('show');
    });
 
    $('body').on('click', '#edit-post', function () {
      var post_id = $(this).data('id');
      $.get(+post_id+'/edit', function (data) {
         $('#postCrudModal').html("Edit Documents");
          $('#btn-save').val("edit-post");
          $('#ajax-crud-modal').modal('show');
          $('#post_id').val(data.id);
          $('#id_client').val(data.id_client);
          $('#crm_type').val(data.crm_type);
		  
		          
		  
          $('#title').val(data.title);
          $('#fichier').val(data.fichier);
          $('#crm_date').val(data.crm_date);  
          $('#crm_time').val(data.crm_time);  
          $('#note').val(data.note);  
          $('#id_admin').val(data.id_admin);  
          $('#id_day').val(data.id_day);  
          $('#id_month').val(data.id_month);  
          $('#month').val(data.month);  
          $('#id_year').val(data.id_year);  
      })
   });

    $('body').on('click', '.delete-post', function () {
        var post_id = $(this).data("id");		
		
		
		
		

 
        $.ajax({
            type: "DELETE",
            url: "{{ url('myday')}}"+'/'+post_id,
            success: function (data) {
                $("#post_id_" + post_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });   
  });
 
 if ($("#postForm").length > 0) {
      $("#postForm").validate({
 
     submitHandler: function(form) {

      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');


      $.ajax({
          data: $('#postForm').serialize(),
          url: "{{ route('myday.store') }}",
        
          type: "POST",
          dataType: 'json',
          success: function (data) {
              var post = '<tr id="post_id_' + data.id + '"><td>' + data.crm_type + '</td><td>' + data.title + ' </td><td>' + data.crm_date + ' ' + data.crm_time + '</td><td>' + data.month + '</td>';
              post += '<td class="td_btn"><a href="{{ url("clients/documents") }}/' + data.id_client + '/' + data.id + '" class="btn-edite"><i class="fa fa-eye"></i></a> <a href="javascript:void(0)" id="edit-post" data-id="' + data.id + '" class="btn-edite"><i class="fa fa-edit"></i></a> <a href="javascript:void(0)" id="delete-post" data-id="' + data.id + '" class="btn-delete delete-post"><i class="fa fa-trash"></i></a></td></tr>';
              post += '';
               
              
              if (actionType == "create-post") {
                  $('#posts-crud').prepend(post);
              } else {
                  $("#post_id_" + data.id).replaceWith(post);
              }
 
              $('#postForm').trigger("reset");
              $('#ajax-crud-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
    }
  })
}
</script>


<script>
$(document).ready(function () {
    $(".Call").hide();
    $("#r1").click(function () {
        $(".Call").show();
    });
	
    $("#r2").click(function () {
        $(".Call").hide();
    });
	
	$(".Visit").hide();
    $("#r1").click (function () {
        $(".Visit").hide();
    });
	
    $("#r2").click(function () {
        $(".Visit").show();
    });
});
</script>










 

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

 
@endsection