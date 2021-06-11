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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/mahasiswa/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<div class="form-group">
								<label for="nrp">NRP*</label>
								<input class="form-control <?php echo form_error('nrp') ? 'is-invalid':'' ?>"
								 type="text" name="nrp" placeholder="NRP Mahasiswa" value="<?php echo $mahasiswa->nrp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nrp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Mahasiswa" value="<?php echo $mahasiswa->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin*</label><br>
								<input type="radio" id="Laki-laki" name="jenis_kelamin" value="Laki-laki" 
								 <?php echo $mahasiswa->jenis_kelamin=='Laki-laki'? 'checked':'' ?> />
								<label for="Laki-laki">Laki-laki</label>
								<input type="radio" id="Perempuan" name="jenis_kelamin" value="Perempuan"
								 <?php echo $mahasiswa->jenis_kelamin=='Perempuan'? 'checked':'' ?> />
								<label for="Perempuan">Perempuan</label>
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat Rumah" value="<?php echo $mahasiswa->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telepon">Telepon*</label>
								<input class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>"
								 type="text" name="telepon" placeholder="Nomor Telepon" value="<?php echo $mahasiswa->telepon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telepon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jurusan">Jurusan*</label>
								<input class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" placeholder="Departemen / Jurusan" value="<?php echo $mahasiswa->jurusan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jurusan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>