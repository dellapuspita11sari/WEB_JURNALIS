<?php include './header.php'?>



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
              <li class="breadcrumb-item active">Form Puisi</li>
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
                Form Puisi
              
              </h3>
            </div>
            <!-- /.card-header -->
              <form action="./puisi_editAct.php" method="post" enctype="multipart/form-data">
              <?php 
                  $id = $_GET['id'];              
                  $data = mysqli_query($koneksi, "SELECT* FROM puisi WHERE id ='$id'");
                  while($d = mysqli_fetch_assoc($data)){
                ?> 

                <div class="card-body">
                  <div class="form-group">
                    <label>Judul</label>
                    
                    <input name="judul" value="<?php echo $d['judul']; ?>" class="form-control form-control-lg" type="text" placeholder="Judul Puisi">
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>" >
                  </div>

                  <div class="form-group">
                    <textarea name="isi" class="form-control" id="summernote"><?php echo $d['isi']; ?></textarea>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Penulis</label>
                        <input name="cipta" value="<?php echo $d['cipta']; ?>" class="form-control" type="text" placeholder="pencipta">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Link Ig Pencipta</label>
                        <input name="ig" value="<?php echo $d['ig']; ?>" class="form-control" type="text" placeholder="ig">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Foto</label>
                          <div class="custom-file">
                          <img src="../dist/img/puisi/<?php echo $d['foto']; ?>" style="width: 120px;float: left; padding-top: 50px;">
                            <input type="file" name="foto" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">

                        <label>Date and time:</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" value="<?php echo $d['tanggal']; ?>"name="tanggal" id="reservationdatetime" class="form-control datetimepicker-input" name="tgl_input" data-target="#reservationdatetime">
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                 
                   

                    <div class="footer float-lg-right" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit"  class="btn btn-primary" >Simpan</button>
                  </div>

                </div>
                
                <?php
                            //$no++; //untuk nomor urut terus bertambah 1
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

<?php include './footer.php';?>