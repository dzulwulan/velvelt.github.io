<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Welcome to VelVet.com </title>
	<link rel="shortcut icon" href="<?php echo base_url();?>/Welcome to Otong.com_files/logo.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Home CSS OUT -->
	<link rel="stylesheet" href="<?php echo base_url();?>/home.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/footer.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/katalog.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/detail.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/update.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/profile.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/promo.css">
	<script src="<?php echo base_url();?>/promo.js"></script>
</head>

<body>


	<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
		<!-- Navbar content -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
		aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav mr-auto mt-2 mt-md-0">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $this->config->base_url();?>">Velvet.Com</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $this->config->base_url();?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $this->config->base_url(); ?>CKatalog/show">Katalog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $this->config->base_url(); ?>Cpromo">Promo</a>
				</li>
			</ul>
			<ul class="nav navbar-nav">
				<?php 
      if(isset($_SESSION['username'])){ 
        $username = $_SESSION['username']; ?>
				<a href="<?php echo $this->config->base_url(); ?>Ccart/showtransaksi/<?php echo $username; ?>" >
					<span class="fa fa-cart-plus" style="width:30px; height:30px; margin:0 5px;"></span>	
					</a>
				<!-- DROPDOWN -->
				<div class="dropdown">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						<?php echo $username; ?>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo $this->config->base_url();?>CProfile/getProfile/<?php echo $username; ?>">My Profile</a>
						<a class="dropdown-item" href="<?php echo $this->config->base_url();?>CUpdate">Update Profile</a>
					</div>
				</div>
				<!-- END DROPDOWN -->
				<a class="nav-link" href="<?php echo $this->config->base_url();?>CLogin/logout">logout</a>
				<?php } else { ?>
				<a class="nav-link" href="<?php echo $this->config->base_url();?>CRegister">Sign-Up</a>
				<a class="nav-link" href="<?php echo $this->config->base_url();?>CLogin">Sign-In</a>
				<?php  } ?>
			</ul>
		</div>
	</nav>
