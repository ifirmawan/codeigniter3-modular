<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Profile page</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="#">Dashboard</a></li>
					<li class="active">Profile Page</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		<!-- .row -->
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="white-box">
					<div class="user-bg">
						<div class="overlay-box">
							<div class="user-content">
								<a href="javascript:void(0)">
									<img src="<?= base_url() ?>assets/plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img">
								</a>
								<h4 class="text-white"><?= $profile->first_name ?? '' ?></h4>
								<h5 class="text-white">
									<a href="javascript:void(0)">
										<?= $profile->email ?? '' ?>
									</a>
								</h5>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="white-box">
					<form class="form-horizontal form-material">
						<div class="form-group">
							<label class="col-md-12">Full Name</label>
							<div class="col-md-12">
								<input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" value="<?= $profile->first_name ?? '' ?><?= $profile->last_name ?? '' ?>" />
							</div>
						</div>
						<div class="form-group">
							<label for="example-email" class="col-md-12">Email</label>
							<div class="col-md-12">
								<input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email" value="<?= $profile->email ?? '' ?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Phone No</label>
							<div class="col-md-12">
								<input type="text" placeholder="123 456 7890" class="form-control form-control-line" value="<?= $profile->mobile ?? '' ?>" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<button class="btn btn-success">Update Profile</button>
								<a href="<?= site_url('auth/logout') ?>" class="btn btn-danger" onclick="return (confirm('Are you sure?'))">Logout</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
	<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- /#page-wrapper -->
