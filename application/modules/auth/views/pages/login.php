<?= form_open('auth/login') ?>
<?= form_input($csrf) ?>
<?= form_input($username) ?>
<?= form_input($password) ?>
<?= form_submit($submit) ?>
<?= form_close() ?>
