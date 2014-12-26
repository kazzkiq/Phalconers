<div class="main-title">
	<div class="container">
		<h1>Create a new account</h1>
	</div>
</div>

<p class="l-tc">Already have an account? {{ link_to('login', 'Login here', 'class': 'df-link') }}.</p>
	
<div class="container shift-top app-signup">
	<div class="l-block form-wrapper">
		<h2>Fill the form bellow:</h2>
		<h3>Personal information</h3>
		
		<div class="pure-g">
			<div class="pure-u-1 pure-u-md-1-2">
				<input type="text" name="name" placeholder="Your name" autofocus>
			</div>
			<div class="pure-u-1 pure-u-md-1-2">
				<input type="text" name="email" placeholder="Your e-mail">
			</div>
		</div>
		<div class="pure-g">
			<div class="pure-u-1 pure-u-md-1-2">
				<input type="text" name="password" placeholder="Your password" autofocus>
			</div>
			<div class="pure-u-1 pure-u-md-1-2">
				<input type="password" name="password-again" placeholder="Repeat your password">
			</div>
		</div>
		
		<h3>Company information</h3>
		<div class="pure-g">
			<div class="pure-u-1 pure-u-md-1-2">
				<input type="text" name="name" placeholder="Company name" autofocus>
			</div>
			<div class="pure-u-1 pure-u-md-1-2">
				<input type="text" name="email" placeholder="Company website">
			</div>
		</div>
		<input type="text" name="email" placeholder="Company tagline">
		
		
		
		
		<button class="btn">Create new account</button>
	</div>
</div>