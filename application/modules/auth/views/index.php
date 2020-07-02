<div id="page-wrapper">
	<div class="container-fluid">
		<?= form_open('auth/login', ['class' => 'form-signin']) ?>
		<?= form_input($csrf) ?>
		<?= form_input($username) ?>
		<?= form_input($password) ?>
		<?= form_submit($submit) ?>
		<?= form_close() ?>
	</div>
</div>
