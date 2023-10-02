<?php
$sql_pria = $mysqli->query("SELECT * FROM tabel_identitas WHERE JK='1'");
$sql_wanita = $mysqli->query("SELECT * FROM tabel_identitas WHERE JK='2'");
$sql_total = $mysqli->query("SELECT * FROM tabel_identitas");


// $total_ds1 = mysqli_num_rows($sql_diploma) + mysqli_num_rows($sql_s1);
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Dinas Koperasi UMKM Perdagangan dan Perindustrian</h1>
                <p style="text-align: justify;">
                Diskuperdagin merupakan unsur pelaksana urusan pemerintahan bidang Koperasi, Usaha Kecil dan Menengah, urusan pemerintahan bidang Perdagangan, serta urusan pemerintahan bidang Perindustrian.
                </p>
                <!-- <div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-get-started scrollto">Lihat Daftar Penerima Bantuan</a>
                </div> -->
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="<?= $base_url; ?>asset_user/img/hero.gif" class="img-fluid animated" alt="">
            </div>
        </div>


        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pencarian Lebih Lengkap</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="filter" method="GET">
                        <div class="modal-body"> 
                            <!-- kecamatan -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pencarian_cek" class="col-form-label"><b>Pencarian Berdasarkan ?</b></label><br>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="pencarian" class="form-check-input" value="rekomendasi">
                                                Rekomendasi Penerima Bantuan
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="pencarian" class="form-check-input" value="penerima">
                                                Penerima Bantuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Tipe bantuan -->
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kecamatan" class="col-form-label"><b>kecamatan</b></label>
                                        <select id="kecamatan" name="kecamatan" class="form-control">
                                            <option value="" hidden>Pilih kecamatan</option>
                                            <?php
                                            $result_kecamatan = $mysqli->query("SELECT * FROM tabel_kecamatan");
                                            while ($rows_kecamatan = $result_kecamatan->fetch_object()) {
                                                echo "
                                                    <option value='$rows_kecamatan->id'>$rows_kecamatan->kecamatan</option>
                                                ";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis_bantuan" class="col-form-label"><b>Jenis Bantuan</b></label>
                                        <select id="jenis_bantuan" name="jenis_bantuan" class="form-control pencek">
                                            <option value="" hidden>--Pilih Jenis Bantuan--</option>
                                            <option value="BPNT">Bantuan Sembako (BPNT)</option>
                                            <option value="PKH">Bantuan PKH</option>
                                            <option value="BST">Bantuan Sosial Tunai (BST)</option>
                                            <option value="BLT">Bantuan Langsung Tunai Dana Desa (BLT-Dana Desa)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="terapkan" value="filter_data" class="btn text-light" style="background-color: #042165;">Terapkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <!-- akhir modal -->

    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">



            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Sektor Usaha</h2>
                            <!-- <br><center><p>Repost by <a href='https://www.youtube.com/channel/UCx3PUtu_kx419AsD182REGA' title='' target='_blank'>Bayu Tutor</a></p></center> -->
                            
                            <!-- pencarian -->
                            <!-- <form class="d-flex custom-search" action="search" method="GET">
                                <input class="form-control me-2" type="number" name="nik" placeholder="Masukan NIK Kepala Keluarga" aria-label="Search" required>
                                <button class="btn text-light me-2" type="submit" style="background-color: #042165;">Cari</button>
                            </form> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- <div class="row justify-content-center">
            <div class="col-lg-2 d-flex align-items-center justify-content-center about-img">
                <img src="<?= $base_url; ?>asset_user/img/pencarian.png" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="text-center">
                <h6>Cari Informasi Penerima Bantuan</h6>
                <p>Untuk mengecek siapa saja yang menerima bantuan, Anda dapat memulai dengan Memasukkan NIK dari kepala keluarga yang ingin dicari.</p>
            </div>
        </div> -->

        <div class="row justify-content-center mt-5">
            <div class="col-lg-2 d-flex align-items-center justify-content-center about-img pb-3">
                <img src="<?= $base_url; ?>asset_user/img/logo2022.png" style="width: 300px !important;" alt="logo" data-aos="zoom-in">
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 text-center">
                    <p>
                    Sektor usaha merupakan salah satu pilar utama dalam perekonomian suatu negara, yang mencakup beragam kegiatan ekonomi dari pertanian, industri, jasa, hingga perdagangan. Pertumbuhan dan perkembangan sektor usaha dapat memiliki dampak signifikan terhadap tingkat kesempatan kerja, pendapatan nasional, dan kesejahteraan masyarakat.
                    
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Kependudukan ======= -->

    <!-- demo grafipenduduk -->
    <section id="Demografi" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Kependudukan</h2>
                <p>Demografi Penduduk </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?= $base_url; ?>asset_user/img/4x/laki@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Laki-laki</a></h4>
                        <p class="description">Jumlah pemilik usaha laki-laki yang berada di Kab. Cianjur adalah <b><?= mysqli_num_rows($sql_pria); ?></b> Orang</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img src="<?= $base_url; ?>asset_user/img/4x/perempuan@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Perempuan</a></h4>
                        <p class="description">Jumlah pemilik usaha perempuan yang berada di Kab. Cianjur adalah <b><?= mysqli_num_rows($sql_wanita); ?></b> Orang</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img src="<?= $base_url; ?>asset_user/img/4x/total@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Total</a></h4>
                        <p class="description">Total pemilik usaha laki-laki dan perempuan yang berada di Kab. Cianjur adalah <b><?= mysqli_num_rows($sql_total); ?></b> Orang</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- akhir Demografi Penduduk -->

    <!-- kecamatan -->
    <section id="kecamatan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Sektor Usaha</h2>
                <p>Kecamatan</p>
            </div>

            <div class="row justify-content-center">
                <?php
                $query_kecamatan = $mysqli->query("SELECT * FROM tabel_kecamatan");
                while ($rows_kecamatan = $query_kecamatan->fetch_assoc()) {
                ?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="<?= $base_url; ?>asset_user/img/4x/kecamatan_1@4x-8.png" alt=""></div>
                            <h4 class="title"><a href=""><?= $rows_kecamatan['kecamatan']; ?></a></h4>
                            <p class="description">
                                Jumlah pemilik usaha yang berada di Kecamatan <?= $rows_kecamatan['kecamatan']; ?> adalah
                                <b>
                                    <?php
                                    $tot_kecamatan = $mysqli->query("SELECT * FROM tabel_identitas WHERE KEC='$rows_kecamatan[id]'");
                                    echo mysqli_num_rows($tot_kecamatan);
                                    ?>
                                </b>
                                Usaha
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </section>
    <!-- end kecamatan -->

    <!-- End Kependudukan -->


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Hubungi kami untuk memulai</p>
            </div>

            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi:</h4>
                                    <p><?= $row_profil->alamat; ?></p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p><?= $row_profil->email; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="info">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.697808418771!2d107.14968427419106!3d-6.806566466571002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852e281da81df%3A0x5ae15452b5b51767!2sDinas%20Koperasi%20UKM%2C%20Perdagangan%20Dan%20Perindustrian!5e0!3m2!1sid!2sid!4v1695867777872!5m2!1sid!2sid" width="680" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->