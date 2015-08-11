<!--  ................ Nagłówek! Zawsze bedzie na kazdej stronie !................... -->


<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-theme.min.css">

<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="css.css">





<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    
       <section class="top-bar-section">
<!--..................... Naglowej strony glownej ........................ -->
	<div class="page-header" style="margin-top: 0px">
		<div class="row">
			<div class="col-md-9">
				<img alt="Bootstrap Image Preview" src="agh.jpg" />
			</div>
			<div class="col-md-3">
				<br>
				
				<?php if (Auth::check())
				{
				    
					echo "Jesteś zalogowany jako: ".'<b><font color="#0080FF">'.Auth::user()->username.'</font></b>';
					?>
					<a href="logout"><button type="button" class="btn btn-danger"><font color="black">Wyloguj się</font></button></a>
					<?php
				}
				else if(Request::url() != "http://localhost:8000/login"){ ?>
					<div align="center">
					<a href="login"><button type="button" class="btn btn-success"><font color="black">Zaloguj się</font></button></a>
					</div>
				<?php 
				}
				else if(Request::url() == "http://localhost:8000/login"){ ?>
					<div align="center">
					<a href="http://localhost:8000"><button type="button" class="btn btn-info"><font color="black">Strona główna</font></button></a>
					</div>
				<?php 
				}?>
				
				<!-- {{ link_to('/login', "Zaloguj się") }} -->
			</div>
		</div>
	</div>
  </section>
 
 </ul>
</nav>
