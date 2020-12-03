@extends('layouts.admin')
@section('title', 'Event details')
@section('content')
<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Event details</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitleprimerlink" href="{{ route('tasks.index') }}">Calendar /</a>
<a id="pagetitlesecondelink">Details</a>
</div>
</div>


<div class="space"></div>
<div class="space"></div>




<div class="row cadre_add" style="padding:10px 0px 5px 0px;">
<div class="col-md-6">
<span class="mt-4 pagetitle" >{{ $task->name }}</span>
</div>
<div class="col-md-6" style="text-align:right;">
<a href="{{ route('tasks.edit',$task->id) }}" class="btn-edite"><i class="fa fa-edit"></i></a>
</div>
</div>
<div class="space"></div>
<div class="space"></div>




<div class="row">
<div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
<div class="card card-small mb-3">
<div class="card-body">

<label class="col-md-12 bluetext">Details</label>
<label class="col-md-12 textblod">Task number : <span class="textnormal">{{ $task->id }}</span></label>
<label class="col-md-12 textblod">Date : <span class="textnormal">{{ $task->day }}</span></label>
<label class="col-md-12 textblod">Task type : <span class="textnormal">
@if($task->type =='1')  
Event
@elseif($task->type =='2') 
Meeting
@elseif($task->type =='3') 
Travel
@elseif($task->type =='4') 
Training
@endif
</span>
</label>
<label class="col-md-12 textblod">Created at : <span class="textnormal">{{ $task->created_at }}</span></label>
<label class="col-md-12 textblod lastinfo">Last edite : <span class="textnormal">{{ $task->updated_at }}</span></label>

<label class="col-md-12 textblod">Note</label>
<label class="col-md-12 textblod"><span class="textnormal">{{ $task->description }}</span></label>
</div>
</div>


@if($task->etats=='0')

@elseif($task->etats=='1')
<div class="card card-small mb-3">
<div class="card-body">
<label class="col-md-12 textblod">Closed Note</label>
<label class="col-md-12 textblod"><span class="textnormal">{{ $task->etatsnote }}</span></label>
</div>
</div>
@endif


 </div>

 
 <div class="col-lg-3 col-md-12">
<div class='card card-small mb-3'>
<div class="card-body">
<label class="col-md-12 bluetext">Actions</label>

<div class='card-body p-0'>
<ul class="list-group list-group-flush">
<li class="list-group-item p-3">
<span class="d-flex mb-2">
<strong class="mr-1 textblod">Status :</strong> 
@if($task->etats=='0')
<span class="textred">Not completed</span>
@elseif($task->etats=='1')
<span class="textvert">Completed</span>
@endif
</span>
@if($task->etats=='0')

@elseif($task->etats=='1')
<strong class="mr-1 textblod">Colsed date :</strong> {{ $task->etatsdate }}
@endif
</li>



<li class="list-group-item d-flex px-3">

@if($task->etats=='0')
@elseif($task->etats=='1')
<button class="btn btn-sm btn-outline-accent" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal{{ $task->id }}">
<i class="material-icons">save</i> Edit
</button>
@endif



@if($task->day <= date('Y-m-d'))  

@if($task->etats=='0')
<button class="btn btn-sm btn-accent ml-auto backrred" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal{{ $task->id }}">
<i class="material-icons">file_copy</i> Close task
</button>
@elseif($task->etats=='1')
<button class="btn btn-sm btn-accent ml-auto backrvert" >
<i class="material-icons">file_copy</i> Closed
</button>
@endif


@elseif($task->day != date('Y-m-d'))
You can't close this task 
@endif






</li>
</ul>
</div>
</div>
</div>

				
                <!-- / Post Overview -->
              </div>
            </div>
    </div>
	
	
	
<div class="modal fade" id="exampleModal{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
@if($task->etats=='0')
<h4 class="modal-title" id="postCrudModal">Close this task</h4>
@elseif($task->etats=='1')
<h4 class="modal-title" id="postCrudModal">Edit closed Note </h4>
@endif
<button type="button" class="close model_fa_close" data-dismiss="modal">&times;</button>
</div>

	
	
<form action = "{{ route('myday.update', $task->id) }}" method = "POST">
@csrf
@method('PATCH') 
<div class="modal-body">
<input type="hidden" name="etats" id="etats" value="1">
<input type="hidden" name="etatsdate" id="etatsdate" value="{{ date('Y-m-d') }}">

						
			<div class="form-group">
                <label for="name" class="col-sm-2 control-label textblod">Description</label>
                <div class="col-sm-12">
                    <textarea type="text" class="form-control" id="etatsnote" name="etatsnote" value="" style="height:100px;" required="">{{ $task->etatsnote }}</textarea>
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

@endsection