<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>

<h4><div align="left">Poniżej znajdują się zapronowane przez Ciebie prace</div></h4>

<table style="width:800px">
		<tr><th style="width:50%">Temat</th>
			<th style="width:20%">Kierunek Studiów, Stopień</th>	
		    <th style="width:30%">Status</th>
    	</tr>	
		@foreach ($theses as $thesis)

		 <?php $lectorers = DB::table('users')->where('access','=',1)->where('id', '=', $thesis->lecturer_id)->get(); 
		 foreach ($lectorers as $lectorer)
		 {
		?>

    	<tr><td>  <div><span class="showHide btn btn-success" style="cursor:pointer; font-size: 10px">Rozwiń</span> {{ $thesis->subject }} <div class="extendableText">{{ $thesis->descr }}</div>
		</div>  </td>
		<td>
		{{ $thesis->spec }}, {{ $thesis->level }}
		</td>
		
		<?php 
		if(Auth::check() && Auth::user()->access == 1) {
			if(($thesis->approval == TRUE)){
			
				if(($thesis->student_id == NULL) ) { ?>
						<td>Temat wolny</td>
				<?php }
				else{ 
					$user = User::findOrFail($thesis->student_id);
					$student_name = $user->name;
					//$thesis->student_id
					?>
						<td>Temat zarezerwowany przez <?php echo $student_name ?> 
						<div class="btn btn-danger btn-xs remove" ident="{{ $thesis->student_id }}">Odrzuć</div>
						</td>
				<?php } }
			else {?>
				<td>Temat niezaakceptowany przez dziekana</td>
				</tr>
				<?php } } }
			?>
		@endforeach	
		
</table>
	
	
<script>

	$( ".remove" ).click(function() {
		var button = this;
		$.get('http://localhost:8000/theses/student/'+$(this).attr('ident')+'/remove', function(data){
			$(button).remove();
		}); window.location=window.location;
	});
		
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