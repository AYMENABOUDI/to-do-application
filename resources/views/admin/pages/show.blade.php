
@extends('layouts.admin')

@section('title', 'Page')
@section('content')
<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Page details</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitleprimerlink" href="{{ route('pages.index') }}">Pages /</a>
<a id="pagetitlesecondelink">Details</a>
</div>
</div>
</BR>

<div class="card">
<div class="card-body">
@foreach($book_page as $post)
<p class="textblod">Page number : <span class="textnormal">{{ $post->id_number }}</span></p>
<p class="textblod">Body : <span class="textnormal">{{ $post->body }}</span></p>
<p class="textblod">Created at : <span class="textnormal">{{ $post->created_at }}</span></p>
<p class="textblod lastinfo">Last edite : <span class="textnormal">{{ $post->updated_at }}</span></p>
  @endforeach
</div>
</div>
    </div>

@endsection