<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url() ?>/assets/img/baliindah.png">
	<title>Bali Indah | <?= $title  ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link href="<?= base_url() ?> assets/plugins/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>

	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<h4 class="mt-1">Sistem Informasi Pendataan Karyawan</h4>
	</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('admin/dashboard') ?>" class="brand-link">
		<img src="<?php echo base_url() ?>/assets/img/baliindah.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Bali Indah Photo</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/img/') . $this->session->userdata('photo') ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('nama_karyawan') ?></a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/dataKaryawan') ?>" class="nav-link">
						<i class="nav-icon fas fa-users"></i>
						<p>Data Karyawan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/dataDivisi') ?>" class="nav-link">
						<i class="nav-icon fas fa-briefcase"></i>
						<p>Data Divisi</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-money-check"></i>
						<p>
							Transaksi
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin/dataAbsensi') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Absensi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/PotonganGaji') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Potongan Gaji</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/dataGaji') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Gaji</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-clipboard"></i>
						<p>
							Laporan
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin/laporanAbsensi') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Laporan Absensi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/dataKegiatan') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Laporan Kegiatan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/laporanGaji') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Laporan Gaji</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/slipGaji') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Slip Gaji</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/enkripsi') ?>" class="nav-link">
						<i class="nav-icon fas fa-money-check"></i>
						<p>Enkripsi Data</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/dekripsi') ?>" class="nav-link">
						<i class="nav-icon fas fa-money-check"></i>
						<p>Dekripsi Data</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('UbahPassword') ?>" class="nav-link">
						<i class="nav-icon fas fa-lock"></i>
						<p>Ubah Password</p>
					</a>
				</li>
				<li class="nav-item">
					<a onclick="return confirm('Yakin ingin keluar ?') " href="<?= base_url('welcome/logout') ?>" class="nav-link">
						<i class="nav-icon fas fa-power-off"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<!-- Main content -->
		<section class="content">
		<div class="container-fluid">
          <div class="alert alert-success" role="alert">
            <i><img src="../img/logo.png" class="mb-1 mr-2" width="25"></i>
            Implementasi Metode Enkripsi AES 128 Bit pada Data Karyawan - Data Karyawan
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List - Data Karyawan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <table class="table table-bordered" id="file" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td><strong>ID File</strong></td>
                        <td><strong>Nama File</strong></td>
                        <td><strong>Nama File Enkripsi</strong></td>
                        <td><strong>Ukuran File</strong></td>
                        <td><strong>Tanggal</strong></td>
                        <td><strong>Status</strong></td>
                        <td colspan="2"><strong>Aksi</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      foreach ($file as $f) : ?>
                        <tr>
                          <td><?php echo $f->id_file ?></td>
                          <td><?php echo $f->file_name_source ?></td>
                          <td><?php echo $f->file_name_finish ?></td>
                          <td><?php echo $f->file_size ?> KB</td>
                          <td><?php echo date('d-m-Y / H:i:s', strtotime($f->tgl_upload)) ?></td>
                          <?php
                          if ($f->status == 1) { ?>
                            <td class="text-center"><a href="#" class="btn btn-success"><i class="fas fa-fw fa-lock"></i>Terenkripsi</a></td>
                          <?php } else if ($f->status == 2) { ?>
                            <td class="text-center"><a href="#" class="btn btn-warning"><i class="fas fa-fw fa-lock-open"></i>Terdekripsi</a></td>
                          <?php } else { ?>
                            <td class="text-center"><a href="#" class="btn btn-info"><i class="fas fa-fw fa-lock">No Status</a></td>
                          <?php } ?>
                          <td class="text-center">
                            <?php
                            $a = $f->id_file;
                            echo '<a href="hapus_file.php?id_file=' . $a . '" onclick="return confirm(`Anda yakin ingin menghapus ini ?`)" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>';
                            ?>
                          </td>
                          <td class="text-center">
                            <?php
                            if ($f->status == 1) { ?>
                              <a href="download.php?file_name_finish=<?= $f->file_name_finisih ?>" class="btn btn-info"><i class="fas fa-fw fa-download"></i></a>
                            <?php } elseif ($f->status == 2) { ?>
                              <a href="download2.php?file_name_source=<?= $f->file_name_source?>" class="btn btn-success"><i class="fas fa-fw fa-download"></i></a>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php
                       ?>
                    </tbody>
					<?php endforeach; ?>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
	</section>
</div>


<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; 2022 </strong>Bali Indah Photo
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.2.0
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>assets/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
			"buttons": ["excel", "pdf", "print"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>assets/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script> -->
</body>

</html>