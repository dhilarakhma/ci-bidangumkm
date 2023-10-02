<?php
error_reporting(0);
include 'app/koneksi.php';
$nik = $_GET['id'];
$sql = $mysqli->query("SELECT * FROM tabel_identitas 
                        JOIN tabel_usaha ON tabel_identitas.NIK = tabel_usaha.NIK 
                        WHERE tabel_identitas.NIK = '$nik'");
$row = $sql->fetch_assoc();

if (isset($_POST['edit_data'])) {
    $nik = $_POST['nik'];

    // data individu
    $nokk = $_POST['no_kk'];
    $nm = $_POST['nm'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $birthDate = new DateTime($tgl_lahir);
    $today = new DateTime("today");

    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kab = $_POST['kab'];

    // data usaha
    $nm_usaha = isset($_POST['nm_usaha']) ? $_POST['nm_usaha'] : NULL;
    $jn_produk = isset($_POST['jn_produk']) ? $_POST['jn_produk'] : NULL;
    $sek_usaha = isset($_POST['sek_usaha']) ? $_POST['sek_usaha'] : NULL;
    $modal = isset($_POST['modal']) ? $_POST['modal'] : NULL;
    $omset = isset($_POST['omset']) ? $_POST['omset'] : NULL;

    $sql_identitas = $mysqli->prepare("UPDATE tabel_identitas 
                                    SET NO_KK=?, NAMA=?, JK=?, TMPT_LHR=?, TGL_LHR=?, 
                                    ALAMAT=?, DESA=?, KEC=?, KAB=? 
                                    WHERE NIK = ?");
        $sql_identitas->bind_param("ssssssssi", $nokk, $nm, $jk, $tmp_lahir, $tgl_lahir, $alamat, $desa, $kecamatan, $kab, $nik);
        $sql_identitas->execute();
        $sql_identitas->close();


    $sql_usaha = $mysqli->query("UPDATE tabel_usaha 
                                    SET NAMA='$nm', NAMA_USAHA='$nm_usaha', JENIS_PRODUK='$jn_produk', 
                                    SEKTOR_USAHA='$sek_usaha', modal='$modal', 
                                    omset='$omset' WHERE NIK = '$nik'");
 
    if ($sql_identitas && $sql_usaha) {
?>
        <script>
            alert("Data Berhasil Diedit.");
            document.location.href = "../data_identitas";
        </script>
<?php
    }
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Data Pemilik Usaha</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_identitas">Data Pemilik Usaha</a></li>
                    <li class="breadcrumb-item active">Edit Data Pemilik Usaha</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form action="" method="POST">
        <a href="../data_identitas" class="btn text-light" style="background-color: #042165;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="card mt-3">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Pemilik Usaha</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">No KK</label>
                            <input type="text" name="no_kk" class="form-control" id="" value="<?= $row['NO_KK']; ?>" placeholder="Masukkan No.KK">
                        </div>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" name="nik" class="form-control" id="" value="<?= $nik; ?>" placeholder="Masukkan NIK" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nm" class="form-control" id="" value="<?= $row['NAMA']; ?>" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2" name="jk" style="width: 100%;">
                                <option hidden>--Pilih Jenis Kelamin--</option>
                                <?php if ($row['JK'] == 1) : ?>
                                    <option value="1" selected>Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                <?php else : ?>
                                    <option value="1">Laki-laki</option>
                                    <option value="2" selected>Perempuan</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" class="form-control" id="" value="<?= $row['TMPT_LHR']; ?>" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?= $row['TGL_LHR']; ?>" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $row['ALAMAT']; ?>" id="" placeholder="Masukkan Alamat">
                        </div>
                        <div class="form-group">
                            <label for="">Desa</label>
                            <input type="text" name="desa" class="form-control" value="<?= $row['DESA']; ?>" id="" placeholder="Masukkan Desa">
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select class="form-control select2" name="kecamatan" style="width: 100%;">
                                <option hidden>--Pilih Kecamatan--</option>
                                    <?php  
                                        $result_kecamatan= $mysqli->query("SELECT * FROM tabel_kecamatan");
                                        while($rows_kecamatan = $result_kecamatan->fetch_object()) {

                                            if($row['kecamatan'] == $rows_kecamatan->kecamatan) {
                                                echo"
                                                    <option value='$rows_kecamatan->id' selected>$rows_kecamatan->kecamatan</option>
                                                ";
                                            } else {
                                                echo"
                                                    <option value='$rows_kecamatan->id'>$rows_kecamatan->kecamatan</option>
                                                ";
                                            }
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" name="kab" class="form-control" value="<?= $row['KAB']; ?>" id="" placeholder="Masukkan Kabupaten">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="dataUsaha">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Usaha</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Usaha</label>
                            <input type="text" name="nm_usaha" class="form-control" value="<?= $row['NAMA_USAHA']; ?>" id="" placeholder="Masukkan Nama Usaha">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Produk</label>
                            <input type="text" name="jn_produk" class="form-control" value="<?= $row['JENIS_PRODUK']; ?>" id="" placeholder="Masukkan Jenis Produk">
                        </div>
                        <div class="form-group">
                            <label>Sektor Usaha</label>
                            <select class="form-control select2" name="sek_usaha" style="width: 100%;">
                                <option value="0" hidden>--Pilih Sektor Usaha--</option>
                                <?php if ($row['SEKTOR_USAHA'] == 1) : ?>
                                    <option value="1" selected>Perdagangan</option>
                                    <option value="2">Kuliner - Makanan</option>
                                    <option value="3">Kuliner - Minuman</option>
                                    <option value="4">Fashion</option>
                                <?php elseif ($row['SEKTOR_USAHA'] == 2) : ?>
                                    <option value="1">Perdagangan</option>
                                    <option value="2" selected>Kuliner - Makanan</option>
                                    <option value="3">Kuliner - Minuman</option>
                                    <option value="4">Fashion</option>
                                <?php elseif ($row['SEKTOR_USAHA'] == 3) : ?>
                                    <option value="1">Perdagangan</option>
                                    <option value="2">Kuliner - Makanan</option>
                                    <option value="3" selected>Kuliner - Minuman</option>
                                    <option value="4">Fashion</option>
                                <?php elseif ($row['SEKTOR_USAHA'] == 4) : ?>
                                    <option value="1">Perdagangan</option>
                                    <option value="2">Kuliner - Makanan</option>
                                    <option value="3">Kuliner - Minuman</option>
                                    <option value="4"selected>Fashion</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Modal</label>
                            <input type="text" name="modal" class="form-control" value="<?= $row['MODAL']; ?>" id="" placeholder="Masukkan Modal">
                        </div>
                        <div class="form-group">
                            <label for="">Omset</label>
                            <input type="text" name="omset" class="form-control" value="<?= $row['OMSET']; ?>" id="" placeholder="Masukkan Omset">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="submit" name="edit_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Perubahan Data</button>
            </div>
        </div>
    </form>
</section>

<!-- <script src="<?= $base_url; ?>plugins/jquery/jquery.min.js"></script> -->
<!-- <script>
    if ($(".jkjk").val() == "3") {
        const html = `
        <div class="form-group" id="jkjkjk">
            <label>Ibu Hamil ?</label>
            <div style="margin-bottom:-9.5px;">
            <?php if ($row['ibu_hamil'] == 1) : ?>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ibu_hamil" value="1" checked>
                <label class="form-check-label">Ya</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ibu_hamil" value="0">
                <label class="form-check-label">Tidak</label>
              </div>
            <?php elseif ($row['ibu_hamil'] == 0) : ?>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ibu_hamil" value="1">
                <label class="form-check-label">Ya</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ibu_hamil" value="0" checked>
                <label class="form-check-label">Tidak</label>
              </div>
            <?php else : ?>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ibu_hamil" value="1">
                <label class="form-check-label">Ya</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ibu_hamil" value="0">
                <label class="form-check-label">Tidak</label>
              </div>
            <?php endif; ?>
            </div>
        </div>
      `;
        $(".formjkjk").append(html);
    } else {
        $("#jkjkjk").remove();
    }

    if ($(".jkjk").val() == "3") {
        $("#dataUsaha").hide();
        $("#dataTabunganBantuan").hide();
    } else if ($(".jkjk").val() == "9") {
        $("#dataUsaha").hide();
        $("#dataTabunganBantuan").hide();
    } else {
        $("#dataUsaha").show();
        $("#dataTabunganBantuan").show();
    }
</script> -->