@extends('layouts.admin')

@section('title', 'Pages')
@section('content')
<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Pages  ( {{$book_pagescount}} )</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitlesecondelink">Pages</a>
</div>
</div>
</BR>

<a href="{{ route('titles.index') }}" class="btn btn-success">Add new title</a>
<a href="{{ route('pages.create') }}" class="btn btn-success">Add new page</a>

 @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
@endif

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Page number</th>
      <th scope="col">Title</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   @foreach($book_pages as $post)
<tr>
<td>{{ $post->id_number }}</td>
<td>
@if($post->title_type =='2')  
<span class="textnormal">( Affiliated ) {{ $post->title }}</span>
@else
<span class="textblod">( New ) {{ $post->title }}</span>
@endif 

</td>
      <td class="table-buttons" style="text-align:right;width:270px;">
        
        <form method="POST" action="{{ route('pages.destroy', $post->id) }}">
         <a href="{{ route('pages.show', $post->id) }}" class="btn btn-success">
          View
        </a>
        <a href="{{ route('pages.edit', $post->id) }}" class="btn btn-primary">
          Edite
        </a>@csrf
         @method('DELETE')
            <button type="submit" class="btn btn-danger">
              Delete
            </button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>

@endsection