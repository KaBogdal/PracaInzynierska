@extends('layout.default')

@section('title')
Changed!
@stop

@section('content')
	{{ link_to('/books', 'Books') }}
	<div>
		<strong>Title:</strong> {{ $book }} 
	</div>
@stop
