<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kategori</li>
            </ol>
            
          </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>


   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              

            <div class="card card-primary card-outline">
              <div class="card-header">
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><b>+ Tambah Kategori</b></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>active</th>
                        <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php 
                              include '../koneksi.php';
                              $no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM kategori");
                              while($d = mysqli_fetch_assoc($data)){
                ?>

                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?php echo $d['nama_kategori']; ?></td>
                    <td><?php echo $d['is_active']; ?></td>
                    <td class="project-actions text-right">
                                
                        <a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?php echo $d['id_kategori'] ?>">
                            <i class="fas fa-pencil-alt"></i>
                                Edit
                        </a>

                        <a class="btn btn-danger btn-sm" href="./kategori_hapus.php?id_kategori=<?php echo $d['id_kategori']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"> <i class="fas fa-trash">
                        </i>Hapus</a>


                        <!---EDIT Kategori--->
                        <form action="kategori_upgrade.php" method="post" enctype="multipart/form-data">     
                                  <div class="modal fade" id="modal-edit<?php echo $d['id_kategori'] ?>">
                                      <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Kategori</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>

                                            <div class="modal-body" style="text-align:left;">
                                                <div class="form-group">
                                                    <label>Nama Kategori</label><br>
                                                    <input type="text" value="<?php echo $d['nama_kategori'] ?>" name="nama_kategori" placeholder="Nama Kategori" class="form-control">
                                                    <input type="hidden" class="form-control" name="id_kategori" value="<?php echo $d['id_kategori'] ?>" >
                                                </div>

                                                <div class="form-group">
                                                    <label>Active</label>
                                                    <!---<input type="text" name="divisi" placeholder="Nama Lengkap" class="form-control">--->
                                                    <select name="is_active" class="form-control select2" style="width: 100%;">
                                                    <option <?php if($d['is_active'] == "YES"){echo "selected='selected'";} ?>value="YES">YES</option>
                                                    <option <?php if($d['is_active'] == "NO"){echo "selected='selected'";} ?>value="NO" >NO</option>
                                                    </select>
                                                </div>

            
                                            </div>

                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" >Simpan</button>
                                          </div>
                                        </div>
                                        <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                  </div>
                                </form>


                      
                    </td>
                </tr>
                    <?php
                        }
                        ?>
            </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->

              <form action="../pages/kategori_tambah.php" method="post" enctype="multipart/form-data">     
                      <div class="modal fade" id="modal-lg">
                          <div class="modal-dialog modal-md">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Tambah Anggota</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Kategori</label><br>
                                    <input type="text" name="nama_kategori" placeholder="Nama Kategori" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Active</label>
                                    <!---<input type="text" name="divisi" placeholder="Nama Lengkap" class="form-control">--->
                                    <select name="is_active" class="form-control select2" style="width: 100%;">
                                      <option value="YES" selected="selected">YES</option>
                                      <option value="NO" >NO</option>
                                    </select>
                                </div>

        
                              </div>

                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                              </div>
                            </div>
                             <!---/.modal-content--->
                            
                          </div>
                           <!---/.modal-dialog--->
                        </div>
                        <!---/.modal--->
                      </div>
                    </form>

              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <?php include 'footer.php'; ?>