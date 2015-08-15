  <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	

</head>
<body>
	@include('layout.partials.menu')
	
	<div class="row">
		<div class="large-12 columns">
			<br/>
			@yield('content')
		</div>
	</div>

	<script>
		//$(document).foundation();
	</script>
</body>
</html>
