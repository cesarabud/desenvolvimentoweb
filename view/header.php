<!doctype html>
<html lang="pt-br" ng-app="shop">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		<meta name="author" content="Cesar Abud">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!-- Plugin jQuery owl-carousel2 -->
		<link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.theme.default.min.css">

		<!-- Para utilizar Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<!--    -->
		<link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
		<link rel="stylesheet" href="css/orlando.css">
		<link rel="stylesheet" href="css/orlando-mobile.css">
		
		<script	src="lib/angularjs/angular.min.js"></script>

		<title>Orlando City</title>

	</head>

	<body>
		
		<header>
			<!-- d-block = visível em todas as tela d-sm-none = visível apenas em telas xs -->
			<div id="menu-mobile-mask" class="d-block d-sm-none"></div>
			
			<div id="menu-mobile" class="d-block d-sm-none">
				
				<ul class="list-unstyled">
					<li><a href="videos">Videos</a></li>
					<li><a href="#">Tickets</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Schedule</a></li>
				</ul>
				
				<div class="bar-close">
					<button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
				</div>
				
			</div>

			<div class="container container-logo">
				<img id="logotipo" src="img/orlando-logo.png" alt="Logotipo">
			</div>
			
			<div class="header-black">
				
				<div class="container">
					
					<input type="search" id="input-search-mobile" class="d-block d-sm-none" placeholder="Search...">
					
					<button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
					<button id="btn-search" type="button"><i class="fa fa-search"></i></button>

					<ul class="float-right">
						<li class="club-01"><a href="#"></a></li>
						<li class="club-02"><a href="#"></a></li>
						<li class="club-03"><a href="#"></a></li>
						<li class="club-04"><a href="#"></a></li>
						<li class="club-05"><a href="#"></a></li>
						<li class="club-06"><a href="#"></a></li>
						<li class="club-07"><a href="#"></a></li>
						<li class="club-08"><a href="#"></a></li>
						<li class="club-09"><a href="#"></a></li>
						<li class="club-10"><a href="#"></a></li>
						<li class="club-11"><a href="#"></a></li>
						<li class="club-12"><a href="#"></a></li>
						<li class="club-13"><a href="#"></a></li>
						<li class="club-14"><a href="#"></a></li>
						<li class="club-15"><a href="#"></a></li>
						<li class="club-16"><a href="#"></a></li>
						<li class="club-17"><a href="#"></a></li>
						<li class="club-18"><a href="#"></a></li>
						<li class="club-19"><a href="#"></a></li>
						<li class="club-20"><a href="#"></a></li>
						<li class="club-21"><a href="#"></a></li>
						<li class="club-22"><a href="#"></a></li>
					</ul>

				</div>
			
			</div>
			
			<div class="container">

				<div class="row">
					
					<nav id="menu" class="float-right">
						
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="videos">Videos</a></li>
							<li><a href="#">Tickets</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Schedule</a></li>
							<li class="search">
								<div class="input-group mb-3">
									<input type="search" class="form-control" placeholder="Search ..." id="input-search">
									<div class="input-group-append">
										<button class="btn " type="button" id="button-addon2"><i class="fa fa-search"></i></button>
								  	</div> <!-- /input-group -->
								</div>
							</li>
						</ul>
						
					</nav>
				
				</div>

			</div>
			
		</header>
		
