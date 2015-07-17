@extends('layout.default')

@section('title')
{{ $book->title }}
@stop

@section('content')
	<div>
		<div class="panel">
			<h1>
				{{ $book->title }}
				<span class="right">
					{{ link_to("/books/{$book->id}/edit", 'edit', ['class' => 'label success']) }}
				</span>
			</h1>
			<p>{{ $book->desc }} </p>
		</div>
		<div>
			<h2>Comments:</h2>
			
			@foreach ($book->comments as $comment)
			<div class="panel">
				{{ $comment->text }}
				<span class="right">
					{{ link_to_action('CommentsController@delete', 'Delete', $comment->id, ['class' => 'label alert']) }}
				</span>
			</div>
			@endforeach
			
			{{ Form::open(array('action' => array('BooksController@comment', $book->id), 'class' => 'row collapse')) }}
				
				<div class="small-10 columns">
					{{ Form::text('text', '', array('placeholder'=>'Comment')) }}
				</div>
				
				<div class="small-2 columns">
					{{ Form::submit('Dodaj', ['class' => 'button postfix']) }}
				</div>
				
			{{ Form::close() }}

		</div>
	</div>
@stop
