<?php include 'header.php'; ?>
<?php include '../koneksi.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Sekretaris</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Sekretaris</li>
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

                <form action="../pages/tentang_upgrade.php" method="post" enctype="multipart/form-data"> 
                <?php 
                    $id_jurnalis = $_GET['id_jurnalis'];              
                    $data = mysqli_query($koneksi, "SELECT* FROM tentang_jurnalis WHERE id_jurnalis='$id_jurnalis'");
                    while($d = mysqli_fetch_assoc($data)){
                  ?>     
                      
                      <div class="body" style="text-align:left">
                        <div class="form-group">
                                        <label>Nama Jurnalistik</label><br>
                                        <input type="text" value="<?php echo $d['nama_jurnalis']; ?>" name="nama_jurnalis" placeholder="Nama" class="form-control">
                                        <input type="hidden" class="form-control" name="id_jurnalis" value="<?php echo $d['id_jurnalis'] ?>" >
                                    </div>

                                    <div class="form-group">
                                        <label>Kampus</label>
                                        <input type="text" value="<?php echo $d['kampus_Jur']; ?>" name="kampus_Jur" placeholder="Nama Kampus" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Link IG</label>
                                        <input type="text" value="<?php echo $d['link_ig']; ?>" name="link_ig" placeholder="Link IG" class="form-control">
                                    </div>


                                    <label>Email</label>
                                    <div class="input-group mb-3">
                                      
                                      <input type="email" name="email" value="<?php echo $d['email']; ?>" class="form-control" placeholder="Email" >
                                      <div class="input-group-append">
                                        <div class="input-group-text">
                                          <span class="fas fa-envelope"></span>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" value="<?php echo $d['alamat_Jur']; ?>" name="alamat_Jur" placeholder="Alamat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>No. WA</label>
                                        <input type="text" value="<?php echo $d['no_telp']; ?>" name="no_telp" placeholder="No. WA" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label>Foto</label>
                                    
                                        <div class="custom-file">
                                        <img src="../dist/img/logo/<?php echo $d['logo_jurnalis']; ?>" style="width: 120px;float: left; padding-top: 50px;">
                                            <input type="file" name="logo_jurnalis" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>


            
                                </div>

                                <div class="modal-footer justify-content-between">
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