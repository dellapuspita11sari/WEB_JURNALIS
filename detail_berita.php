
  <!-- ======= Header ======= -->
  <?php include "header.php" ?>


  <main id="main">


    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <article class="blog-details">
              <?php
              $id = dapatkan_id();
                          $sql1       = "SELECT * FROM berita WHERE id_berita = '$id'";
                          $q1         = mysqli_query($koneksi, $sql1);
                          while ($r1 = mysqli_fetch_array($q1)) {
                              $judul_berita   = $r1['judul_berita'];
                          ?>
              
              <div class="post-img">
                <img src="<?php echo url_dasar()."./admin/dist/img/berita/" . foto_konten_berita($r1['id_berita']) ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo ambil_judul_berita($r1['id_berita']) ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a href="#">Jepara</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2023-01-01">Mei 13, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-journals"></i> <a href="#">Ruang Update</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
              <?php echo ambil_isi_berita($r1['id_berita']) ?>
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">jurnalis.pdf</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">ABI</a></li>
                  <li><a href="#">RPL</a></li>
                  <li><a href="#">AKP</a></li>
                </ul>
              </div><!-- End meta bottom -->
              <?php } ?>
            </article><!-- End blog post -->
            
          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer.php" ?>

