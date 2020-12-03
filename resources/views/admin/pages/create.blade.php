
@extends('layouts.admin')

@section('title', 'Add Pages')
@section('content')



<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Add Pages</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitleprimerlink" href="{{ route('pages.index') }}">Pages /</a>
<a id="pagetitlesecondelink">Add</a>
</div>
</div>
</BR>

<div class="row">
<div class="col-lg-12 mx-auto">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
	
	
	
<div class="form-group">
<label for="post-description" style="width:100%;" class="textblod">Page title</label>


<label for="r1" class="textnormal">
<input type="radio" name="title_type_hidden" id="r1" value="1" onClick="getResults()" > New title
</label>

<label for="r2" class="textnormal" style="margin-left:20px;">
<input type="radio" name="title_type_hidden" id="r2" value="2" onClick="getResults()"> Last title
</label>





<div class="text2">
<form id="file-upload-form" class="uploader" action="{{ route('pages.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
     @csrf
	<input type="hidden" name="title_type" value="2" />


	
<div class="form-group">
<label for="post-description" class="textblod">Page number</label>
<select name="id_number" class="form-control">
<option value="" disabled selected >Select number</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='3')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 3 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='4')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 4 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='5')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 5 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='6')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 6 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='7')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 7 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='8')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 8 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='9')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 9 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='10')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 10 
</option>
</select>
</div>
		
		
<div class="form-group">
<label  class="textblod">Last page title</label>
<select   name="page_title" class="form-control" >
<option value="" disabled selected >Select page title</option>
@foreach($book_page_title as $post)
<option value="{{ $post->id }}">{{ $post->title }}</option>
@endforeach
</select>
</div>

		

		
		
		<div class="form-group form-group-max">
            <label for="post-description" class="textblod">Text</label>
            <textarea name="body" class="form-control" id="post-description" rows="3" style="height:600px;" maxlength="1930" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>







<div class="text">
<form id="file-upload-form" class="uploader" action="{{ route('pages.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
     @csrf

	<input type="hidden" name="title_type" value="1" />

<div class="form-group">
<label for="post-description" class="textblod">Page number</label>
<select name="id_number" class="form-control">
<option value="" disabled selected >Select number</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='3')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 3 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='4')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 4 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='5')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 5 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='6')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 6 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='7')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 7 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='8')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 8 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='9')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 9 
</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='10')  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif 
@endforeach > 10 
</option>
</select>
</div>
		
		
		
<div class="form-group">
<label  class="textblod">Page title</label>
<select   name="page_title" class="form-control" >
<option value="" disabled selected >Select page title</option>
@foreach($book_page_title as $post)
<option value="{{ $post->id }}" @foreach($book_pages as $posts)
@if($posts->page_title == $post->id)  
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@else
@endif
@endforeach>{{ $post->title }} 
</option>
@endforeach
</select>
</div>

		

		
		
		<div class="form-group">
            <label for="post-description" class="textblod">Text</label>
            <textarea name="body" class="form-control" id="post-description" rows="3" style="height:400px;" maxlength="1930" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>








</div>


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