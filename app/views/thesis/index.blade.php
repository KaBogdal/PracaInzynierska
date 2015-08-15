<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>



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
		</div>  </td> <td><?php echo $lectorer->name; ?></td> <td></td> </tr>
    	
		<?php 
		  } ?>
		@endforeach	
		
		</table>
		
		
	@endif
	
<script>
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