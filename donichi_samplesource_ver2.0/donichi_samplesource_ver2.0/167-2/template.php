<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('small-business.css'); ?>
	<style>
	body { margin: 0px; }
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top"role="navigation">
		<div class="container">
			<div class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">TopPage</a></li>
					<li><a href="#">Request</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
		</div>
		<div class="col-md-12">
			<?php echo $content; ?>
		</div>
	</div>
</body>
</html>