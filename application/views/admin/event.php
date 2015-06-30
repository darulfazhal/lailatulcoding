<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<h3>Events List</h3>

		<div class="row mt">
			<div class="col-md-12">
				<div class="content-panel">
					<table class="table table-striped table-advance table-hover">
						<h4><a type="button" class="btn btn-default" href="<?php echo admin_url('event/add'); ?>">Add New</a></h4>
						<thead>
							<tr>
								<th>Kota</th>
								<th>Penyelenggara</th>
								<th>Peserta</th>
								<th>Telepon</th>
								<th>Alamat</th>
								<th>Tahun</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($events as $event){
								echo"
								<tr>
									<td><a href='".$event->kota."'>".$event->kota."</a></td>
									<td>".$event->nama_penyelenggara."</td>
									<td>".$event->jml_perserta	." orang</td>
									<td>".$event->telpon."</td>
									<td>".$event->alamat."</td>
									<td>".$event->tahun."</td>
									<td>
										<a href='".$event->id_event."' class='btn btn-success btn-xs'><i class='fa fa-check'></i></a>
										<a href='".$event->id_event."' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
										<a href='".$event->id_event."' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></a>
									</td>
								</tr>
								";
							}
							?>
						</tbody>
					</table>
				</div><!-- /content-panel -->
			</div><!-- /col-md-12 -->
		</div><!-- /row -->

	</section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

<!--main content end-->