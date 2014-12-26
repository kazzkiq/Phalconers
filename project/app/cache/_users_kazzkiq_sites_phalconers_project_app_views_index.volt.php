<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<title>Jobs for PhalconPHP developers - Phalconers</title>
		
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<?php echo $this->assets->outputCss(); ?>
	</head>
	<body class="canvas">
		<header class="app-header">
			<div class="container l-box">
				<div class="logo-wrapper">
					<a href="/Phalconers/project/">
						<img src="/Phalconers/project/img/logo-header.png" width="105">
					</a>
				</div>
				<nav class="menu cf">
					<ul>
						<li><?php echo $this->tag->linkTo(array('index', 'Home')); ?></li>
						<li><?php echo $this->tag->linkTo(array('jobs', 'Jobs')); ?></li>
						<!-- <li><?php echo $this->tag->linkTo(array('developers', 'Developers')); ?></li> -->
						<li><?php echo $this->tag->linkTo(array('about', 'About')); ?></li>
					</ul>
					<div class="end">
						<?php echo $this->tag->linkTo(array('signup', 'Sign up')); ?>
						<span>or</span>
						<?php echo $this->tag->linkTo(array('login', 'Log in')); ?>
					</div>
				</nav>
			</div>
		</header>
		
		<main class="app-main">
		<?php echo $this->getContent(); ?>
		</main>
		
		<footer class="app-footer">
			<div class="container cf">
				<div class="logo-wrapper">
					<img src="/Phalconers/project/img/logo-footer.png" width="105">
					<span>&copy; <?= date("Y") ?></span>
				</div>
				<ul class="menu cf">
					<li><?php echo $this->tag->linkTo(array('jobs', 'Find Jobs')); ?></li>
					<li><?php echo $this->tag->linkTo(array('about', 'About Phalcones')); ?></li>
					<li><?php echo $this->tag->linkTo(array('what-is-phalcon', 'What is Phalcon')); ?></li>
					<li><?php echo $this->tag->linkTo(array('mailto:contact@phalconers.com', 'Contact')); ?></li>
					<li><?php echo $this->tag->linkTo(array('legal', 'Terms of Use')); ?></li>
				</ul>
			</div>
		</footer>
	</body>
</html>