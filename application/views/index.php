<!-- Header -->


<div class="container-fluid">

	<!-- Caraousel -->
	<div class="row">
		<div class="col text-center c-background">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<!-- The slideshow -->
				<div class="carousel-inner c-size">
					<div class="carousel-item active">
						<img src="<?php echo $this->config->base_url();?>Welcome to Otong.com_files/1.jpg" style="object-fit: cover;" width="100%" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php //echo base_url();?>./Welcome to Otong.com_files/2.jpg" style="object-fit: cover;" width="100%" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url();?>./Welcome to Otong.com_files/3.jpg" style="object-fit: cover;" width="100%" height="500">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
	</div>
	<!-- End Carousel -->

	<h2 align="center" style="font-family:BebasNeue; size: 20px; margin-bottom: 15px; font-weight: bold; ">TRENDING NOW</h2>
	<!-- Trending -->
	<div class="row">
		<div class="col contain">
			<img src="<?php echo base_url();?>./Welcome to Otong.com_files/cloth 1.jpg" alt="avatar" class="image">
			<div class="overlay">
			</div>
		</div>
		<div class="col contain">
			<img src="<?php echo base_url();?>./Welcome to Otong.com_files/cloth 2.jpg" class="image">
			<div class="overlay"></div>
		</div>
	</div>

	<div class="row">
		<div class="col text-center mt-5">
		<a class="nav-link shop" href="<?php echo $this->config->base_url(); ?>CKatalog/show">Shop Now</a>
		</div>
	</div>


	<!-- Footer -->
</div>

