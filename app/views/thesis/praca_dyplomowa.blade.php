<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-theme.min.css">

<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="css.css">


@extends('layout.default')
@section('content')

<html>
<body>

<div class="col-md-9">
				
</div>
<div class="col-md-3">
<div align="center">
<a href="http://localhost:8000"><button type="button" class="btn btn-info"><font color="black">Powrót na stronę główna</font></button></a>
</div>
</div>

<?php 

$thesis = DB::table('theses')->where('id','=',$id)->get()[0]; 

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		 
			<h4>
			  <?php  echo $thesis->subject; ?>
			</h4>
			  <font size="3"><div align="center"> <?php  echo $thesis->descr; ?> </div> </font>
			  	<br>	
			<?php 	$filename= "/assets/thesis_".$id."/".$thesis->fileName;
			?> 
			<?php $lect = DB::table('users')->where('id','=', $thesis->lecturer_id)->get()[0]; ?>
			
			<div align="center"><a href="{{URL::asset($filename)}}"> Wyświetl pracę dyplomową  </a> </div>
						<font size="3"><div align="center">Promotor : <?php echo $lect->name ?> 
						<br> Ocena promotora: 
						<?php if ($thesis->Lnote == NULL)
							echo "Brak";
								else 
							echo $thesis->Lnote;
						?>
						
<!--.................................   Zalogowany jako promotor    ......................................-->
						<?php 
						
						if (Auth::check() && Auth::user()->access == 1 && Auth::user()->id == $thesis->lecturer_id && $thesis->Lnote == NULL){
								
							if($thesis->reviewer == NULL) {
								
							$reviewers = DB::table('users')->where('access','=',1)->where('id', '!=', $thesis->lecturer_id)->get();
							?>	
							
										{{ Form::open(['role' => 'form', 'url' => '/theses/addReviewer']) }}
										  {{ Form::hidden('thesis_id', $thesis->id) }}
										  
										  <select name="reviever_id">
										    @foreach ($reviewers as $reviewer) 
										  	 <option value="<?php echo $reviewer->id ?>"> <?php echo $reviewer->name ?></option>
										  	@endforeach
										  </select>
										  <br><br>
										  <div class='form-group' id="success">
											{{ Form::submit('Dodaj recenzenta', ['class' => 'btn btn-success btn-xs']) }}
										  </div>
										 {{ Form::close() }}
									
							<?php } else {?>
							
							{{ Form::open(['role' => 'form', 'url' => '/theses/addLNote']) }}
							{{ Form::hidden('thesis_id', $thesis->id) }}
							
							<select name="LectNote">
								<option value=2> 2</option>
						  		<option value=3> 3</option>
						  		<option value=3.5> 3.5</option>
						  		<option value=4> 4</option>
						  		<option value=4.5> 4.5</option>
						  		<option value=5> 5</option>
						  </select>
						  <br><br>
						  <div class='form-group' id="success">
							{{ Form::submit('Wyślij ocenę', ['class' => 'btn btn-success btn-xs']) }}
						  </div>
							{{ Form::close() }}
							
					
					<?php } } ?> 
					
						
						</div>
						
						<?php  
						if($thesis->reviewer != NULL){
						$rev = DB::table('users')->where('id','=', $thesis->reviewer)->get()[0]; ?>
						<font size="3"><div align="center">Recenzent : <?php echo $rev->name ?> 
						<br> Ocena recenzenta: 
						<?php if ($thesis->RNote == NULL)
							echo "Brak";
								else 
							echo $thesis->RNote;
						}
								?>
						
<!--.................................   Zalogowany jako recenzent    ......................................-->
						<?php 
						
						
						if (Auth::check() && Auth::user()->access == 1 && Auth::user()->id == $thesis->reviewer && $thesis->RNote == NULL){
								?>	
							
							{{ Form::open(['role' => 'form', 'url' => '/theses/addRNote']) }}
							{{ Form::hidden('thesis_id', $thesis->id) }}
							
							<select name="RevNote">
								<option value=2> 2</option>
						  		<option value=3> 3</option>
						  		<option value=3.5> 3.5</option>
						  		<option value=4> 4</option>
						  		<option value=4.5> 4.5</option>
						  		<option value=5> 5</option>
						  </select>
						  <br><br>
						  <div class='form-group' id="success">
							{{ Form::submit('Wyślij ocenę', ['class' => 'btn btn-success btn-xs']) }}
						  </div>
							{{ Form::close() }}

					<?php } ?> 						
						
						</div>	
						<font size="3"><div align="center"><br> Ocena końcowa: 	
						<?php if ($thesis->RNote != NULL && $thesis->RNote != NULL)
								echo ($thesis->RNote + $thesis->Lnote)/2;
							else 
								echo "Brak";
						?>
						
						
						
						</div>	
	</div>
	</div>
</div>


@stop