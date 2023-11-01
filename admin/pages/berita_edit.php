<?php include './header.php' ?>



 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!---<h1>Form Post</h1>--->
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Form post
              
              </h3>
            </div>
            <!-- /.card-header -->
              <form action="./berita_editAct.php" method="post" enctype="multipart/form-data">
                <?php 
                  $id_berita = $_GET['id_berita'];              
                  $data = mysqli_query($koneksi, "SELECT* FROM berita WHERE id_berita ='$id_berita'");
                  while($d = mysqli_fetch_assoc($data)){
                ?> 
                <div class="card-body">
                  <div class="form-group">
                    <label>Judul</label>
                    
                    <input name="judul_berita" value="<?php echo $d['judul_berita']; ?>" class="form-control form-control-lg" type="text" placeholder="Judul Berita">
                    <input type="hidden" name="id_berita" value="<?php echo $d['id_berita']; ?>">
                  </div>

                  <div class="form-group">
                    <textarea name="isi_berita" class="form-control" id="summernote"><?php echo $d['isi_berita']; ?></textarea>
                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Foto</label>
                          <div class="custom-file">
                          <img src="../dist/img/berita/<?php echo $d['gambar_berita']; ?>" style="width: 120px;float: left; padding-top: 50px;">
                            <input type="file" name="gambar_berita" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Date and time:</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" name="tgl_input" value="<?php echo $d['tgl_input']; ?>" class="form-control datetimepicker-input" name="tgl_input" data-target="#reservationdatetime"/>
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Active</label>
                        <select  name="is_active" class="form-control select2" style="width: 100%;">
                          <option  <?php if($d['is_active'] == "YES"){echo "selected='selected'";} ?> value="YES" selected="selected">YES</option>
                          <option  <?php if($d['is_active'] == "NO"){echo "selected='selected'";} ?> value="NO" >NO</option>
                          
                        </select>
                      </div>
                      <!-- /.form-group --->
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Populer</label>
                        <select  name="is_populer" class="form-control select2" style="width: 100%;">
                          <option <?php if($d['is_populer'] == "YES"){echo "selected='selected'";} ?> value="YES" selected="selected">YES</option>
                          <option <?php if($d['is_populer'] == "NO"){echo "selected='selected'";} ?> value="NO">NO</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Penulis</label>
                        <input name="penulis" value="<?php echo $d['penulis']; ?>" class="form-control" type="text" placeholder="Penulis">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Kategori</label>
                        <select  name="kategori[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">

                          <option  value="Terbaru">Terbaru</option>
                          <option value="Kampus">Kampus</option>
                          <option value="Program Studi">Program Studi</option>
                          <option value="Mahasiswa">Mahasiswa</option>
                          <option  value="Kegiatan">Kegiatan</option>
                          <option value="uncategori">uncategori</option> 

                        </select>
                      </div>
                      <!--- /.form-group -->
                    </div>
                  </div>
                   

                  <div class="footer float-lg-right" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit"  class="btn btn-primary">Simpan</button>
                  </div>

                </div>
                <?php 
                  }
                ?> 
              </form>
          
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include './footer.php'?>