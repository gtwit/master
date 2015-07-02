<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Optional theme -->
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/default.js"></script>
	<script type="text/javascript" src="js/bar.js"></script>
</head>
<body>

	<img src="img/bg_home2.jpg" id="bg">

	<div class="container-fluid" id="home1">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="header-stbi">
					<div class="media">
						<div class="media-left">
							<img class="media-object" src="img/gtwit.png" alt="logo" id="logo">
						</div>
						<div class="media-body">
							<h1 class="media-heading">gTweets</h1>
							<h2>Geolocation Tweets. <br>Tweets based on location.</h2>
						</div>
					</div>
					<div id="start">
						<label for="search_btn"><h3>Start your journey now</h3></label>
						<a href="#search" id="search_btn" type="button" class="btn btn-primary btn-lg btn-outline" aria-label="Left Align">
							<span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Start
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="search">
		<button type="button" class="close">X</button>
		<form action="{{URL::to('twitter')}}" method="get">
			<input type="search" id="query" name="query" placeholder="type keyword(s) here"
				autocomplete="off"/>
			<button type="submit" class="btn btn-primary btn-outline btn-lg" aria-label="Left Align">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find
			</button>
		</form>
	</div>

	<!-- modal trigger -->
	<button class="btn btn-success btn-outline btn-sm" id="info"  type="button" data-toggle="modal" data-target="#myModal">
		<span class="glyphicon glyphicon-info-sign"></span> Helps
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">gTweets helps</h4>
				</div>
				<div class="modal-body">
					<b>gTweets</b> is short for Geolocation Tweets. It shows you the spreading of tweets based on location it comes from.
					<hr>
					<b>How to use :</b>
					<ol>
						<li>Click <kbd>Start</kbd> button</li>
						<li>Type word(s) you are currious about</li>
						<li>Click <kbd>Find</kbd>. Wait the processes</li>
						<li>The result is number of tweets group by the location</li>
						<li>Click the location or number to show all the Tweets</li>
					</ol>
					</p>
					<hr>
					This web apps is developed to give broader view about everything based on location.
					Example: You find UGM, and this app will give you a view where the tweets about UGM come from.
					So that we know where people talks about UGM more dominant or vise versa.
				</div>
			</div>
		</div>
	</div>

</body>
</html>
