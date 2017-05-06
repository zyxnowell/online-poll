<!DOCTYPE html>
<html>
<head>
	<title>Online Poll</title>

	<link rel="stylesheet/less" type="text/css" href="assets/css/darkly.variables.less"/>
	<link rel="stylesheet" type="text/css" href="assets/css/darkly.bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
	<script src="assets/js/app.js"></script>
</head>
<body ng-app="pollApp">
	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		      	</button>
		     	<a class="navbar-brand" href="#/"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
		    </div>
		   	<div class="collapse navbar-collapse" id="navbar-collapse">
		      	<ul class="nav navbar-nav">
		        	<li><a href="#create">Create Poll</a></li>
		        	<li><a href="#about">About</a></li>
		        	<li><a href="#contact">Contact</a></li>
		      	</ul>
			    <ul class="nav navbar-nav navbar-right">
			    	<form class="navbar-form navbar-left" role="search">
			        	<div class="form-group">
			          		<input type="text" class="form-control" maxlength="18" placeholder="Enter Poll Code">
			        	</div>
			        	<button type="submit" class="btn btn-success">Search</button>
			      	</form>
			    </ul> 
		    </div>
		</div>
	</nav>
	<div id="main">
		<div ng-view></div>
	</div>
</body>
</html>