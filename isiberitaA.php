
  <!-- ======= Header ======= -->
  <?php include "header.php" ?>


  <main id="main">


    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

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

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Populer</h3>

                <div class="mt-3">
               
                  <div class="post-item mt-3">
                    <img src="#" alt="">
                    <div>
                      <h4><a href="#"><?php echo $d['judul_berita']; ?></a></h4>
                      <time datetime="2020-01-01">apr 14, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/berita3.jpeg" alt="">
                    <div>
                      <h4><a href="blog-details.html">Dukung Usaha Santri, Shopee Adakan Kompetisi Bisnis Digital</a></h4>
                      <time datetime="2020-01-01">mar 31, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/berita4.jpeg" alt="">
                    <div>
                      <h4><a href="blog-details.html">Jalin Silaturahim Bulan Ramadhan, Himaprodi ABI Adakan Buka Bersama</a></h4>
                      <time datetime="2020-01-01">Jmar 29, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/berita5.jpeg" alt="">
                    <div>
                      <h4><a href="blog-details.html">Kementrian Bakat Minat BEM Polibang Adakan Seminar Public Speaking</a></h4>
                      <time datetime="2020-01-01">mar 25, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/berita6.jpeg" alt="">
                    <div>
                      <h4><a href="blog-details.html">Ilmu Desain Dibutuhkan Di Semua Jurusan, PCS Polibang Adakan Pelatihan Desain</a></h4>
                      <time datetime="2020-01-01">mar 18, 2023</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <!-- <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li> -->
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

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

