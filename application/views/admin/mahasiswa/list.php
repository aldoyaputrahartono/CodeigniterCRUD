<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/mahasiswa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NRP</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Telepon</th>
										<th>Jurusan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($mahasiswa as $mhs): ?>
									<tr>
										<td>
											<?php echo $mhs->nrp ?>
										</td>
										<td>
											<?php echo $mhs->nama ?>
										</td>
										<td>
											<?php echo $mhs->jenis_kelamin ?>
										</td>
										<td>
											<?php echo $mhs->alamat ?>
										</td>
										<td>
											<?php echo $mhs->telepon ?>
										</td>
										<td>
											<?php echo $mhs->jurusan ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/mahasiswa/edit/'.$mhs->nrp) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

											<a onclick="deleteConfirm('<?php echo site_url('admin/mahasiswa/delete/'.$mhs->nrp) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>