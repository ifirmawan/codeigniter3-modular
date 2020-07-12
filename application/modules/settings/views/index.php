<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Settings</h4>
			</div>
		</div>
		<!-- .row -->
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs" id="settingsTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="home" aria-selected="true">
							Features
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="system-tab" data-toggle="tab" href="#system" role="tab" aria-controls="contact" aria-selected="false">
							System
						</a>
					</li>
				</ul>
				<div class="tab-content" id="settingsTabContent">
					<div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
						<?php include __DIR__.'/tabs/features.php'; ?>
					</div>
					<div class="tab-pane fade" id="system" role="tabpanel" aria-labelledby="system-tab">
						<?php include __DIR__.'/tabs/system.php'; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
	<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
