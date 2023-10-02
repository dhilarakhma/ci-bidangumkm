<?php
include 'app/function/function_control_panel.php';
include 'app/upload_img.php';

if (isset($_POST['tambah_kecamatan'])) {
    $kecamatan = $_POST['kecamatan'];

    $sql = $mysqli->query("INSERT INTO tabel_kecamatan (kecamatan) VALUES ('$kecamatan')");

    if ($sql) {
?>
        <script>
            alert('Data berhasil disimpan.');
            document.location.href = 'control_panel';
        </script>
<?php
    }
}

if (isset($_POST['edit_kecamatan'])) {
    $id = $_POST['id_kecamatan'];
    $kecamatan = $_POST['kecamatan'];

    $sql = $mysqli->query("UPDATE tabel_kecamatan SET kecamatan='$kecamatan' WHERE id='$id'");

    if ($sql) {
?>
        <script>
            alert('Data berhasil diubah.');
            document.location.href = 'control_panel';
        </script>
<?php
    }
}

if (isset($_POST['hapus_kecamatan'])) {
    $id = $_POST['id_kecamatan'];

    $sql = $mysqli->query("DELETE FROM tabel_kecamatan WHERE id='$id'");

    if ($sql) {
?>
        <script>
            alert('Data berhasil dihapus.');
            document.location.href = 'control_panel';
        </script>
<?php
    }
}

if (isset($_POST['edit_profil'])) {
    $id = $_POST['id_profil'];
    $nama_dinas = $_POST['nama_dinas'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $maps = $_POST['maps'];
    $logoLama = $_POST['logo_sebelumnya'];

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4) {
        $logo = $logoLama;
    }else{
        $logo = upload_img($url);
    }

    $sql = $mysqli->query("UPDATE tabel_control SET nama_dinas='$nama_dinas',logo_dinas='$logo',alamat='$alamat',maps='$maps',email='$email' WHERE id='$id'");

    if ($sql) {
?>
        <script>
            alert('Profil berhasil diubah.');
            document.location.href = 'control_panel';
        </script>
<?php
    }
}