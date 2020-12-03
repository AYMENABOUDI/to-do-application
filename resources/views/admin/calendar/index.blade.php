@extends('layouts.admin')
@section('title', 'Calendar')
@section('content')
<script src="{{ asset('public/ajax/libs/jquery.validate.js')}}"></script>



<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Manage Calendar</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitlesecondelink">Calendar</a>
</div>
</div>

<div class="row titleappseconde">
<div class="col-md-12"style="padding:0px;">
<h3 class="page-title" >Calendar</h3>
</div>
 
<div class="col-md-12 cadre_add" >
<a href="{{ route('tasks.create') }}" class="btn_add">Add Event</a> 
</div>
</div>

  <div class="space"></div>
  <div class="space"></div>


<div class="row">
        
<div class="col-sm-12">
<div id="posts-crud">

<div class="form-group row cadre_filter">

<div class="col-sm-4">
<label for="name" class=" control-label textblod">Type</label>
<select id="type_selector" class="form-control">
  <option value="all">All</option>
  <option value="1">Event</option>
  <option value="2">Meeting</option>
  <option value="3">Travel</option>
  <option value="4">Training</option>
</select>
</div>
<div class="col-sm-4">
<label for="name" class="control-label textblod">By month</label>
<input type="month" class="select_month form-control"required="">
</div>

<div class="col-sm-4">
<label for="name" class="control-label textblod">By day</label>
<input type="date" class="select_day form-control"required="">
</div>
	 
</div>
	



<div class="row">
<div id='calendar' ></div>
</div>

          {{ $tasks->links() }}
       </div> 
    </div>
</div>


</div>


 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
 
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>




<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
		
		
		

		header: {
            left: 'prev,next today',
            center: 'title',
            right: 'year,month,basicWeek,basicDay',
            ignoreTimezone: false
        },

		
		addAll: function(){
            this.el.fullCalendar('addEventSource', this.collection.toJSON());
        },
            // put your options and callbacks here
            events : [
                @foreach($tasks as $task)
                {
					 
					

					@if($task->type =='1')  
				    title : '( Event ) {{ $task->name }}',
					@elseif($task->type =='2') 
					 title : '( Meeting ) {{ $task->name }}',
					@elseif($task->type =='3') 
					 title : '( Travel ) {{ $task->name }}',
					@elseif($task->type =='4') 
					 title : '( Training ) {{ $task->name }}',
                    @endif
					
                    start : '{{ $task->task_date }}',
                    end : '{{ $task->task_enddate }}',
                    type : '{{ $task->type }}',
					@if($task->type =='1')  
					color: '#099702',
					@elseif($task->type =='2') 
					color: '#970284',
					@elseif($task->type =='3') 
					color: '#020997',
					@elseif($task->type =='4') 
					color: '#ee6b0b',
                    @endif
					
                    url : '{{ route('tasks.show', $task->id) }}'
                },
                @endforeach
            ],
		eventRender: function eventRender( event, element, view ) {
        return ['all', event.type].indexOf($('#type_selector').val()) >= 0
    }
});

$('#type_selector').on('change',function(){
$('#calendar').fullCalendar('rerenderEvents');
});


  $(".select_month").on("change", function(event) {
   $('#calendar').fullCalendar('changeView', 'month', this.value);
   $('#calendar').fullCalendar('gotoDate', ""+this.value+"");
   });
   

   $(".select_day").on("change", function(event) {
   $('#calendar').fullCalendar('changeView', 'basicDay', this.value);
   $('#calendar').fullCalendar('gotoDate', ""+this.value+"");
   });
   

		
    });
</script>


@endsection