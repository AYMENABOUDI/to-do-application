
@extends('layouts.admin')

@section('title', 'Page')
@section('content')
<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Page edit</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitleprimerlink" href="{{ route('pages.index') }}">Pages /</a>
<a id="pagetitlesecondelink">Edit</a>
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
<input type="radio" name="title_type_hidden" id="r1" value="1" onClick="getResults()" 
@if($book_page->title_type == 1)
checked  
@else
@endif > New title
</label>

<label for="r2" class="textnormal" style="margin-left:20px;">
<input type="radio" name="title_type_hidden" id="r2" value="2" onClick="getResults()" 
@if($book_page->title_type == 2)
checked  
@else
@endif> Last title
</label>		
</div>





<div class="text">
<form method="POST" action="{{ route('pages.update', $book_page) }}">
@csrf
@method('PATCH') 
<input type="hidden" name="title_type" value="1" />
<div class="form-group">
<label for="post-description" class="textblod">Page number</label>
<select name="id_number" class="form-control">
<option value="" disabled selected >Select number</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='3') 
@if($book_page->id_number =='3')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 3
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='4') 
@if($book_page->id_number =='4')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 4 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='5') 
@if($book_page->id_number =='5')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 5 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='6') 
@if($book_page->id_number =='6')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 6 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='7') 
@if($book_page->id_number =='7')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 7 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='8') 
@if($book_page->id_number =='8')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 8 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='9') 
@if($book_page->id_number =='9')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 9 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='10') 
@if($book_page->id_number =='10')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 10 
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
@if($book_page->page_title == $post->id)  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif
@else
@endif
@endforeach >{{ $post->title }}
</option>
@endforeach
</select>
</div>

		<div class="form-group">
<label for="post-description" class="textblod">Text</label>
            <textarea name="body" class="form-control" id="post-description" rows="3" style="height:400px;" maxlength="1930" cols="30" rows="10">{{ $book_page->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>










<div class="text2">
<form method="POST" action="{{ route('pages.update', $book_page) }}">
@csrf
@method('PATCH') 
<input type="hidden" name="title_type" value="2" />
<div class="form-group">
<label for="post-description" class="textblod">Page number</label>
<select name="id_number" class="form-control">
<option value="" disabled selected >Select number</option>
<option @foreach($book_pages as $post)
@if($post->id_number =='3') 
@if($book_page->id_number =='3')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 3
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='4') 
@if($book_page->id_number =='4')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 4 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='5') 
@if($book_page->id_number =='5')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 5 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='6') 
@if($book_page->id_number =='6')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 6 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='7') 
@if($book_page->id_number =='7')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 7 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='8') 
@if($book_page->id_number =='8')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 8 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='9') 
@if($book_page->id_number =='9')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 9 
</option>

<option @foreach($book_pages as $post)
@if($post->id_number =='10') 
@if($book_page->id_number =='10')  
selected
@else
disabled style="background-color:#c0c0c0;color:#f1f1f1;"
@endif 
@else
@endif 
@endforeach  > 10 
</option>

</select>
</div>



<div class="form-group">
<label  class="textblod">Last page title</label>
<select   name="page_title" class="form-control" >
<option value="" disabled selected >Select page title</option>
@foreach($book_page_title as $post)
<option value="{{ $post->id }}" @foreach($book_pages as $posts)
@if($posts->page_title == $post->id)  
@if($book_page->page_title == $post->id)  
selected
@else
@endif
@else
@endif
@endforeach >{{ $post->title }}
</option>
@endforeach
</select>
</div>

		<div class="form-group">
<label for="post-description" class="textblod">Text</label>
            <textarea name="body" class="form-control" id="post-description" rows="3" style="height:400px;" maxlength="1930" cols="30" rows="10">{{ $book_page->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
	</div>


		

</div>
</div>
</div>
</br>
<script src="{{ asset('public/jquery/example/jQuery.maxlength.js')}}"></script>

<script>
$('div.form-group-max').maxlength();
</script>

<?php $type_title = "$book_page->title_type";?>
<?php 
if($type_title=="1")
{
$type_title_f1 = "show";
}
if($type_title!="1")
{
$type_title_f1 = "hide";
}

if($type_title=="2")
{
$type_title_f2 = "show";
}
if($type_title!="2")
{
$type_title_f2 = "hide";
}
?>

<script>
$(document).ready(function () {
    $(".text").<?php echo $type_title_f1;?>();
    $("#r1").click(function () {
        $(".text").show();
    });
	
    $("#r2").click(function () {
        $(".text").hide();
    });
	
	$(".text2").<?php echo $type_title_f2;?>();
    $("#r1").click (function () {
        $(".text2").hide();
    });
	
    $("#r2").click(function () {
        $(".text2").show();
    });
});
</script>
@endsection