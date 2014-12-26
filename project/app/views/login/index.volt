<div class="main-title">
	<div class="container">
		<h1>Access your account</h1>
	</div>
</div>
<div class="container shift-top app-login">
	<div class="l-block form-wrapper">
		<h2>Please login to post a job</h2>
		
		<form method="post" action="auth/try-login">
			<input type="text" name="email" placeholder="my@email.com" autofocus>
			<input type="password" name="password" placeholder="my-pasword-123">
		
			<button class="btn">Authenticate</button>
		</form>
	</div>
	<p class="l-tc">Forgot you password? {{ link_to('login/forgot-pass', 'Click here', 'class': 'df-link') }}.</p>
</div>