<!-- ======= Footer ======= -->
<footer id="footer" class="footer" >

    <div class="container" >
    <?php 
                              include './admin/koneksi.php';
                              //$no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM tentang_jurnalis");
                              while($d = mysqli_fetch_assoc($data)){
                                  ?>
        <div class="row gy-9">
            <div class="col-lg-6 col-md-12 footer-info"style="float:right;">
                <a href="index.php" class="logo d-flex align-items-center">
                    <span><?php echo $d['nama_jurnalis']; ?></span>
                </a>
                <p><?php echo $d['kampus_Jur']; ?></p>
                <div class="social-links d-flex mt-4">
                    <a href="<?php echo $d['link_ig']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="<?php echo $d['email']; ?>" class="linkedin"><i class="bi bi-envelope"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 footer-contact text-center text-md-start">
                <h4>Kontak Kami</h4>
                <p><?php echo $d['alamat_Jur']; ?><br>
                    <strong>No. Telp/WA:</strong><?php echo $d['no_telp']; ?><br>
                    <strong>Email :</strong><?php echo $d['email']; ?><br>
                </p>
            </div>

        </div>
        <?php
                            //$no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
    </div>

    <div class="container mt-4">
    <?php 
                              include './admin/koneksi.php';
                              //$no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM tentang_jurnalis");
                              while($d = mysqli_fetch_assoc($data)){
                                  ?>
        <div class="copyright">
            &copy; Copyright <strong><span><?php echo $d['nama_jurnalis']; ?></span></strong>. All Rights Reserved.
        </div>
        <?php
                            //$no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo url_dasar()?>./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo url_dasar()?>./assets/vendor/aos/aos.js"></script>
<script src="<?php echo url_dasar()?>./assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo url_dasar()?>./assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo url_dasar()?>./assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo url_dasar()?>./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo url_dasar()?>./assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo url_dasar()?>./assets/js/main.js"></script>

  <!-- Vendor JS Files -->
  <script src="<?php echo url_dasar()?>./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo url_dasar()?>./assets/vendor/aos/aos.js"></script>
  <script src="<?php echo url_dasar()?>./assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo url_dasar()?>./assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo url_dasar()?>./assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo url_dasar()?>./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo url_dasar()?>./assets/vendor/php-email-form/validate.js"></script>

</body>

</html>