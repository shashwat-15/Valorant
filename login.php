<link rel="stylesheet" href="css/login.css">
<div class="login-container" id="login-container" style="font-size:14px;">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span class="login-span">or use your email for registration</span>
			<input class="login-input" type="text" placeholder="Name" />
			<input class="login-input" type="email" placeholder="Email" />
			<input class="login-input" type="password" placeholder="Password" />
			<input class="login-input" type="password" placeholder="Confirm Password" />
			<button class="login-btn">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span class="login-span">or use your account</span>
			<input class="login-input" type="email" placeholder="Email" />
			<input class="login-input" type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button class="login-btn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost login-btn" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost login-btn" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="js/login.js"></script>