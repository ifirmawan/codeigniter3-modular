<div class="white-box analytics-info">
	<div class="row">
		<div class="col-12 col-md-6">
			<?= form_open('settings/whatsapp') ?>
			<fieldset>
				<legend>
					<input type="checkbox" name="status" value="1" <?= $whatsapp->status ?? '' ?>/>&nbsp;
					Whatsapp
				</legend>
				<div class="form-group">
					<label for="">Phone Number</label>
					<input type="text" name="phone_number" value="<?= $whatsapp->phone_number ?? '' ?>" class="form-control" />
				</div>
				<div class="form-group">
					<label for="">Token</label>
					<input type="text" name="token" value="<?= $whatsapp->token ?? '' ?>" class="form-control" />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block">Save</button>
					
				</div>
			</fieldset>
			<?= form_close() ?>
		</div>
		<div class="col-12 col-md-6">
			<?= form_open('settings/email') ?>
			<fieldset>
				<legend>
					Email
				</legend>
				<div class="clearfix">
					<input type="radio" name="" value="" class="pull-left"/>&nbsp;
					<h4 class="pull-left">Mailgun</h4>
				</div>
				<div class="form-group">
					<label for="">Email Address</label>
					<input type="text" name="mailgun[email_address]" value="<?= $mailgun->email_address ?? '' ?>" class="form-control" />
				</div>
				<div class="form-group">
					<label for="">Domain</label>
					<input type="text" name="mailgun[domain_name]" value="<?= $mailgun->domain_name ?? '' ?>" class="form-control" />
				</div>
				<div class="form-group">
					<label for="">API KEY</label>
					<input type="text" name="mailgun[api_key]" value="<?= $mailgun->api_key ?? '' ?>" class="form-control" />
				</div>
				<div class="clearfix">
					<input type="radio" name="sendgrid[status]" value="1" class="pull-left"/>&nbsp;
					<h4 class="pull-left">SendGrid</h4>
				</div>
				<div class="form-group">
					<label for="">Email Address</label>
					<input type="text" name="sendgrid[email_address]" value="<?= $sendgrid->email_address ?? '' ?>" class="form-control" />
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" name="sendgrid[username]" value="<?= $sendgrid->username ?? '' ?>" class="form-control" />
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name="sendgrid[password]" value="<?= $sendgrid->password ?? '' ?>" class="form-control" />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block">Save</button>
				</div>
			</fieldset>
			<?= form_close() ?>
		</div>
	</div>
</div>
