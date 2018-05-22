<?php include 'header.php' ?>

<div class="container-fluid" style="margin-top: 56px;">
	<!-- START -->
	<!-- Caraousel -->
	<div class="row">
		<div class="col text-center">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
					<li data-target="#demo" data-slide-to="3"></li>
					<li data-target="#demo" data-slide-to="4"></li>
				</ul>
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo base_url();?>./Welcome to Otong.com_files/a.jpg" style="object-fit: cover;" width="100%" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url();?>./Welcome to Otong.com_files/b.jpg" style="object-fit: cover;" width="100%" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url();?>./Welcome to Otong.com_files/c.jpg" style="object-fit: cover;" width="100%" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url();?>./Welcome to Otong.com_files/KODEVOUCHER.jpg" style="object-fit: cover;" width="100%" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url();?>./Welcome to Otong.com_files/e.jpg" style="object-fit: cover;" width="100%" height="500">
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
	<!-- Konten Promo -->
	<div class="row">
		<div class="card-deck">
			<div class="card">
				<img class="card-img-top card-back" src="<?php echo base_url();?>./Welcome to Otong.com_files/promo1.jpg" alt="Card image cap">
				<div class="flip" id="1">Detail</div>
				<div class="card-body" id="panel1">
					<h5 class="card-title">Shoes</h5>
					<p class="card-text">250000
						<span>400000</span>
					</p>
					<button class="btn btn-primary" id="1">Buy</button>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top card-back" src="<?php echo base_url();?>./Welcome to Otong.com_files/promo2.jpg" alt="Card image cap">
				<div class="flip" id="2">Detail</div>
				<div class="card-body" id="panel2">
					<h5 class="card-title">Denim Shirt</h5>
					<p class="card-text">320000
						<span>400000</span>
					</p>
					<button class="btn btn-primary">Buy</button>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top card-back" src="<?php echo base_url();?>./Welcome to Otong.com_files/promo3.jpg" alt="Card image cap">
				<div class="flip" id="3">Detail</div>
				<div class="card-body" id="panel3">
					<h5 class="card-title">Jacket</h5>
					<p class="card-text">350000
						<span>400000</span>
					</p>
					<button class="btn btn-primary">Buy</button>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php' ?>
