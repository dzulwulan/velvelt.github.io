<?php include 'header.php'; ?>
<div class="container-fluid" style="margin-top : 10%;">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="col shadow p-3 mb-4 bg-white rounded">
					<img src="D:\Semester 4\WEBPRO\TUBES\1.jpg" class="rounded-circle" id="dppropil">
					<?php $username = $_SESSION['username']; ?>
					<span id="user"><?php echo $username; ?></span>
				</div>
				<div class="col shadow p-3 mb-5 bg-white rounded">
					<ul class="list-unstyled profile">
						<li>
							
							<a href="<?php echo $this->config->base_url();?>CProfile/getProfile/<?php echo $username; ?>">My Profile</a>
						</li>
						<li>
							<a href="<?php echo $this->config->base_url();?>Cupdate">Update Profile</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col shadow p-3 pb-4 mb-5 bg-white rounded">
				<h1 id="judul">Update Profile :</h1>
				<form method="post" action="<?php echo $this->config->base_url();?>Cupdate/update/<?php echo $username; ?>">
					<div class="form-group">
						<input type="text" class="form-control" id="email" placeholder="Alamat" name="alamat">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" placeholder="No.Handphone" name="nohp">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="pwd" placeholder="Password" name="pass">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="copwd" placeholder="Konfirmasi Password" name="konpass">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
