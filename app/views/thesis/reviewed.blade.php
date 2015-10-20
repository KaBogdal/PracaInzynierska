<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>

<h4><div align="left">Poniżej znajdują się prace, dla którch jesteś recenzentem</div></h4>

<table style="width:800px">
		<tr><th style="width:50%">Temat</th>
			<th style="width:20%">Kierunek Studiów, Stopień</th>	
		    <th style="width:30%">Ocena</th>
    	</tr>	
		@foreach ($theses as $thesis)

		 <?php $lectorers = DB::table('users')->where('access','=',1)->where('id', '=', $thesis->reviewer)->get(); 
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
		</div>  </td>
		<?php } ?>
		<td>
		{{ $thesis->spec }}, {{ $thesis->level }}
		</td>
		
		<?php 
		if(Auth::check() && Auth::user()->access == 1) {
			if(($thesis->RNote == NULL)){ 
				if(($thesis->docum == NULL)) {?>	
				<td>Praca nie została dodana na serwer. </td> </tr>
				<?php } 
				else { ?>
				<td>Ocena nie wystawiona. Kliknij w temat aby ocenić. </td> </tr>
				
				<?php } } 
			else {?>
				<td>Praca oceniona: <?php echo $thesis->RNote; ?> </td> </tr>
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