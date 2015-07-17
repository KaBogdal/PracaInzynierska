<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	
	{{ HTML::style('components/foundation/css/foundation.css') }}
	{{ HTML::style('components/foundation/css/normalize.css') }}
	{{ HTML::script('components/modernizr/modernizr.js') }}

</head>
<body>
	@include('layout.partials.menu')
	
	<div class="row">
		<div class="large-12 columns">
			<br/>
			@yield('content')
		</div>
	</div>
	
	{{ HTML::script('components/jquery/dist/jquery.js') }}
	{{ HTML::script('components/foundation/js/foundation.js') }}
	
	<script>
		$(document).foundation();
	</script>
</body>
</html>
