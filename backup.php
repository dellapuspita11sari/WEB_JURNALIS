                          <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="./admin/dist/img/berita/<?php echo foto_konten_berita($r1['id_berita']) ?>" alt="" class="img-fluid">
                                </div>

                                <p class="post-category"><?php echo ambil_kategori_berita($r1['id_berita']) ?></p>

                                <a style="color:black; font-weight:bolder;" href="<?php echo buat_link_berita($r1['id_berita']) ?>">
                                    <h6 class="post-title"><?php echo ambil_judul_berita($r1['id_berita']) ?></h6>
                                </a>
                                <div class="d-flex align-items-center">
                                    <img src="./detail_berita.php" alt="" class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list"><?php echo ambil_penulis_berita($r1['id_berita']) ?></p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01"><?php echo ambil_tanggal_berita($r1['id_berita']) ?></time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                          </div><!--- End post list item --->




                        <div class="col-xl-3 col-md-3">
                            <article>
        
                              <div class="post-img">
                                <img src="./admin/dist/img/berita/<?php echo foto_konten_berita($r1['id_berita']) ?>"  alt="" class="img-fluid">
                              </div>
        
                              <p class="post-category"><?php echo ambil_kategori_berita($r1['id_berita']) ?></p>
        
                              <h2 class="title">
                                <a href="isiberitaA.php">Miris, Ramai dari kalangan pemuda Membatalkan Puasanya</a>
                              </h2>
        
                              <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                  <p class="post-author-list">Della Markup</p>
                                  <p class="post-date">
                                    <time datetime="2022-01-01">Jepara, 23 Mei 2022</time>
                                  </p>
                                </div>
                              </div>
        
                            </article>
                          </div><-- End post list item --
                
                          


                          
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
                  <li class="d-flex align-items-center"><i class="bi bi-journals"></i> <a href="#"><?php echo ambil_penulis_berita($r1['id_berita']) ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2023-01-01"></time><?php echo ambil_tanggal_berita($r1['id_berita']) ?></a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content" style="text-align:justify;">
              <?php echo ambil_isi_berita($r1['id_berita']) ?>
              </div><!-- End post content -->

              <!---<div class="meta-bottom">
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
              </div> ./End meta bottom -->

            </article><!-- End blog post -->
            <?php } ?>




            <?php
                        $sql1       = "SELECT * FROM puisi ORDER BY id DESC";
                        $q1         = mysqli_query($koneksi, $sql1);
                        while ($r1 = mysqli_fetch_array($q1)) {
                            $judul   = $r1['judul'];
                        ?>

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/berita1.JPG" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">
                                <a href="<?php echo buat_link_puisi($r1['id']) ?>"><?php echo ambil_judul_puisi($r1['id']) ?></a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <!-- <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0"> -->
                                <div class="post-meta">
                                    <p class="post-author-list">Ruang update</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">may 15, 2023</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->
                    <?php } ?>




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
                  <li class="d-flex align-items-center"><i class="bi bi-journals"></i> <a href="#"><?php echo ambil_cipta($r1['id']) ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2023-01-01"></time><?php echo ambil_tanggal_puisi($r1['id']) ?></a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content" style="text-align:justify;">
              <?php echo ambil_isi_puisi($r1['id']) ?>
              </div><!-- End post content -->

              <!---<div class="meta-bottom">
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
              </div> ./End meta bottom -->

            </article><!-- End blog post -->
            <?php } ?>
