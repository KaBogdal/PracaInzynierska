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
					<li><span><i class="icon-folder-open"></i> Studia I-wszego stopnia</span>
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
					<li><span><i class="icon-folder-open"></i> Studia II-giego stopnia</span>
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
									<p>
									 <div class="row" align="center">
										<h2>
											Serdecznie witamy! <br>
											<small>Na naszej stronie znajdą Państwo prace dyplomowe
												studentów wydziału Geologii Geofizyki i Ochrony Środowiska
												Akademii Górniczo- Hutniczej.</small>
										</h2>
									</div>
									
									<dl>
										<dt>Description lists</dt>
										<dd>A description list is perfect for defining terms.</dd>
										<dt>Euismod</dt>
										<dd>Vestibulum id ligula porta felis euismod semper eget
											lacinia odio sem nec elit.</dd>
									</dl>
									</p>
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
						<?php if ($accesses == 0){?>
						 Jestem zalogowany jako student
						<?php }?>
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
												<a href="#panel-527248" data-toggle="tab">Section 2</a>
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
													
														<form role="form" action='{{ url("/theses/create") }}' method="post">
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
															<button type="submit" class="btn btn-success">
																Wyślij
															</button>
														</form>
													</div>
												</div>
											</div>		
										</p>
					
										
	<!-- ............................... FFFFFFFFFFFFFFFFFFFFFFFFF ............................... -->													
													
											</div>
											<div class="tab-pane" id="panel-527248">
												<p>
													Howdy, I'm in Section 2.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
						 
						<?php }?>
<!--.................................   Zalogowany jako dziekan    ....................................-->
						<?php if ($accesses == 2){?>
						 Jestem zalogowany jako dziekan
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

	$('.thesislink').click(function(){
		$.get('http://localhost:8000/theses/'+$(this).attr('year')+'/'+$(this).attr('spec')+'/'+$(this).attr('lev'), function(data){
			$('#panel-2').html(data); 
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
    
});
</script>

