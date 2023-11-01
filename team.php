
    <!-- ======= Header ======= -->
    <?php include "header.php" ?>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Tim Ruang Update.</h2>
                    <p>Pengurus, Anggota, Jobdesk, dan Progja Ruang Update.</p>
                </div>
               
                <!-- Awal Team-->
                <div class="row justify-content-md-center">
                    <?php 
                              include './admin/koneksi.php';
                              //$no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM anggota");
                              while($d = mysqli_fetch_assoc($data)){
                                  ?>
                    <div class="col-xl-3 col-md-6 d-flex mt-4" >
                    
                        <div class="member">
                            <img src="./admin/dist/img/anggota/<?php echo $d['gambar_anggota']; ?>" class="img-fluid" alt="Pimpinan Umum"><br>
                            <h6><?php echo $d['nama_anggota']; ?></h6>
                            <span><?php echo $d['divisi']; ?></span>
                            <div class="social">
                                <a href="https://instagram.com/<?php echo $d['ig']; ?>"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>

                    </div><!-- End Team Member -->
                    <?php
                            //$no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
                </div>
            </div>

        </section>
        <!-- End Our Team Section -->
<!---
        <-- ======= Sosmed Section ======= --
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">

                    <h2>Sosial Media</h2>

                    <div class="section-title">
                        <p>Selalu Support Kami dan Ikuti Sosial Media Kami.</p>
                        <p>Ikuti terus sosial media kami untuk berita update lainnya</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <span><a href="https://www.polibang.ac.id/"><img src="assets/img/sosmed/web.png" class="img-fluid" alt="25px"></a></span>
                            <h4>Website</h4>
                            <p><a>Website Politeknik</a></p>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <span><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTLGJKqWWZGcZdkDvppcPbmsPWqNxNGdkRjLtsPhTJksfNbQPQzNkJfTBsqHtrWPhktJBB"><img src="assets/img/sosmed/email.png" class="img-fluid" alt="25px"></a></span>
                            <h4>E-mail</h4>
                            <p><a>ruangupdated@gmail.com</a></p>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <span><a href="https://www.instagram.com/ruangupdate/"><img src="assets/img/sosmed/ig.png" class="img-fluid" alt="25px"></a></span>
                            <h4>Instagram</h4>
                            <p><a>@ruangupdate
                                </a></p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <-- Sosmed Section -->

    </main><!-- End #main -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Footer -->
    <?php include "footer.php" ?>

   
