<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>

<?php  if(isset($approval) && $approval) {?>
<h3>Prace dyplomowe dla kierunku: <div id="field" style="display:inline;"> </div> </h3>
<?php }?>
@if (!isset($theses) || !count($theses))
		<span>Nie ma prac z tego dzialu.</span>
	@else
	
	<table style="width:800px">
		<tr><th style="width:70%">Temat</th>
		    <th style="width:20%">Opiekun naukowy</th>		
		    <th style="width:10%">Status</th>
    	</tr>	
		@foreach ($theses as $thesis)

		 <?php $lectorers = DB::table('users')->where('access','=',1)->where('id', '=', $thesis->lecturer_id)->get(); 
		 foreach ($lectorers as $lectorer)
		 {
		?>
		
		
		<?php if($thesis->docum == 1){ ?>
		     	<tr><td>  <div><span class="showHide btn btn-success" style="cursor:pointer; font-size: 10px">Rozwiń</span>
		     	<a href="/showThesis_{{$thesis->id}}" > {{ $thesis->subject }} </a> 
		     	<div class="extendableText">{{ $thesis->descr }}</div>
		<?php }
		else{ ?>
    	<tr><td>  <div><span class="showHide btn btn-success" style="cursor:pointer; font-size: 10px">Rozwiń</span> {{ $thesis->subject }} <div class="extendableText">{{ $thesis->descr }}</div>
		<?php } ?>
		
		</div>  </td> <td><?php echo $lectorer->name; ?></td>


		<?php 
//-------------------------------- dziekan

		if(Auth::check() && Auth::user()->access == 2) {
			if($thesis->approval) {
				echo "<td>Praca zaakceptowana</td>";
			}
			else {
		
			//if($thesis->reviewer == NULL){
			
			// $reviewers = DB::table('users')->where('access','=',1)->where('id', '!=', $thesis->lecturer_id)->get();
				?>
<?php /* 		
			<td>
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
			</td>
*/	?>
			
			<?php // } else { ?>
				<td>			
				<form action="">
				<input type="checkbox" class="thesisForApprove" name="checked" value= "<?php echo $thesis->id; ?>">
				</form>				
		<!--		<div class="btn btn-success btn-xs accept" ident="{{ $thesis->id }}">Akceptuj</div>  -->
				</td>
		<?php 
		//	}
		}
		} 
		
		
//-------------------------------- student

		
		else if(Auth::check() && Auth::user()->access == 1) {
			if($thesis->student_id == NULL) {
				echo "<td>Temat wolny</td>";
			}
				else {?>
				<td>
				Temat zajęty
				</td>
				<?php 
				}
		}
		else if(Auth::check() && Auth::user()->access == 0) {
			$studentID = Auth::user()-> id;
			$field_id = Auth::user()->field_id;
			//$st_field = DB::table('fields')->where('id','=',$field_id)->get()[0]->field; //Auth::user()-> field;
			//$st_level = DB::table('fields')->where('id','=',$field_id)->get()[0]->level; //Auth::user()-> level;
			
				if(($thesis->student_id == NULL && Auth::user()->thesis_id == NULL && $thesis->field_id == $field_id ) ) { ?>
						<td><div class="btn btn-success reserved" ident="{{ $thesis->id }}" student= "{{ $studentID }}">Rezerwuj temat</div></td>
				<?php }
				else if (Auth::user()->thesis_id  == $thesis->id ){?>
					<td><div class="btn btn-success" disabled="true">Twój temat</div></td>
					<?php
				}
				else if (($thesis->student_id == NULL && Auth::user()->thesis_id  != NULL ) ){?>
					  <td><div>Temat wolny</div></td>
					<?php
				} 
				else if (($thesis->student_id == NULL && Auth::user()->thesis_id  == NULL && ($thesis->field_id != $field_id) ) ){?>
									  <td><div>Temat wolny</div></td>
									<?php
						} 
				else { ?>
					<td>Temat zarezerwowany</td>
		</tr>
		<?php 
		  } } 
		  
//-------------------------------- niezalogowany

		 else {
		  		
		  		if($thesis->student_id == NULL) {?>
		  			<td><div>Temat wolny</div></td>
		  <?php } else { ?>
		  			<td><div>Temat zarezerwowany</div></td>
		<?php } } }?>
		  
		@endforeach	
		
		</table>
	
	@endif
<?php //-------------------------- guzik akceptuj	 ?>
	<?php if(Auth::check() && Auth::user()->access == 2) { ?>
	<div align="right"><div class="btn btn-success accept">Akceptuj</div></div>
	<?php } ?>

<script>


	$( ".accept" ).click(function() {
		var button = this;

		$('.thesisForApprove:checked').each(function(){
			$.get('http://localhost:8000/theses/'+$(this).attr('value')+'/approve', function(data){
				$(button).remove();
			});
		});
		
 		window.location=window.location;
	});

	$( ".reserved").click(function() {
		var button = this;
		$.get('http://localhost:8000/theses/reserved/'+$(this).attr('ident')+'/student/'+$(this).attr('student'), function(data){});
		window.location=window.location;
	});

// 	$.get('http://localhost:8000/showThesis/' + $(this).attr('theses_id'), function(data){
// 		$('#thesis_details').html(data); 
// 	});
	
	
	$(".extendableText").hide();

	$('.showHide').on('click',function(button){

		var theDiv = $(button).find('.extendableText');
		console.log(theDiv);
		if( $(this).text() == 'Zwiń')  {
			$(this).parent().find('.extendableText').hide('slow');
			$(this).text('Rozwiń');
			$(this).removeClass('btn-danger').addClass('btn-success');
		}
		else{
			
			$(this).parent().find('.extendableText').show('slow');
			 
			 $(this).text('Zwiń').removeClass('btn-success').addClass('btn-danger');
		}
	});
			
</script>