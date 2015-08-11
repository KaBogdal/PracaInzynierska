@extends('layout.default')

@section('title')
Edit
@stop

@section('content')

	<form action='{{ url("/books/{$book->id}/store") }}' method="post">
	
	  <div class="row collapse">
	    <div class="small-3 large-2 columns">
	      <span class="prefix">Title:</span>
	    </div>
	    <div class="small-9 large-10 columns">
	      <input type="text" placeholder="Enter title..." name="title" value="{{ $book->title }}">
	    </div>
	  </div>
	  <div class="row collapse">
	    <div class="small-3 large-2 columns">
	      <span class="prefix">Description:</span>
	    </div>
	    <div class="small-9 large-10 columns">
	      <input type="text" name="desc" value="{{ $book->desc }}" placeholder="Enter your description..."/><br/>
	    </div>
	  </div>
	  
	  <input type="submit" value="Update" class="button right"/>
	  
	</form>
	
@stop