<!-- Header -->
<?php $this->load->view('header'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col " style="padding-top : 5% ;">
			<div class="shadow p-3 mb-5 bg-white rounded" style="margin : 2% 20% 2% 20% ; padding : 2% 3% 2% 3%">
				<form method="post" action="<?php echo $this->config->base_url();?>CLogin/login">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" id="username" size="40" name="username" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" name="password" size="20">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>

</div>

<!-- Footer -->
<?php  $this->load->view('footer'); ?>
