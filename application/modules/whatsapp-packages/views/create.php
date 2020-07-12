<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Whatsapp Packages</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Whatsapp Packages</a></li>
					<li class="active">Create Whatsapp Packages</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-8">
				<div class="white-box analytics-info">
					<?= form_open('whatsapp-packages/index/store') ?>
					<div class="form-group">
						<label for="">Package Name</label>
						<input type="text" name="name" class="form-control" />
					</div>
					<div class="form-group">
						<label for="">Package Price</label>
						<input type="text" name="price" class="form-control" />
					</div>
					<div class="form-group">
						<label for="">Messages Quota</label>
						<input type="number" name="quota" class="form-control" />
					</div>
					<div class="form-group">
						<label for="summernote">Package Description</label>
						<textarea name="description" rows="3" id="summernote"></textarea>
					</div>
					<div class="form-group">
					    <label for="">Package Expired in</label>
					    <div class="row">
					        <div class="col-md-6 col-12">
					            <input type="text" name="expired_in" class="form-control" value="1" />
					        </div>
					        <div class="col-md-6 col-12">
					            <select class="form-control" name="expired_in_unit">
					                <option value="d">Day(s)</option>
					                <option value="m">Month(s)</option>
					                <option value="y">Year(s)</option>
					            </select>
					        </div>
					    </div>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
