<?php include 'header.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pimpinan Redaksi</h1>
            
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pimpinan Redaksi</li>
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
                  <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><b>+ Tambah Anggota</b></a>
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


                    <form action="../pages/pimred_tambah.php" method="post" enctype="multipart/form-data">     
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
                                    <label>Nama Lengkap</label><br>
                                    <input type="text" name="nama_anggota" placeholder="Nama Lengkap" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Divisi</label>
                                    <input type="text" name="divisi" placeholder="Nama Lengkap" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Link IG</label>
                                    <input type="text" name="ig" placeholder="Link IG" class="form-control">
                                </div>

                                <div class="form-group">
                                <label>Foto</label>
                                
                                    <div class="custom-file">
                                        <input type="file" name="gambar_anggota" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
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
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Link IG</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                              include '../koneksi.php';
                              $no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM pimpinan_redaksi");
                              while($d = mysqli_fetch_assoc($data)){
                                  ?>

                            
                        <tr>
                            
                            <td><?= $no++; ?></td>
                            <td><?php echo $d['nama_anggota']; ?></td>
                            <td><?php echo $d['divisi']; ?></td>
                            <td><?php echo $d['ig']; ?></td>
                            <td style="text-align: center;"><img src="../dist/img/anggota/pimred/<?php echo $d['gambar_anggota']; ?>" style="width: 120px;"></td>
                            <td class="project-actions text-right">
                                
                                <a type="button" class="btn btn-info btn-sm" href="pimred_edit.php?idanggota=<?php echo $d['idanggota']; ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="pimred_hapusAct.php?idanggota=<?php echo $d['idanggota']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"> <i class="fas fa-trash">
                                </i>Hapus</a>


                      
                              </td>

                          </tr>
                        </tbody>
                        <?php
                            $no++; //untuk nomor urut terus bertambah 1
                        }
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