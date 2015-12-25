<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-theme.min.css">

<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="css.css">


@extends('layout.default')
@section('content')

<div class="container-fluid">



<!--.....................Drzewo do wyboru kierunku studiow/ prac ........................-->
<div class="row">
		<div class="col-md-3"> 
			<div class="tree well">
				<ul>
					<!--..................... Drzewo studiow Iwszego stopnia ........................-->
					<li><span><i class="icon-folder-open"></i> Studia I-ego stopnia</span>
						<ul>
							<li><span><i class="icon-minus-sign"></i>2015/2016</span>
								<ul>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="inf" year="2015" lev = "1" href="#panel-2" data-toggle="tab"></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="geo" year="2015" lev = "1" href="#panel-2" data-toggle="tab" href=""></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="os" year="2015" lev = "1" href="#panel-2" data-toggle="tab"></i>Ochrona Środowiska</a></span></li>
								</ul></li>
							<li><span><i class="icon-minus-sign"></i>2014/2015</span>
								<ul>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="inf" year="2014" lev = "1" href="#panel-2" data-toggle="tab"></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="geo" year="2014" lev = "1" href="#panel-2" data-toggle="tab"></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="os" year="2014" lev = "1" href="#panel-2" data-toggle="tab"></i>Ochrona Środowiska</a></span></li>
							</ul></li>
							
						</ul></li>
					<!--..................... Drzewo studiow IIgiego stopnia ........................-->
					<li><span><i class="icon-folder-open"></i> Studia II-ego stopnia</span>
						<ul>
							<li><span><i class="icon-minus-sign"></i>2015/2016</span>
							<ul>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="inf" year="2015" lev="2" href="#panel-2" data-toggle="tab"></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="geo" year="2015" lev="2" href="#panel-2" data-toggle="tab"></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="os" year="2015" lev="2" href="#panel-2" data-toggle="tab"></i>Ochrona Środowiska</a></span></li>
								</ul></li>
							<li><span><i class="icon-minus-sign"></i>2014/2015</span>
								<ul>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="inf" year="2014" lev="2" href="#panel-2" data-toggle="tab"></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="geo" year="2014" lev="2" href="#panel-2" data-toggle="tab"></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a class="thesislink" spec="os" year="2014" lev="2" href="#panel-2" data-toggle="tab"></i>Ochrona Środowiska</a></span></li>
							</ul></li>
						</ul></li>
				</ul>
			</div>
		</div>

		<!--..................... Opis na stronie glownej publicznej ........................-->

		<div class="col-md-9">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="tabbable" id="tabs-617165">


							<ul class="nav nav-tabs">
								<li class="active"><a href="#panel-1" data-toggle="tab">Strona główna</a></li>
								<li><a href="#panel-2" data-toggle="tab">Prace dyplomowe</a></li>
								<?php if (Auth::check()) { ?>
									<li><a href="#panel-3" data-toggle="tab">Konto użytkownika</a></li>
								<?php }?>
									
							</ul>


							<div class="tab-content">
			<!--..................... Zakladka strony głownej ........................-->				
								<div class="tab-pane active" id="panel-1">
					
					<br>				
<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<h3>
				Aplikacja do rejestracji prac dyplomowych wGGiOŚ
			</h3>
			<div class="row">
			<br>
				<div class="col-md-9">
					<p>
					Serdecznie witamy w serwisie prac dyplomowych wydziału Geologii, Geofizyki i Ochrony Środowiska.
					Jest on przeznaczony do zarządzania tematami prac inżynierskich oraz magisterskich przez pracowników wydziału oraz 
					pozwala studentom rezerwować temat i dodać gotową pracę na portal.
					Ponadto aplikacja umożliwia niezalogowanemu użytkownikowi na przegląd prac studentów wszystkich kierunków wydziału.
					
					</p>
				</div>
				<div class="col-md-3">
					<img alt="A0" height="100" width="150" src="A0.jpg" />
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<table class="table">
				<thead>
					<tr>
						<th>
							Na skróty
						</th>
					</tr>
				</thead>
			<tbody>
				<tr>
					<td>
						<a href="http://www.agh.edu.pl/">AGH</a>
					</td>
				</tr>
				<tr class="active">
					<td>
						<a href="http://www.wggios.agh.edu.pl/">wGGiOŚ</a>
					</td>
				</tr>
				<tr class="success">
					<td>
						<a href="https://dziekanat.agh.edu.pl/">Wirtualna Uczelnia</a>
					</td>
				</tr>
				<tr class="warning">
					<td>
						<a href="http://sprawdz.plan.agh.edu.pl/">UniTime</a>
					</td>
				</tr>
				<tr class="danger">
					<td>
						<a href="http://syllabuskrk.agh.edu.pl/2015-2016/en/treasuries/academy_units/offer">Syllabus</a>
					</td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>
									
									
									
									
									
									
									
								</div>
			<!--..................... Zakladka dla drzewa rozwijanego ........................-->
								<div class="tab-pane" id="panel-2">
									
									<p>
										Wybierz kierunek z panelu znajdującego się po lewej stronie.
									</p>

								</div>
			<!--..................... Opis do strony publicznej ........................-->
								
								
								<div class="tab-pane" id="panel-3">
						
									<?php
									if(Auth::check()){
									//$students = DB::table('users')->where('access','=',0)->get();
									$accesses = Auth::user()->access;
									//$names = Auth::user()->name;
									?>
														
<!--.................................   Zalogowany jako student    ......................................-->
						<?php 
						
						if ($accesses == 0){
						
							if (Auth::user()->thesis_id == NULL){
							?>
							<h3>Twoja praca dyplomowa </h3>
							<br>Nie masz jeszcze wybranego tematu pracy. Idz do panelu z lewej strony, aby wybrać temat.
						<?php } 
						else {
							
							$thesis = Thesis::findOrFail(Auth::user()->thesis_id);
								
							//$subj = $thesis->subject;
							//$desc = $thesis->descr;
							$lect = $thesis->lecturer_id;
							$lect_name = User::findOrFail($lect)->name;
							//$rec = User::findOrFail($thesis->reviewer)->name?>
							<h3>Twoja praca dyplomowa </h3>
							<?php if($thesis->docum == 1){ ?>
						     	<br><br><font size="3"><div align="left">Temat Twojej pracy: <div><span class="showHide btn btn-success" style="cursor:pointer; font-size: 10px">Rozwiń</span>
						     	<a href="/showThesis_{{$thesis->id}}" > {{ $thesis->subject }} </a> 
						     	<div class="extendableText">{{ $thesis->descr }}</div>
						     	<font size="3"><div align="left">Twój promotor: </font><?php echo $lect_name ?> </div>
			<?php /*	   		     
				   		     	<font size="3"><div align="left">Twój recenzent: </font><?php echo $rec ?> </div>  	
			*/ ?>					
								<?php }
								else{ ?>
							<br><br><font size="3"><div align="left">Temat Twojej pracy: </div></font><span class="showHide btn btn-success" style="cursor:pointer; font-size: 10px">Rozwiń</span> {{ $thesis->subject }} <div class="extendableText">{{ $thesis->descr }}</div>
							<font size="3"><div align="left">Twój promotor: </font><?php echo $lect_name ?></div>
		  	<?php /*				
		  					<font size="3"><div align="left">Twój recenzent: </font> <?php echo $rec ?> </div>
			*/?>
								<?php } ?>
	<!--...........    Dodawanie pracy na strone główną    ....................................-->
						<br><br>
							<?php if( $thesis->fileName == NULL){ ?>
								   {{ Form::open(['role' => 'form', 'url' => '/theses/addThesis', 'files'=>true]) }}
								            <div class="control-group">
			          							<div class="controls">
						          					{{ Form::file('image') }}
							  						<p class="errors">{{$errors->first('image')}}</p>
											
										        </div>
									        </div>
							    <div class='form-group' id="success">
							        {{ Form::submit('Dodaj pracę', ['class' => 'btn btn-success']) }}
							    </div>
						 	<font size="1"><div align="left">Uwaga! Po naciśnięciu przycisku: "Wyślij" nie będziesz miał
										możliwości cofnięcia akcji dodawania pracy- pojawi się ona automatycznie na stronie głównej!</div></font>
						    {{ Form::close() }}
						   <?php  } 
						    else {?>
						    	<font size="3"><div align="left">Twoja praca została już wrzucona na serwer.</div></font>
										
							<?php } } }?>


	
<!--.................................   Zalogowany jako wykładowca    ....................................-->
						<?php if ($accesses == 1){?>
					
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
								<br><br>
									<div class="tabbable" id="tabs-227715">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#panel-adding" data-toggle="tab">Dodaj nowy temat pracy</a>
											</li>
											<li>
												<?php
												$lect_id = Auth::user()->id;
												?>
												
												<a href="#panel-lectorer-thesises" id="my-theses" data-toggle="tab" lecturer = "{{$lect_id}}" >Twoje prace</a>
											</li>
											<li>
												<a href="#panel-reviewer-thesises" id="review-theses" data-toggle="tab" reviewer = "{{$lect_id}}" >Prace recenzowane</a>
											</li>
										</ul>
										<div class="tab-content">
<!-- ............................... Dodawanie pracy inżynierskiej ............................... -->
									<div class="tab-pane active" id="panel-adding">
										<p>
											<h4>Dodawanie nowego tematu pracy inżynierskiej</h4>
													
											<div class="container-fluid">
												<div class="row">
													<div class="col-md-12">
													
														<form role="form" id="form_to_check" action='{{ url("/theses/create") }}' method="post">
															<div class="form-group" >
																<label for="subject">
																	Temat pracy
																</label>
																<input type="text" class="form-control" name="subject" />
															</div>
															<div class="form-group">
																<label for="description">
																	Opis zagadnienia
																</label>
																<textarea rows="4" cols="50" class="form-control" name="description">
																</textarea>
																<!-- <input type="text" class="form-control" id="description" /> -->
															</div>
															<div class="radio">
															
																<b>Poziom studiów</b>
																<br>
																	<input type="radio" name="level" value="1"/>
																	Studia inżynierskie												
																<br><input type="radio" name="level" value="2"/>
																	Studia magisterskie
															</div> 
															<div class="radio">
																<b>Kierunek studiów</b>
																<br>
																<input type="radio" name="spec" value="inf"/>
																	Informatyka Stosowana
																<br><input type="radio" name="spec" value="geo"/>
																	Geofizyka
																<br><input type="radio" name="spec" value="os"/>
																	Ochrona Środowiska	
															</div>
															<button type="submit" class="btn btn-success" id="submit">
																Wyślij
															</button>
														</form>
													</div>
												</div>
											</div>		
										</p>
					
										
	<!-- ...............................  Zaproponowane prace przez wykladowce  ............................... -->													
													
											</div>
											<div class="tab-pane" id="panel-lectorer-thesises">
												
											</div>
											<div class="tab-pane" id="panel-reviewer-thesises">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						 
						<?php }?>
<!--.................................   Zalogowany jako dziekan    ....................................-->
						<?php if ($accesses == 2){?>
						
						
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
								<br><br>
									<div class="tabbable" id="tabs-203483">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#panel-thesises" data-toggle="tab">Prace do zaakceptowania</a>
											</li>
											<li>
												<a href="#panel-450881" data-toggle="tab">Section2</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="panel-thesises">
												
											</div>
											<div class="tab-pane" id="panel-450881">
												<p>
													Howdy, I'm in Section 2.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
		
						
						<?php } }?>			
					</div>	
								
			<!--                                    Koniec bloku                          -->					
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@stop




<script>

$(function () {
	
    // When your submit button is clicked
    $("#form_to_check").submit(function (e) {
        // If it is not checked, prevent the default behavior (your submit)
        if (!$('input[name="level"]').is(':checked') || !$('input[name="spec"]').is(':checked') ) {
            alert("Upewnij się, że wybrałeś poziom i kierunek studiów!");
            e.preventDefault();
        	
        }
    });
});




$(function () {

	$.get('http://localhost:8000/theses/waitingForApproval', function(data){
		$('#panel-thesises').html(data); 
	});

	$('#my-theses').click(function(){
		$.get('http://localhost:8000/theses/allThesesList/'+$(this).attr('lecturer'), function(data){
			$('#panel-lectorer-thesises').html(data); 
		});
	});

	$('#review-theses').click(function(){
		$.get('http://localhost:8000/theses/allReviewedList/'+$(this).attr('reviewer'), function(data){
			$('#panel-reviewer-thesises').html(data); 
		});
	});

	$('.thesislink').click(function(){
		
		var Title = $(this).text();
		$.get('http://localhost:8000/theses/'+$(this).attr('year')+'/'+$(this).attr('spec')+'/'+$(this).attr('lev'), function(data){
			$('#panel-2').html(data); 
			$('#field').html(Title);
		});
	});
	

    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Rozwiń').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Zwiń').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });

    $('.tree li.parent_li > span').parent().find(' > ul > li').hide(); //domyslne ukrycie
    
	
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
});
</script>

