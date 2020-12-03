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
<a id="pagetitleprimerlink" href="{{ route('tasks.show',$task->id) }}">Task /</a>
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

<div class="space"></div>
<div class="space"></div>








<div class="row">
<div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
<div class="card card-small mb-3">
<div class="card-body">

<form action = "{{ route('tasks.update', $task->id) }}" method = "POST">
@csrf
@method('PATCH') 

<input type="hidden" class="form-control" id="etats" name="etats" value="{{ $task->etats }}">
<input type="hidden" class="form-control" id="etatsnote" name="etatsnote" value="{{ $task->etatsnote }}">
<input type="hidden" class="form-control" id="etatsdate" name="etatsdate" value="{{ $task->etatsdate }}">

<div class="form-group row">
                <label for="name" class="col-sm-2 control-label textblod">Title</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}" required="">
                </div>
            </div>
			
			<div class="form-group row">
            <div class="col-sm-12" style="padding:0px;">
			 <label for="name" class="col-sm-2 control-label textblod">Date</label>
                </div>
			<div class="col-sm-6">
             <input type="date" class="form-control" id="task_date" name="task_date" value="{{ $task->task_date }}" required="">
             </div>
			 

			</div>
			
                 <div class="row">
<div class="col-sm-12" >
                 <label  class="control-label textblod">Event type</label>
                </div>
			  	<div class="col-sm-12">
                       <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">

@if($task->type =='1')  
<label class="btn btn-white active">
@else
<label class="btn btn-white">
@endif
<input type="radio" name="type" id="option1" autocomplete="off" value="1" 
@if($task->type =='1')  
checked
@else
@endif > Event </label>



@if($task->type =='2')  
<label class="btn btn-white active">
@else
<label class="btn btn-white">
@endif
<input type="radio" name="type" id="option2" autocomplete="off" value="2" 
@if($task->type =='2')  
checked
@else
@endif > Meeting </label>



@if($task->type =='3')  
<label class="btn btn-white active">
@else
<label class="btn btn-white">
@endif
<input type="radio" name="type" id="option3" autocomplete="off" value="3" 
@if($task->type =='3')  
checked
@else
@endif  > Travel </label>



@if($task->type =='4')  
<label class="btn btn-white active">
@else
<label class="btn btn-white">
@endif
<input type="radio" name="type" id="option4" autocomplete="off" value="4" 
@if($task->type =='4')  
checked
@else
@endif > Training </label>
                 </div>
                 </div>
                 </div>
						
			<div class="form-group row">
                <label for="name" class="col-sm-2 control-label textblod">Description</label>
                <div class="col-sm-12">
                    <textarea type="text" class="form-control" id="description" name="description" value="" style="height:100px;" required="">{{ $task->description }}</textarea>
                </div>
            </div>
			
			<div class="modal-footer"style="text-align:right;">
<button type="submit" class="model_btn_save">Save</button>
</div>
</form>
</div>
</div>




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

</ul>
</div>
</div>
</div>

				
                <!-- / Post Overview -->
              </div>
            </div>
    </div>
	

@endsection