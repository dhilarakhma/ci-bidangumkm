<?php
include 'app/function/function_data_identitas.php';
// include 'app/function/function_bantuan.php';

if (isset($_POST['simpan_data'])) {
    // data individu
    $no_kk = $_POST['no_kk'];
    $nik = $_POST['nik'];
    
    $cek_nik = $mysqli->query("SELECT * FROM tabel_identitas WHERE NIK='$nik'");
    if (mysqli_num_rows($cek_nik) > 0) {
        ?>
            <script>
                alert("Maaf, NIK yang anda masukkan sudah ada!");
                document.location.href = 'input_data_identitas';
            </script>
        <?php
        return false;
    }

    $nm = $_POST['nm'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $birthDate = new DateTime($tgl_lahir);
    $today = new DateTime("today");

    $tahun = $today->diff($birthDate)->y;
    $bulan = $today->diff($birthDate)->m;
    $hari = $today->diff($birthDate)->d;

    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kab = $_POST['kab'];
    // var_dump($no_kk, $nik, $nm, $jk, $tmp_lahir, $tgl_lahir, $tahun, $bulan, $hari, $hubkel, $nm_ayah, $nm_ibu, $pend_terakhir, $pekerjaan, $penghasilan, $dusun);

    // data usaha
    $nm_usaha = isset($_POST['nm_usaha']) ? $_POST['nm_usaha'] : NULL;
    $jn_produk = isset($_POST['jn_produk']) ? $_POST['jn_produk'] : NULL;
    $sek_usaha = isset($_POST['sek_usaha']) ? $_POST['sek_usaha'] : NULL;
    $modal = isset($_POST['modal']) ? $_POST['modal'] : NULL;
    $omset = isset($_POST['omset']) ? $_POST['omset'] : NULL;
    // var_dump($nm_usaha, $jn_produk, $sek_usaha, $modal, $omset);

    //data bantuan
    // $bantuan = isset($_POST['penerima_bantuan']) ? $_POST['penerima_bantuan'] : NULL;
    // $jenis_bantuan = isset($_POST['jenis_bantuan']) ? $_POST['jenis_bantuan'] : NULL;

    $sql_identitas = $mysqli->query("INSERT INTO tabel_identitas (NO_KK, NIK, NAMA, JK, TMPT_LHR, TGL_LHR, ALAMAT, DESA, KEC, KAB) 
    VALUES ('$no_kk', '$nik', '$nm','$jk', '$tmp_lahir', '$tgl_lahir', '$alamat', '$desa', '$kecamatan', '$kab')");

    // $sql_tabungan = $mysqli->query("INSERT INTO tabel_tabungan (NIK, NAMA, KEPEMILIKAN_TABUNGAN, JENIS_TABUNGAN, HARGA) 
    // VALUES ('$nik', '$nm', '$kepem_tabungan', '$jenis_tabungan', '$harga')");

    $sql_usaha = $mysqli->query("INSERT INTO tabel_usaha (NIK, NAMA, NAMA_USAHA, JENIS_PRODUK, SEKTOR_USAHA, MODAL, OMSET) 
    VALUES ('$nik', '$nm', '$nm_usaha', '$jn_produk', '$sek_usaha', '$modal', '$omset')");

    // $sql_pekerjaan = $mysqli->query("INSERT INTO tabel_pekerjaan (NIK, NAMA, PEKERJAAN, PENGHASILAN_PER_BULAN) VALUES('$nik', '$nm', '$pekerjaan', '$penghasilan')");

    // $sql_pendidikan = $mysqli->query("INSERT INTO tabel_pendidikan (NIK, NAMA, PENDIDIKAN_TERAKHIR) VALUES ('$nik', '$nm', '$pend_terakhir')");



    if ($sql_identitas && $sql_usaha) {
?>
        <script>
            alert("Data Berhasil Disimpan.");
            document.location.href = "data_identitas";
        </script>
    <?php
    }
}

if (isset($_POST['hapus_data'])) {
    $nik = $_POST['nik'];
    $sql_identitas = $mysqli->query("DELETE FROM tabel_identitas WHERE NIK='$nik'");
    $sql_usaha = $mysqli->query("DELETE FROM tabel_usaha WHERE NIK='$nik'");
  

    if ($sql_identitas && $sql_usaha) {
    ?>
        <script>
            alert("Data Berhasil Dihapus.");
            document.location.href = "data_identitas";
        </script>
<?php
    }
}



