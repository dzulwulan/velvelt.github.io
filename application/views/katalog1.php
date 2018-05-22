<?php $this->load->view('header'); ?>
<div class="container-fluid" style="margin-top:5%;">
	<div class="row">
		<table>
			<tr>
				<?php
          foreach ($katalog12 as $row) { 
            // echo $row->nama_katalog; 
         ?>
					<td>
						<div class="card" style="width:30%; height :30%;">
							<img class="card-img-top catalog" src="<?php echo base_url();?><?php echo $row->gambar_katalog; ?>" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">
									<?php echo $row->harga_katalog; ?>
								</h4>
								<p class="card-text">
									<?php echo $row->nama_katalog; ?>
								</p> 
								<?php $getdetail= $row->nama_katalog;
									$id_katalog = $row->id_katalog; ?>
								<a href="<?php echo base_url();?>Cdetail/getdetail/<?php echo $getdetail;?>/<?php echo $id_katalog; ?>" class="btn btn-primary" >Buy</a>
							</div>
						</div>
					</td>
					<?php } ?>
			</tr>
		</table>

	</div>
</div>
<?php  $this->load->view('footer'); ?>
