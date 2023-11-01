<?php include './header.php'; 
session_start();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Puisi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Puisi</li>
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
                <a type="button" class="btn btn-primary" href="./puisi_tambah.php"><b>+ Tambah Puisi</b></a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Puisi</th>
                    <th>Puisi</th>
                    <th>Gambar</th>
                    <th>Tanggal Post</th>
                    <th>Penulis</th>
                    <th>link ig</th>

                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                              include '../koneksi.php';
                              $no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM puisi");
                              while($d = mysqli_fetch_assoc($data)){
                    ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo substr($d['isi'], 0, 250); ?></td>
                    <td style="text-align: center;"><img src="../dist/img/puisi/<?php echo $d['foto']; ?>" style="width: 120px;"></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo $d['cipta']; ?></td>
                    <td><?php echo $d['ig']; ?></td>
                    <td class="project-actions text-right">
                                
                                <a type="button" class="btn btn-info btn-sm" href="puisi_edit.php?id=<?php echo $d['id']; ?>" >
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a type="button" class="btn btn-danger btn-sm" href="puisi_hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"> <i class="fas fa-trash">
                                </i>Hapus</a>


                      
                              </td>
                    <?php
                            $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Judul Puisi</th>
                    <th>Puisi</th>
                    <th>Gambar</th>
                    <th>Tanggal Post</th>
                    <th>Penulis</th>
                    <th>link ig</th>
                    <!--
                    <th>Kategori</th>--->
                    <th>Action</th>
                  </tr>
                  </tfoot>
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