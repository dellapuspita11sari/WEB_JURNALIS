<?php include 'header.php'; ?>
<?php include '../koneksi.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
    <section class="content center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-8">
              <div class="card card-outline card-primary">
                <div class="card-body">

					<form action="../pages/pimum_upgrade.php" method="post" enctype="multipart/form-data">    
					<?php 
							$idanggota = $_GET['idanggota'];              
							$data = mysqli_query($koneksi, "SELECT* FROM pimpinan_umum WHERE idanggota='$idanggota'");
							while($d = mysqli_fetch_assoc($data)){
						?> 
									
												<div class="body" style="text-align:left">
													<div class="form-group">
													
														<label>Nama Lengkap</label><br>
														<input type="text" value="<?php echo $d['nama_anggota']; ?>" name="nama_anggota" class="form-control"required="required">
														<input type="hidden" class="form-control" name="idanggota" value="<?php echo $d['idanggota'] ?>" >
													</div>

													<div class="form-group">
														<label>Divisi</label>
														<input type="text" value="<?php echo $d['divisi']; ?>" name="divisi" placeholder="Nama Lengkap" class="form-control">
													</div>

													<div class="form-group">
														<label>Link IG</label>
														<input type="text" value="<?php echo $d['ig']; ?>"name="ig" placeholder="Link IG" class="form-control">
													</div>

													<div class="form-group">
													<label>Foto</label><br>
														<div class="custom-file">
															<img src="../dist/img/anggota/pimum/<?php echo $d['gambar_anggota']; ?>" style="width: 120px;float: left; padding-top: 50px;">
															<input type="file"  name="gambar_anggota" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile">Choose file</label>
														</div>
													</div>
													


							
												</div>
												

													<div class="footer" style="float:right">
														<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-primary" >Simpan</button>
													</div>
												

												
											</div>
											

										<?php
							}

							?>

									</form>
                                
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>