

    <!-- ======= Header ======= -->
    <?php include "header.php" ?>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 posts-list">
               
                    <?php
                        $sql1       = "SELECT * FROM puisi ORDER BY id DESC LIMIT 9";
                        $q1         = mysqli_query($koneksi, $sql1);
                        while ($r1 = mysqli_fetch_array($q1)) {
                        $judul   = $r1['judul'];
                        ?>
                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="./admin/dist/img/puisi/<?php echo foto_puisi ($r1['id']) ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">
                                <a href="<?php echo buat_link_puisi($r1['id']) ?>"><b><?php echo ambil_judul_puisi($r1['id']) ?></b></a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <div class="post-meta">
                                    <p class="post-author-list">Ruang Update</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">apr 14, 2023</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->
                    <?php }?>

                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">Postingan Lainnya ></a></li>
                    </ul>
                </div><!-- End blog pagination -->

            </div>
        </section><!--- End Blog Section -->

    </main><!-- End #main -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Footer -->
    <?php include "footer.php" ?>
