<?php include 'header.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tentang</h1>
            
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jurnalis</li>
            </ol>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->



    </section>


    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
          <div class="row">
              <div class="col-12">
                  <div class="card card-primary card-outline">

                  <div class="card-header">
                  <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><b>+ Tambah Proker</b></a>
                  </div>
                
                  <div class="card-header">

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                        </div>
                      </div>
                  </div>
                  <!---/.card-header--->

                  <div class=box-body>


                    <form action="../pages/proker_tambah.php" method="post" enctype="multipart/form-data">     
                      <div class="modal fade" id="modal-lg">
                          <div class="modal-dialog modal-md">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Program Kerja</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Program Kerja</label><br>
                                    <input type="text" name="proker_name" placeholder="Nama" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Pelaksanaans</label>
                                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                            <input type="text" name="proker_date" id="reservationdatetime" class="form-control datetimepicker-input" name="tgl_input" data-target="#reservationdatetime">
                                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                </div>


                                <div class="form-group">
                                    <textarea name="proker_konsep" class="form-control" id="summernote"> </textarea>
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


                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Program Kerja</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Konsep</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                              include '../koneksi.php';
                              $no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM proker");
                              while($d = mysqli_fetch_assoc($data)){
                        ?>


                            
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?php echo $d['proker_name']; ?></td>
                            <td><?php echo $d['proker_date']; ?></td>
                            <td><?php echo $d['proker_konsep']; ?></td>

                            <td class="project-actions text-left">
                                
                                <a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?php echo $d['proker_id']; ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="proker_hapus.php?proker_id=<?php echo $d['proker_id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"> <i class="fas fa-trash">
                                </i>Hapus</a>

                                <!--EDIT PROKER--->
                                <form action="../pages/proker_edit.php" method="post" enctype="multipart/form-data">     
                                    <div class="modal fade" id="modal-edit<?php echo $d['proker_id']; ?>">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Program Kerja</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Nama Program Kerja</label><br>
                                                    <input type="text" name="proker_name" placeholder="Nama" class="form-control" value="<?php echo $d['proker_name'] ?>">
                                                    <input type="hidden" class="form-control" name="proker_id" value="<?php echo $d['proker_id'] ?>" >
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Pelaksanaans</label>
                                                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                            <input type="text" name="proker_date" id="reservationdatetime" class="form-control datetimepicker-input" name="tgl_input" data-target="#reservationdatetime" value="<?php echo $d['proker_date'] ?>">
                                                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                </div>


                                                <div class="form-group">
                                                    <textarea name="proker_konsep" class="form-control" id="summernote"><?php echo $d['proker_konsep'] ?></textarea>
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

                      
                            </td>

                          </tr>
                        </tbody>
                        <?php 
                              } $no; //nambah
                        ?>


                      </table>
                  </div>
                  <!-- /.card-body -->

                  </div>
                  <!---box-body--->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
        </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<?php include 'footer.php';?>