<?php include 'header.php'; ?>

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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              

            <div class="card card-primary card-outline">
              <div class="card-header">
                <a type="button" class="btn btn-primary" href="../pages/berita_tambah.php"><b>+ Tambah Berita</b></a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Konten</th>
                      

                      <th>Gambar</th>
                      <th>Tanggal Post</th>
                      <th>active</th>
                      <th>Populer</th>
                      <th>Penulis</th>
                      <th>Kategori</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                              include '../koneksi.php';
                              $no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM berita");
                              while($d = mysqli_fetch_assoc($data)){
                    ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?php echo $d['judul_berita']; ?></td>
                      <td><?php echo substr($d['isi_berita'], 0, 200); ?><a href="#"> Read more</a></td>
                      <td style="text-align: center;"><img src="../dist/img/berita/<?php echo $d['gambar_berita']; ?>" style="width: 120px;"></td>
                      <td><?php echo $d['tgl_input']; ?></td>
                      <td><?php echo $d['is_active']; ?></td>
                      <td><?php echo $d['is_populer']; ?></td>
                      <td><?php echo $d['penulis']; ?></td>
                      <td><?php echo $d['kategori']; ?></td>
                      <td class="project-actions text-right">
                                  
                                  <a type="button" class="btn btn-info btn-sm" href="berita_edit.php?id_berita=<?php echo $d['id_berita']; ?>" >
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Edit
                                  </a>
                                  <a type="button" class="btn btn-danger btn-sm" href="berita_hapus.php?id_berita=<?php echo $d['id_berita']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"> <i class="fas fa-trash">
                                  </i>Hapus</a>


                        
                                </td>

                    </tr>
                      <?php
                            $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
              
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


  <?php include './footer.php'; ?>