<?php include 'header.php'; ?>

<div class="container-fluid" style="margin-top:56px;">
	<h1>Product Detail</h1>
	<div class="row">
		<div class=" col-6 md-6">
			<?php
        foreach ($detail as $key){
          ?>
				<img src="<?php echo $this->config->base_url().$key['gambar_katalog']; ?>" class="cloth" style="object-fit:contain; height:400px; width:auto">
		</div>

		<div class="col-6 md-6">
			<table class="table table-striped">
				<tr>
					<td>Nama Barang </td>
					<td class="arif">:</td>
					<td>
						<?php  echo $key['nama_katalog']; ?>
					</td>
				</tr>
				<tr>
					<td>Harga </td>
					<td class="arif">:</td>
					<td>
						<?php  echo $key['harga_katalog']; ?>
					</td>
				</tr>
				<tr>
					<td>Bahan Pembuatan </td>
					<td class="arif">:</td>
					<td>Jeans</td>
				</tr>
				<tr>
					<td>Ukuran </td>
					<td class="arif">:</td>
					<td>All Size</td>
				</tr>

			</table>
			<?php if(isset($_SESSION['username'])){ ?>
			<button type="button" data-toggle="modal" class="btn btn-secondary" data-target="#myModal">Buy</button>
			<?php }else {
							echo"<script>
						alert('Mohon Login terlebih dahulu !') 
						</script>";							
						} ?>
		</div>
	</div>
	<?php } ?>
	<div class="row">
		<form method="post" action="<?php echo $this->config->base_url();?>Cdetail/addKomentar/<?php  echo $key['id_katalog'];?>/<?php echo $key['nama_katalog']; ?>"
		style="padding-left : 2%">
			<div class="form-group">
				<label> Username :</label>
				<input style="width : 800px" type="text" class="form-control" placeholder="insert your name" name="namakomentar">
			</div>
			<div class="form-group">
				<br>
				<input name="isikomentar" class="form-control" style="width : 800px; height : 100px" />
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
	<div class="" style="padding-left :2%">
		<h3>Comments </h3>
		<?php foreach ($komentar1 as $row) { ?>
		<div class="row">
			<i class="fa fa-user-circle-o" style="font-size:36px; "></i>
			<p style="font-weight:bold; font-size : 14px; font-family:sans-serif;margin-left:10px;">
				<?php echo $row['username'];?>
			</p>
		</div>
		<div>
			<p style="font-size: 16px; margin : 0 0 0 5%">
				<?php echo $row['kometar'];?>
			</p>
		</div>
		<?php } ?>
	</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Detail Pemesanan</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<?php $username = $_SESSION['username']; ?>
			<form action="<?php echo $this->config->base_url()?>Ctransaksi/insertTransaksi/<?php echo $username; ?>/<?php  echo $key['id_katalog'];?>/<?php  echo $key['harga_katalog'];?>"
			method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="quantity">Jumlah :</label>
						<input type="number" class="form-control" id="quantity" name="jumlah">
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>
				</div>
			</form>

		</div>
	</div>
</div>


<?php include 'footer.php';?>
