<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<title>Jobs for PhalconPHP developers - Phalconers</title>
		
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		{{ assets.outputCss() }}
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
						<li>{{ link_to('index', 'Home') }}</li>
						<li>{{ link_to('jobs', 'Jobs') }}</li>
						<!-- <li>{{ link_to('developers', 'Developers') }}</li> -->
						<li>{{ link_to('about', 'About') }}</li>
					</ul>
					<div class="end">
						{{ link_to('signup', 'Sign up') }}
						<span>or</span>
						{{ link_to('login', 'Log in') }}
					</div>
				</nav>
			</div>
		</header>
		
		<main class="app-main">
		{{ content() }}
		</main>
		
		<footer class="app-footer">
			<div class="container cf">
				<div class="logo-wrapper">
					<img src="/Phalconers/project/img/logo-footer.png" width="105">
					<span>&copy; <?= date("Y") ?></span>
				</div>
				<ul class="menu cf">
					<li>{{ link_to('jobs', 'Find Jobs') }}</li>
					<li>{{ link_to('about', 'About Phalcones') }}</li>
					<li>{{ link_to('what-is-phalcon', 'What is Phalcon') }}</li>
					<li>{{ link_to('mailto:contact@phalconers.com', 'Contact') }}</li>
					<li>{{ link_to('legal', 'Terms of Use') }}</li>
				</ul>
			</div>
		</footer>
	</body>
</html>