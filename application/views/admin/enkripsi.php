<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 mb-2">
						<h1 class="m-0 text-primary"><?= $title ?></h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?php base_url('admin/dashboard') ?>">Home</a></li>
							<li class="breadcrumb-item active"><?= $title ?></li>
						</ol>
					</div><!-- /.col -->
                    <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Enkripsi</h6>
                        </div>
                        <div class="card-body">
                          <h3>
                          <?php echo validation_errors(); ?>
                          </h3>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('admin/enkripsi/Encrypt') ?>" enctype="multipart/form-data">
                            <fieldset>
                            <legend></legend>
                            <div class="form-group">
                                <label class="col-lg-12 control-label" for="inputPassword">Tanggal</label>
                                <div class="col-lg-12">
                                <input class="form-control" id="inputTgl" type="text" placeholder="Tanggal" name="datenow" value="<?php echo date("d-m-Y"); ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 control-label" for="inputFile">File</label>
                                <div class="col-lg-12">
                                <input class="form-control" id="inputFile" placeholder="Input File" type="file" name="file" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 control-label" for="inputPassword">Kunci Enkripsi</label>
                                <div class="col-lg-12">
                                <input class="form-control" id="inputPassword" type="password" placeholder="Kunci Enkripsi" name="pwdfile" maxlength="16" size="16" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 control-label" for="textArea">Keterangan</label>
                                <div class="col-lg-12">
                                <textarea class="form-control" id="textArea" rows="3" name="desc" placeholder="Deskripsi"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 control-label" for="textArea"></label>
                            </div>
                            <input type="text" name="username" value="<?= $this->session->userdata('nama_karyawan') ?>" hidden>
                            <div class="form-group ml-3">
                                <button type="submit" name="enkripsi_now" class="btn btn-info" style="margin-top: -70px;"><i class=" fas fa-lock mr-2"></i>Enkripsi File</button>
                                <button type="reset" class="btn btn-danger" style="margin-top: -70px;"><i class="fas fa-redo mr-2"></i>Reset</button>
                            </div>
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Petunjuk Penggunaan</h6>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <h5>Implementasi Metode Enkripsi AES 128 Bit pada File Gaji Karyawan</h5>
                    <h6>( Studi Kasus: BALI INDAH PANGKALAN BUN, KALTENG )</h6>
                    <br>
                    <p>1. Format File Enkripsi : PDF, Word, Excel, dan PPT.</p>
                    <p>2. Ukuran File Maksimal 5 MB</p>
                    <p>3. Kunci Enkripsi berjumlah maksimal 16 digit.</p>
                    <p>4. Masukkan keterangan/deskripsi file dengan jelas.</p>
                    <p>5. Tombol reset digunakan untuk menghapus seluruh konten pada textbox.</p>
                    <p>6. Tombol enkripsi digunakan untuk mengenkripsi file dengan syarat seluruh textbox telah terisi.</p>
                  </div>
                </div>
              </div>
            </div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
</div>
