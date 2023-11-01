<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<?php include 'header.php'; ?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah struktur puisi Jurnalistik</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-rtanggalht">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah puisi Jurnalistik</li>
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
                    <!-- <div class="register-box"> -->
                    <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                    <a href="#" class="h1"><b>Tambah</b>puisi</a>
                    </div>
                    <div class="card-body">

<?php
$judul     = "";
$isi       = "";
$cipta       = "";
$ig       = "";
$foto       = "";




$foto_name  = "";
$tanggal  = "";



$error      = "";
$sukses     = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from puisi where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul   = $r1['judul'];
    $isi   = $r1['isi'];
    $cipta   = $r1['cipta'];
    $ig   = $r1['ig'];
    $tanggal   = $r1['tanggal'];
    $foto   = $r1['foto'];
    


    if($judul == '' or $isi == ''or $tanggal == ''or $foto == ''){
        $error  = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $judul      = $_POST['judul'];
    $isi      = $_POST['isi'];
    $cipta      = $_POST['cipta'];
    $ig      = $_POST['ig'];
    $tanggal      = $_POST['tanggal'];
    // $foto      = $_POST['foto'];
    
    // $isi        = $_POST['isi'];

    if ($judul == ''or $isi == ''or $tanggal ==''or $foto == '') {
        $error     = "Silakan masukkan semua data.";
    }
    //Array ( [foto] => Array ( [name] => Budi Rahardjo.jpg [type] => image/jpeg [tmp_name] => C:\xampp2\tmp\php4FDD.tmp [error] => 0 [size] => 2375701 ) )
    // print_r($_FILES);
    if($_FILES['foto']['name']){
        $foto_name = $_FILES['foto']['name'];
        $foto_file = $_FILES['foto']['tmp_name'];

        $detail_file = pathinfo($foto_name);
        $foto_ekstensi = $detail_file['extension'];
        // Array ( [dirname] => . [basename] => Romi Satrio Wahono.jpg [extension] => jpg [filename] => Romi Satrio Wahono )
        $ekstensi_yang_diperbolehkan = array("jpg","jpeg","png","gif", "JPG");
        if(!in_array($foto_ekstensi,$ekstensi_yang_diperbolehkan)){
            $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png, JPG dan gif";
        }

    }
    

    if (empty($error)) {
        if($foto_name){
            $direktori = "./dist/img/puisi/";

            @unlink($direktori."/$foto"); //delete data

            $foto_name = "slide_show".time()."_".$foto_name;
            move_uploaded_file($foto_file,$direktori."/".$foto_name);
            // move_uploaded_file($gambar_file,$direktori."/".$gambar_name);/\

            $foto= $foto_name;
        }else{
            $foto_name = $foto; //memasukkan data dari data yang sebelumnya ada
        }

        if($id != ""){
            $sql1   = "update puisi set judul = '$judul',isi='$isi',cipta = '$cipta',ig='$ig',tanggal='$tanggal',foto='$foto' where id = '$id'";
        }else{
            $sql1       = "insert into  puisi (judul,isi,cipta,ig,tanggal,foto) values ('$judul','$isi','$cipta','$ig','$tanggal','$foto')";
        }
        
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Sukses memasukkan data";
        } else {
            $error      = "Gagal memasukkan data";
        }
    }
}


?>

   <!-- ======= Sidebar ======= -->
   
<?php
// include "../templates/navbar1.php"
?>
<!-- End Navbar -->

   

                <?php
if ($error) {
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php
}
?>
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>
                                         <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">nama puisi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="isi" class="col-sm-2 col-form-label">isi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="isi" value="<?php echo $isi ?>" name="isi">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cipta" class="col-sm-2 col-form-label">ciptaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="cipta" value="<?php echo $cipta ?>" name="cipta">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="ig" class="col-sm-2 col-form-label">ig</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ig" value="<?php echo $ig ?>" name="ig">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tanggal" value="<?php echo $tanggal ?>" name="tanggal">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                  <div class="col-sm-10">
                  <?php 
            if($foto){
                echo "<img src='../dist/img/puisi/$foto' style='max-height:100px;max-width:100px'/>";
            }
            ?>
            <input type="file" class="form-control" id="foto" name="foto">            
            </div>
                </div>
                  <div class="row mb-3">
                  <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                  <div class="col-sm-10">
                  <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                  <a href="puisi.php">
                                <input type="button" class="btn btn-success" value="Kembali" />
                            </a>
                    <!-- <button type="submit" class="btn btn-primary">Submit Form</button> -->
                  </div>
                </div> 

              </form>
                <!-- Table with stripped rows -->
                

            </div>
        </div>
    </div>
    </div>
    </section>
    </main>
<!-- footer -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->