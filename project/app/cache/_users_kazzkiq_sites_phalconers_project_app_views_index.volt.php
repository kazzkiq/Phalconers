<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<title>Jobs for PhalconPHP developers - Phalconers</title>
		
		<?php echo $this->assets->outputCss(); ?>
	</head>
	<body>
		<header class="app-header">
			<div class="container">
				<div class="logo-wrapper">
					<img src="img/logo-header.png" width="105">
				</div>
				<nav class="menu cf">
					<ul>
						<li><?php echo $this->tag->linkTo(array('index', 'Home')); ?></li>
						<li><?php echo $this->tag->linkTo(array('jobs', 'Jobs')); ?></li>
						<li><?php echo $this->tag->linkTo(array('developers', 'Developers')); ?></li>
						<li><?php echo $this->tag->linkTo(array('about', 'About')); ?></li>
					</ul>
					<div class="end">
						<?php echo $this->tag->linkTo(array('index', 'Sign up')); ?>
						<span>or</span>
						<?php echo $this->tag->linkTo(array('index', 'Log in')); ?>
					</div>
				</nav>
			</div>
		</header>
		
		<?php echo $this->getContent(); ?>
		
		<footer class="app-footer">
			<div class="container">
				<div class="logo-wrapper">
					<img src="img/logo-footer.png" width="105">
					<span>&copy; <?= date("Y") ?></span>
				</div>
			</div>
		</footer>
	</body>
</html>