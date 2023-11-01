
    <!-- ======= Header ======= -->
    <?php include "header.php" ?>
    </header><!-- End Header -->

    <main id="main">

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="section-header">
                                <h2>Program Kerja Ruang Update Periode 2022/2023</h2>
                            </div>

                            <div class="content">

                                <div class="table-responsive-xl">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Program Kerja</th>
                                                <th>Waktu Pelaksanaan</th>
                                                <th>Konsep</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                include './admin/koneksi.php';
                                                $no=1;
                                                $data = mysqli_query($koneksi,"SELECT * FROM proker");
                                                while($d = mysqli_fetch_assoc($data)){
                                            ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $d['proker_name']; ?></td>
                                                <td><?php echo $d['proker_date']; ?></td>
                                                <td><?php echo $d['proker_konsep']; ?></td>
                                            </tr>

                                            <?php 
                                                }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div><!-- End post content -->

                        </article><!-- End blog post -->
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Footer -->
    <?php include "footer.php" ?>
<!---
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>--->
