<?php include 'header.php'; ?>
	<div class="container-fluid" style="margin-top:10%;">
		<div class="container">
		<?php foreach ($profile as $key) {?>
			<div class="row">
				<div class="col-3">
					<div class="col shadow p-3 mb-4 bg-white rounded">
						<img src="D:\Semester 4\WEBPRO\TUBES\1.jpg" class="rounded-circle" id="dppropil">
						<span id="user"><?php echo $key['username']; ?></span>
					</div>
					<div class="col shadow p-3 mb-5 bg-white rounded">
						<ul class="list-unstyled profile">
							<li>
							<?php $username = $_SESSION['username']; ?>
								<a href="<?php echo $this->config->base_url();?>CProfile/getProfile/<?php echo $username; ?>">My Profile</a>
							</li>
							<li>
								<a href="<?php echo $this->config->base_url();?>Cupdate">Update Profile</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col shadow p-3 mb-5 bg-white rounded">
					<h1 id="judul">My Profile</h1>
					<form>
						<fieldset disabled>
							<div class="form-group">
								<label for="disabledTextInput">Nama :</label>
								<input type="text" id="disabledTextInput" class="form-control" value="<?php echo $key['username']; ?>">
							</div>
							<div class="form-group">
								<label for="disabledTextInput">Email :</label>
								<input type="text" id="disabledTextInput" class="form-control" value="<?php echo $key['emailuser']; ?>">
							</div>
							<div class="form-group">
								<label for="disabledTextInput">No Telepon :</label>
								<input type="text" id="disabledTextInput" class="form-control" value="<?php echo $key['notelpuser']; ?>">
							</div>
							<div class="form-group">
								<label for="disabledTextInput">Alamat :</label>
								<input type="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo $key['alamatuser']; ?>">
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
	<?php include 'footer.php';?>