<?php include 'header.php';?>
<div class="container" style="margin-top:40px;">
	<h1 style="margin-top:5%">Product Detail</h1>
	<div class="container-fluid">
	<div class="row">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Gambar</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($detail as $key){ ?>
				<tr role="row" class="">
					<th><img src="<?php echo $this->config->base_url().$key['gambar_katalog']; ?>" class="cloth" style="height:150px; width:auto ;object-fit:contain"></th>
					<th><?php  echo $key['nama_katalog']; ?></th>
					<th><?php echo $key['jumlahbarang']; ?></th>
					<th><?php  echo $key['harga_katalog']; ?></th>
					<th>
						<a class="btn btn-danger" href="<?php echo $this->config->base_url();?>Ccart/deletetransaksi/<?php echo $key['id_katalog'];?>/<?php echo $username; ?>">Delete</a>
					</th>
                </tr>
            <?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<th>Gambar</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>

	<div class="row">
		<button type="button" data-toggle="modal" class="btn btn-primary" data-target="#myModal">Check Out</bCutton>
	</div>
	<!-- The Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Check Out</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<?php $username = $_SESSION['username']; ?>
				<form action="<?php echo $this->config->base_url()?>Ccart/insertcheckout/<?php echo $key['username']; ?>"
				method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="totalbayar">Total bayar</label>
							<input type="text" class="form-control" id="quantity" name="totalbayar" value="<?php foreach($totalharga as $row){
                                echo $row['total'];
                            } ?>" disable>
						</div>
						<div class="form-group">
							<label for="address">alamat pengiriman</label>
							<input type="text" class="form-control" id="adress" name="adress">
						</div>
						<div class="form-group">
							<label for="metod">Metode Pembayaran</label>
							<div class="radio">
								<label>
									<input type="radio" name="metode" value="ATM BNI">ATM BNI</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="metode" value="ATM MANDIRI">ATM Mandiri</label>
							</div>
							<div class="radio disabled">
								<label>
									<input type="radio" name="metode" value="ATM BCA">ATM BCA</label>
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
	</div>
	<?php include 'footer.php'; ?>
