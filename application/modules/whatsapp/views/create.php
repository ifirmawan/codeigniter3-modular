<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Whatsapp</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
					<li> <a href="<?= site_url('whatsapp') ?>">Whatsapp</a></li>
					<li class="active">Create Whatsapp Page</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="white-box analytics-info">
					<?= form_open('whatsapp/store') ?>
					<div class="form-group">
						<label for="inputUsername">User Email</label>
						<select class="form-control" name="user_id" id="select2">
							<option value="">Select User</option>
							<?php if ($users): ?>
								<?php foreach ($users as $key => $user) { ?>
									<option value="<?= $user->id ?>"><?= $user->email ?></option>
								<?php } ?>
							<?php endif; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="inputPackage">Whatsapp Package</label>
						<select name="package_id" id="inputPackage" class="form-control">
							<option value="">Select Package</option>
							<?php foreach ($packages as $key => $option) { ?>
								<option value="<?= $option->id ?>"><?= $option->name ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="inputPhone">Phone Number</label>
						<input type="text" name="whatsapp_number" class="form-control" id="inputPhone" />
					</div>
					<div class="form-group">
						<label for="inputToken">Token</label>
						<input type="text" name="whatsapp_token" class="form-control" id="inputToken"/>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
					<?= form_close() ?>

				</div>
			</div>
		</div>
	</div>
</div>
