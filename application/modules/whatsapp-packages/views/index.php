<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Whatsapp Packages</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="#">Dashboard</a></li>
					<li class="active">Whatsapp Packages</li>
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
							<a href="<?= site_url('whatsapp-packages/index/create') ?>" class="btn btn-primary">Add New Whatsapp</a>
						</div>
					</div>
					<hr/>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Price</th>
									<th>Quota</th>
									<th>Expired In</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($packages as $key => $value) { ?>
									<tr>
										<td><?= intval($key) + 1 ?></td>
										<td><?= $value->name ?? '' ?></td>
										<td><?= $value->price ?? '' ?></td>
										<td><?= $value->quota ?? '' ?></td>
										<td>
											<?php
												$expired_in = $value->expired_in ?? null;
												if ($expired_in) {
													$expired_in_unit = $value->expired_in_unit ?? '';
													echo expired_in($expired_in, $expired_in_unit);
												}
											?>
										</td>
										<td>
											<a href="<?= site_url('whatsapp-packages/index/edit/'.$value->id) ?>" >
												Edit
											</a>
											<a href="<?= site_url('whatsapp-packages/index/show/'.$value->id) ?>" >
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
</div>
