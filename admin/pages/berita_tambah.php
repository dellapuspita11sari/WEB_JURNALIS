<?php include './header.php'; ?>



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
              <form action="../pages/berita_tambahAct.php" method="post" enctype="multipart/form-data">
              
                <div class="card-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input name="judul_berita" class="form-control form-control-lg" type="text" placeholder="Judul Berita">
                  </div>

                  <div class="form-group">
                    <textarea name="isi_berita" class="form-control" id="summernote"> </textarea>
                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Foto</label>
                          <div class="custom-file">
                            <input type="file" name="gambar_berita" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">

                        <label>Date and time:</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" name="tgl_input" id="reservationdatetime" class="form-control datetimepicker-input" name="tgl_input" data-target="#reservationdatetime">
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
                          <option value="YES">YES</option>
                          <option value="NO" >NO</option>
                          
                        </select>
                      </div>
                      <!-- /.form-group --->
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Populer</label>
                        <select  name="is_populer" class="form-control select2" style="width: 100%;">
                          <option value="YES" selected="selected">YES</option>
                          <option value="NO">NO</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Penulis</label>
                        <input name="penulis" class="form-control" type="text" placeholder="Penulis">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Kategori</label>
                        <select  name="kategori[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                        
                          <option value="Terbaru">Terbaru</option>
                          <option value="Kampus">Kampus</option>
                          <option value="Program Studi">Program Studi</option>
                          <option value="Mahasiswa">Mahasiswa</option>
                          <option value="Kegiatan">Kegiatan</option>
                          <option value="uncategori">uncategori</option>

                        </select>

                      </div>
                      <!--- /.form-group -->
                    </div>
                  </div>
                   

                    <div class="footer float-lg-right" >
                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      <button type="submit"  class="btn btn-primary" >Simpan</button>
                    </div>

                </div>

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

<?php include 'footer.php';?>