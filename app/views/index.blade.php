<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css.css">



<div class="container-fluid">

	<!--..................... Naglowej strony glownej ........................-->
	<div class="page-header" style="margin-top: 0px">
		<div class="row">
			<div class="col-md-10">
				<img alt="Bootstrap Image Preview" src="agh.jpg" />
			</div>
			<div class="col-md-2">
				<br>
				<button type="button" class="btn btn-success">Zaloguj się</button>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">


			<!--.....................Drzewo do wyboru kierunku studiow/ prac ........................-->
			<div class="tree well">
				<ul>
					<!--..................... Drzewo studiow Iwszego stopnia ........................-->
					<li><span><i class="icon-folder-open"></i> Studia I-wszego stopnia</span>
						<ul>
							<li><span><i class="icon-minus-sign"></i>2015/2016</span>
								<ul>
									<li><span><i class="icon-leaf"><a href=""></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Ochrona Środowiska</a></span></li>
								</ul></li>
							<li><span><i class="icon-minus-sign"></i>2014/2015</span>
								<ul>
									<li><span><i class="icon-leaf"><a href=""></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Ochrona Środowiska</a></span></li>
							</ul></li>
							
						</ul></li>
					<!--..................... Drzewo studiow IIgiego stopnia ........................-->
					<li><span><i class="icon-folder-open"></i> Studia II-giego stopnia</span>
						<ul>
							<li><span><i class="icon-minus-sign"></i>2015/2016</span>
							<ul>
									<li><span><i class="icon-leaf"><a href=""></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Ochrona Środowiska</a></span></li>
								</ul></li>
							<li><span><i class="icon-minus-sign"></i>2014/2015</span>
								<ul>
									<li><span><i class="icon-leaf"><a href=""></i>Informatyka Stosowana</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Geofizyka</a></span></li>
									<li><span><i class="icon-leaf"><a href=""></i>Ochrona Środowiska</a></span></li>
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
							</ul>


							<div class="tab-content">
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
								<div class="tab-pane" id="panel-2">
									<p>
									
										Wybierz kierunek z panelu znajdującego się po lewej stronie.
									
									</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>




<script>
$(function () {
	
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

