<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Whatsapp</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="#">Dashboard</a></li>
					<li class="active">Whatsapp Page</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="white-box analytics-info">
					<div class="row">
						<div class="col-6">

						</div>
						<div class="col-6 text-right">
							<a href="<?= site_url('whatsapp/create') ?>" class="btn btn-primary">Add New Whatsapp</a>
						</div>
					</div>
					<hr/>
					<div class="table-responsive">
						<table class="table table-bordered" id="datatables">
							<thead>
								<tr>
									<th>No</th>
									<th>Number</th>
									<th>Messages left</th>
									<th>Next Billing</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($whatsapps as $key => $value) { ?>
									<tr>
										<td><?= intval($key) + 1 ?></td>
										<td><?= $value->whatsapp_number ?></td>
										<td><?= $value->messages_left ?></td>
										<td><?= $value->duedate ?></td>
										<td><?= ($value->connected)? 'Connected' : 'Pending' ?></td>
										<td>
											<a href="<?= site_url('whatsapp/edit/'.$value->id) ?>" class="btn btn-warning">
												Edit
											</a>
											<?php if(!$value->connected):  ?>
												<a href="#modalQR" class="btn btn-primary" data-toggle="modal">
													Scan QR
												</a>
											<?php endif; ?>
											<a href="<?= site_url('whatsapp/show/'.$value->id) ?>" class="btn btn-info">
												View
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
	<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>

<div class="modal fade" id="modalQR" tabindex="-1" role="dialog" aria-labelledby="modalQRLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalQRLabel">Scan QR</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe src="https://console.wablas.com/generate/index.php?token=3j0uMedrl3WezdV6IQDNspWQYjUpTvSojCLnCwRT6nseQK1GMtSRt0lA1xmWgaIt&url=aHR0cHM6Ly9jb25zb2xlLndhYmxhcy5jb20=" title="W3Schools Free Online Web Tutorials" height="500" width="100%" >
				</iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
			</div>
		</div>
	</div>
</div>
