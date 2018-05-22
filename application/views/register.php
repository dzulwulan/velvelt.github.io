<!-- Header -->
<?php include 'header.php'; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col" style="padding-top : 5% ;">
			<div class="shadow p-3 mb-5 bg-white rounded" style="margin : 2% 20% 2% 20% ; padding : 2% 3% 2% 3%">
					<form method="post" action="<?php echo $this->config->base_url();?>CRegister/summary_insert">
                        <div class="form-group">
							<label for="username">Username:</label>
							<input type="text" class="form-control" id="username" size="40" name="username" required>
						</div>
                        <div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email" name="email" size="40" required>
                        </div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="pwd" name="password" size="20">
                        </div>
                        <div class="form-group">
							<label for="address">Alamat:</label>
							<input type="text" class="form-control" id="adress" size="40" name="address" required>
                        </div>
                        <div class="form-group">
							<label for="nohp">Nomor Telepon:</label>
							<input type="text" class="form-control" id="number" name="number" size="40" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
					</form>
					<p><?php echo $this->session->flashdata('error'); ?></p>
			</div>

		</div>
	</div>

<!-- Footer -->
<?php include 'footer.php';?>
