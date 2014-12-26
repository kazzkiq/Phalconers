<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<title>Jobs for PhalconPHP developers - Phalconers</title>
		
		{{ assets.outputCss() }}
	</head>
	<body>
		<header class="app-header">
			<div class="container">
				<div class="logo-wrapper">
					<img src="img/logo-header.png" width="105">
				</div>
				<nav class="menu cf">
					<ul>
						<li>{{ link_to('index', 'Home') }}</li>
						<li>{{ link_to('jobs', 'Jobs') }}</li>
						<li>{{ link_to('developers', 'Developers') }}</li>
						<li>{{ link_to('about', 'About') }}</li>
					</ul>
					<div class="end">
						{{ link_to('index', 'Sign up') }}
						<span>or</span>
						{{ link_to('index', 'Log in') }}
					</div>
				</nav>
			</div>
		</header>
		
		{{ content() }}
		
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