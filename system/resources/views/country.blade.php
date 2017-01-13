<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Synergy Marketing - Landing Page</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/main.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto|Raleway" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

<!-- Wrapper for Slides -->
	<div class="carousel-inner" role="listbox">
        <div class="center" style="z-index: -100">
			  <div class="list-group">			  
			    <a href="{{ url('/hk') }}" class="list-group-item"><span class="flag-icon flag-icon-gr"></span>Hong Kong</a>
			    <a href="{{ url('/sg') }}" class="list-group-item"><span class="flag-icon flag-icon-gr flag-icon-squared"></span>Singapore</a>
			    <a href="{{ url('/id') }}" class="list-group-item">Indonesia</a>
			  </div>			
        </div>

		<div class="item active">
			<img src="{{ URL::to('/images/landing/background/bg1.jpg') }}" />

		</div>

		<div class="item">

			<img src="{{ URL::to('/images/landing/background/bg2.jpg') }}" />

		</div>

		<div class="item">
			<img src="{{ URL::to('/images/landing/background/bg3.jpg') }}" />

		</div>


	</div>
</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/landing/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/landing/jquery.nav.js"></script> 
	<script type="text/javascript" src="js/landing/owl.carousel.min.js"></script> 
	<script type="text/javascript" src="js/landing/wow.min.js"></script> 
    <script type="text/javascript" src="js/landing/main.js"></script>
    <script type="text/javascript" src="js/landing/canvas.js"></script> 


</body>

</html>
