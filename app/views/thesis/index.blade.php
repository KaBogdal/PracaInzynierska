<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>

<?php  if($approval) {?>
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

    	<tr><td>  <div><span class="showHide btn btn-success" style="cursor:pointer; font-size: 10px">Rozwiń</span> {{ $thesis->subject }} <div class="extendableText">{{ $thesis->descr }}</div>
		</div>  </td> <td><?php echo $lectorer->name; ?></td>
		
		<?php 
		if(Auth::check() && Auth::user()->access == 2) {
			if($thesis->approval) {
				echo "<td>Praca zaakceptowana</td>";
			}
		else {?>
		<td>
		<div class="btn btn-success btn-xs accept" ident="{{ $thesis->id }}">Akceptuj</div><div class="btn btn-danger btn-xs reject" >Odrzuć</div>
		</td>
		<?php 
		}
		}
		else if(Auth::check() && Auth::user()->access == 0) {
			if(($thesis->student_id == NULL) ) { ?>
					<td><div class="btn btn-success">Rezerwuj temat</div></td>
			<?php }
			else{ ?>
					<td>Temat zarezerwowany</td>
			<?php } }
		else {
			if(($thesis->student_id == NULL) ) { ?>
					<td>Temat wolny</td>
			<?php }
			else{ ?>
					<td>Temat zarezerwowany</td>
			<?php } }
		?>
		</tr>
		<?php 
		  } ?>
		@endforeach	
		
		</table>
	
	@endif

	
<script>
	$( ".accept" ).click(function() {
		var button = this;
		$.get('http://localhost:8000/theses/'+$(this).attr('ident')+'/approve', function(data){
			$(button).remove();
		});
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