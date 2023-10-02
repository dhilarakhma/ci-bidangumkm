<?php
    include '../koneksi.php';
    $url= "http://$_SERVER[HTTP_HOST]/ci-bidangumkm/";
    $sql_profil = "SELECT * FROM tabel_control WHERE id=1";
    $result_profil = $mysqli->query($sql_profil);
    $row_profil = $result_profil->fetch_object();
?>
<html>

<head>
    <title>Data Pemilik Usaha</title>
    <style>
        @page {
            size: landscape;
        }

        body {
            font-family: 'Times New Roman', sans-serif;
        }

        .display-body {
            font-size: 10px;
            border: 1px solid black;
            width: 100%;
            border-collapse: collapse;
        }

        .display-body th {
            padding: 8px;
        }

        .display-body th,
        .display-body td {
            border: 1px solid black;
        }

        .display-header {
            margin-bottom: 1rem;
        }

        .display-header td {
            text-align: center;
        }

        .title-header {
            font-size: 1.2rem;
            font-weight: bold;
        }

        h4 {
            text-align: center;
        }

        .background-tr {
            background-color: silver;
        }
    </style>
</head>

<body>
    <table width="100%" class="display-header">
        <tr>
            <td>
                <img src="<?= $url; ?>dist/img/<?= $row_profil->logo_desa; ?>" alt="logo-kab" width="50">
            </td>
        </tr>
        <tr>
            <td>
                <span class="title-header">Kantor <?= $row_profil->nama_desa; ?></span><br>
                <small><?= $row_profil->alamat; ?></small>
            </td>
        </tr>
    </table>

    <h4>Data Pemilik Usaha</h4>

    <table width="100%" class="display-body">
        <thead>
            <tr>
                <th width="10%">No KK</th>
                <th width="10%">NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Alamat</th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
            </tr>
        </thead>
        <tbody>
            <?php
           $sql = $mysqli->query("SELECT * FROM tabel_identitas JOIN tabel_usaha
           ON tabel_identitas.NIK=tabel_usaha.NIK ORDER BY tabel_identitas.NO_KK DESC");
           while ($row = $sql->fetch_assoc()) {
               $sql_kecamatan = $mysqli->query("SELECT * FROM tabel_kecamatan WHERE id='$row[KEC]'");
               $row_kecamatan = $sql_kecamatan->fetch_assoc();
            ?>
                <?php if ($row['HBKEL'] == 1) : ?>
                    <tr align="center" class="background-tr">
                    <?php else : ?>
                    <tr align="center">
                    <?php endif; ?>
                    <td><?= $row['NO_KK']; ?></td>
                    <td><?= $row['NIK']; ?></td>
                    <td><?= $row['NAMA']; ?></td>
                    <td>
                        <?php if ($row['JK'] == 1) : ?>
                            Laki-laki
                        <?php elseif ($row['JK'] == 2) : ?>
                            Perempuan
                        <?php else : ?>
                            -
                        <?php endif; ?>
                    </td>
      
                    <td><?= $row['TMPT_LHR']; ?></td>
                    <td><?= date("d-m-Y", strtotime($row['TGL_LHR'])); ?></td>
                    <td><?= $row['ALAMAT']; ?></td>
                    <td><?= $row['DESA']; ?></td>
                    <td><?= $row_kecamatan['kecamatan']; ?></td>
                    <td><?= $row['KAB']; ?></td>
                    
                    </tr>
                <?php
            }
                ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>