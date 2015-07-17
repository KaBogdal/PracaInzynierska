@extends('layout.default')

@section('title')
Comments
@stop

@section('content')
	@if (!isset($comments) || !count($comments))
		<span>Comments list is empty</span>
	@else
		@foreach ($comments as $comment)
			<div class="panel">
				<h4>{{$comment->book->title}}</h4>
				<p>
					{{ link_to("/books/{$comment->book->id}", $comment->text) }}
				</p>
			</div>
		@endforeach
	@endif
@stop
