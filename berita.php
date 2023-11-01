


        <!-- ======= Header ======= -->
        <?php include "./header.php" ?>
        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">

        
                <div class="container" data-aos="fade-up">

                    <div class="row gy-4 posts-list">
                        
                        <?php


                        $sql1       = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 9";
                        $q1         = mysqli_query($koneksi, $sql1);
                        while ($r1 = mysqli_fetch_array($q1)) {
                        $judul   = $r1['judul_berita'];
                        ?>
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="./admin/dist/img/berita/<?php echo foto_konten_berita ($r1['id_berita']) ?>" alt="" class="img-fluid">
                                </div>

                                <p class="post-category"><?php echo ambil_kategori_berita ($r1['id_berita']) ?></p>

                                <h2 class="title">
                                    <a href="<?php echo buat_link_berita($r1['id_berita']) ?>" ><?php echo ambil_judul_berita ($r1['id_berita']) ?></a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/berita2.jpeg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list">#</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">apr 14, 2023</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                        <?php } ?>


                        <!---<div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/berita3.jpeg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">kompetisi</p>

                                <h2 class="title">
                                    <a href="isiberitaC.php">Dukung Usaha Santri, Shopee Adakan Kompetisi Bisnis Digital</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/berita3.jpeg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list">#</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">mar 31, 2023</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><-- End post list item --

                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/berita4.jpeg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">pertemuan</p>

                                <h2 class="title">
                                    <a href="isiberitaD.php">Jalin Silaturahim Bulan Ramadhan, Himaprodi ABI Adakan Buka Bersama</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/berita4.jpeg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list">Ruang Update</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">mar 29, 2023</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><-- End post list item --

                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/berita5.jpeg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">seminar</p>

                                <h2 class="title">
                                    <a href="isiberitaE.php">Kementrian Bakat Minat BEM Polibang Adakan Seminar Public Speaking</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/berita5.jpeg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list">Ruang Update</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">mar 25, 2023</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><-- End post list item --

                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/berita6.jpeg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">pelatihan</p>

                                <h2 class="title">
                                    <a href="isiberitaF.php">Ilmu Desain Dibutuhkan Di Semua Jurusan, PCS Polibang Adakan Pelatihan Desain</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/berita6.jpeg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list">Ruang Update</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">mar 18, 2023</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><-- End post list item -->

                    </div><!-- End blog posts list -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">Postingan Lainnya ></a></li>
                        </ul>
                    </div><!-- End blog pagination -->

                </div>
            </section><!-- End Blog Section -->

        </main><!-- End #main -->

        <!-- Footer -->
        <?php include "./footer.php" ?>

    </body>

</html>