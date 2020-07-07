<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
	<div class="container">
		<div class="card login-card">
			<div class="row no-gutters">
				<div class="col-md-5">
					<img src="<?= base_url() ?>assets/images/login.jpg" alt="login" class="login-card-img">
				</div>
				<div class="col-md-7">
					<div class="card-body">
						<div class="brand-wrapper">
							<img src="<?= base_url() ?>assets/images/logo.png" alt="logo" class="logo">
						</div>
						<p class="login-card-description">Sign into your account</p>
						<?= form_open('auth/login', ['class' => 'form-signin']) ?>
						<?= form_input($csrf) ?>
						<div class="form-group">
							<label for="email" class="sr-only">Username</label>
							<?= form_input($username) ?>
						</div>
						<div class="form-group mb-4">
							<label for="password" class="sr-only">Password</label>
							<?= form_input($password) ?>
						</div>
						<?= form_submit($submit) ?>
						<?= form_close() ?>
						<!--
						<a href="#!" class="forgot-password-link">
						Forgot password?
					</a>
					<p class="login-card-footer-text">
					Don't have an account? <a href="#!" class="text-reset">Register here</a>
				</p>
				<nav class="login-card-footer-nav">
				<a href="#!">Terms of use.</a>
				<a href="#!">Privacy policy</a>
			</nav> -->
		</div>
	</div>
</div>
</div>
</div>
</main>
