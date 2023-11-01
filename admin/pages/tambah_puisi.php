

<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include ('../koneksi.php');

	// membuat variabel untuk menampung data dari form
  $judul   = $_POST['judul'];
  $isi     = $_POST['isi'];
  $cipta   = $_POST['cipta'];
  $ig     = $_POST['ig'];
//   $tanggal     = $_POST['tanggal'];
  $foto = $_FILES['foto']['name'];


//cek dulu jika ada foto produk jalankan coding ini
if( $foto != "") {
  $ekstensi_diperbolehkan = array("jpg","jpeg","png","gif", "JPG", "webp"); //ekstensi file foto yang bisa diupload 
  $x = explode('.',  $foto); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_foto_baru = $angka_acak.'-'. $foto; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../dist/img/puisi/'.$nama_foto_baru); //memindah file foto ke folder foto
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO puisi (judul, isi, cipta, ig, foto) VALUES ('$judul', '$isi','$cipta','$ig','$nama_foto_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='puisi.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi foto yang boleh hanya jpg atau png.');window.location='user.php';</script>";
            }
} else {
   $query = "INSERT INTO puisi (judul, isi, cipta, ig, foto) VALUES ('$judul', '$isi','$cipta','$ig', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='puisi.php';</script>";
                  }
}
