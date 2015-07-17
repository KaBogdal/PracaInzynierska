@extends('layout.default')

@section('title')
Books
@stop

@section('content')
	{{ link_to("/books/new", "New book", ['class' => 'button']) }}
	
	@if (!isset($books) || !count($books))
		<span>Book list is empty</span>
	@else
		@foreach ($books as $book)
			<div class="panel">
				{{ link_to("/books/{$book->id}", $book->title) }}
				<span class="right">
					{{ link_to("/books/{$book->id}/delete", "Delete", ['class' => "label alert"]) }}
				</span>
			</div>
		@endforeach	
	@endif
	
@stop