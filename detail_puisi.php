
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
                          $sql1       = "SELECT * FROM puisi WHERE id = '$id'";
                          $q1         = mysqli_query($koneksi, $sql1);
                          while ($r1 = mysqli_fetch_array($q1)) {
                              $judul   = $r1['judul'];
                          ?>
              
              <div class="post-img">
                <img src="<?php echo url_dasar()."./admin/dist/img/puisi/" . foto_puisi($r1['id']) ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo ambil_judul_puisi($r1['id']) ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a href="#">Jepara</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2023-01-01">Mei 13, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-journals"></i> <a href="#">Ruang Update</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
              <?php echo ambil_isi_puisi($r1['id']) ?>
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

      </div>
    </section><!-- End Blog Details Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 posts-list">

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/berita1.JPG" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Pelatihan</p>

                            <h2 class="title">
                                <a href="isiberitaA.php">Lahirkan Jurnalis Muda Yang Kompeten, UKM Jurnalistik Polibang Adakan Pelatihan Skill Dasar Jurnalistik.</a>
                            </h2>

                            <div class="d-flex align-items-center">
                <!-- <img src="assets/img/blog/berita3.jpeg" alt="" class="img-fluid post-author-img flex-shrink-0"> -->
                              <div class="post-meta">
                              <p class="post-author-list">Ruang update</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">may 15, 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/berita4.jpeg" alt="" class="img-fluid">
              </div>

              <p class="post-category">pertemuan</p>

              <h2 class="title">
                <a href="blog-details.html">Jalin Silaturahim Bulan Ramadhan, Himaprodi ABI Adakan Buka Bersama</a>
              </h2>

              <div class="d-flex align-items-center">
                <!-- <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0"> -->
                <div class="post-meta">
                  <p class="post-author-list">Ruang Update</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">mar 29, 2023</time>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/berita5.jpeg" alt="" class="img-fluid">
              </div>

              <p class="post-category">seminar</p>

              <h2 class="title">
                <a href="blog-details.html">Kementrian Bakat Minat BEM Polibang Adakan Seminar Public Speaking</a>
              </h2>

              <div class="d-flex align-items-center">
                <!-- <img src="assets/img/blog/berita5.jpeg" alt="" class="img-fluid post-author-img flex-shrink-0"> -->
                <div class="post-meta">
                  <p class="post-author-list">Ruang Update</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">mar 25, 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">Lihat Lainnya ></a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer.php" ?>

