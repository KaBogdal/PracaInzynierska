<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-theme.min.css">

<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="css.css">
<link href="font-awesome.min.css" rel="stylesheet">


@extends('layout.default')
@section('content')

<!doctype html>
<html>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
		<div class="form-login">

{{ Form::open(array('url' => 'login')) }}
	<h4>Witamy w panelu logowania</h4>

<!-- if there are login errors, show them here -->
 <p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}

</p> 
			
			<div class="form-group">
					<label>Adres Email</label>
                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Adres Email">
				</div>
			<div class="form-group">
					<label>Hasło</label>
                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Hasło">
				</div>
	
	<div class="wrapper">
            <span class="group-btn"> 
				<input type="submit" class="btn btn-primary btn-md" value="Zaloguj się">
			</span>
   </div>

            </div>
        </div>
    </div>
</div>

{{ Form::close() }}

@stop