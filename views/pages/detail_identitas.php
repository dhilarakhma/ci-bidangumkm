<?php $nik = $_GET['id'];
error_reporting(0);
include 'app/post/post_data_identitas.php';  ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3><i class="nav-icon fas fa-user"></i> Detail Data identitas</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data identitas</li>
                    <li class="breadcrumb-item">Detail Data Penduduk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?php
$query = $mysqli->query("SELECT * FROM tabel_identitas JOIN tabel_usaha ON tabel_identitas.NIK = tabel_usaha.NIK WHERE tabel_identitas.NIK = '$nik'");
$row = $query->fetch_assoc();
        $sql_kecamatan = $mysqli->query("SELECT * FROM tabel_kecamatan WHERE id='$row[KEC]'");
        $row_kecamatan = $sql_kecamatan->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <a href="../data_identitas" class="btn text-light" style="background-color: #042165;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">Data Pemilik Usaha</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">No KK</label>
                                    <div class="text-primary"><?= $row['NO_KK'] ?></div>
                                </div>

                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <div class="text-primary"><?= $row['NIK'] ?></div>
                                </div>

                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <div class="text-primary"><?= $row['NAMA'] ?></div>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="text-primary"><?= $row['JK'] == '1' ? 'Laki Laki' : 'Perempuan' ?></div>
                                </div>

                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <div class="text-primary"><?= $row['TMPT_LHR'] ?></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <div class="text-primary"><?= tgl_indo($row['TGL_LHR']) ?></div>
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <div class="text-primary"><?= $row['ALAMAT'] ?></div>
                                </div>
                           
                                <div class="form-group">
                                    <label for="">Desa</label>
                                    <div class="text-primary"><?= $row['DESA'] ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Kecamatan</label>
                                    <div class="text-primary"><?= $row_kecamatan['kecamatan']; ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Kabupaten</label>
                                    <div class="text-primary"><?= $row['KAB'] ?></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$query = $mysqli->query("SELECT * FROM tabel_identitas JOIN tabel_usaha ON tabel_identitas.NIK = tabel_usaha.NIK");
$row2 = $query2->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">Data Usaha</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Usaha</label>
                                    <div class="text-primary"><?= $row['NAMA_USAHA'] ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Produk</label>
                                    <div class="text-primary"><?= $row['JENIS_PRODUK'] ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Sektor Usaha</label>
                                    <div class="text-primary">
                                        <?php
                                        if ($row2['SEKTOR_USAHA'] == '0') {
                                            echo 'Perdagangan';
                                        } else if ($row2['SEKTOR_USAHA'] == '1') {
                                            echo "Kuliner - Makanan";
                                        } else if ($row2['SEKTOR_USAHA'] == '2') {
                                            echo "Kuliner - Minuman";
                                        } else if ($row2['SEKTOR_USAHA'] == '3') {
                                            echo "Fashion";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Modal</label>
                                    <div class="text-primary"><?= $row['MODAL'] ?></div>
                                </div>
                                <div class="form-group">
                                    <label>OMSET</label>
                                    <div class="text-primary"><?= $row['OMSET'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>

<!-- <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">Data Tabungan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-group">
                                    <label>Kepemilikan Tabungan</label><br>
                                    <div class="text-primary">
                                        <?php
                                        if ($row2['KEPEMILIKAN_TABUNGAN'] == '0') {
                                            echo 'Tidak';
                                        } else {
                                            echo "Ya";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Jenis Tabungan</label>
                                    <div class="text-primary">
                                        <?php
                                        if ($row2['JENIS_TABUNGAN'] == '1') {
                                            echo 'Sepeda Motor Kredit';
                                        } else if ($row2['JENIS_TABUNGAN'] == '2') {
                                            echo 'Emas';
                                        } else if ($row2['JENIS_TABUNGAN'] == '3') {
                                            echo 'Hewan Ternak';
                                        } else if ($row2['JENIS_TABUNGAN'] == '4') {
                                            echo 'Kapal Motors';
                                        } else if ($row2['JENIS_TABUNGAN'] == '0') {
                                            echo "Tidak Memiliki Tabungan";
                                        } else {
                                            echo "Barang Modal Lainnya";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Harga</label>
                                <div class="text-primary">
                                    <?php
                                    if ($row2['HARGA'] == '1') {
                                        echo 'Tidak Memiliki Bantuan';
                                    } else {
                                        echo 'Rp. ' . $row['HARGA'];
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">Data Bantuan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-group">
                                    <label>Penerima Bantuan?</label><br>
                                    <div class="text-primary">
                                        <?php
                                        if ($row2['bantuan'] == '0') {
                                            echo 'Tidak';
                                        } else if ($row2['bantuan'] == '1') {
                                            echo "Ya";
                                        } else {
                                            echo "Tidak";
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Jenis Bantuan</label>
                                    <div class="text-primary">
                                        <?php
                                        if ($row2['jenis_bantuan'] == '' || $row2['jenis_bantuan'] == '--Pilih Jenis Bantuan--') {
                                            echo 'Tidak Memiliki Bantuan';
                                        } else {
                                            echo $row2['jenis_bantuan'];
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>  -->