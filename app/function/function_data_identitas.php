<?php
function tampil_data($mysqli)
{
    $sql = $mysqli->query("SELECT * FROM tabel_identitas JOIN tabel_usaha
    ON tabel_identitas.NIK=tabel_usaha.NIK ORDER BY tabel_identitas.NO_KK DESC");
    while ($row = $sql->fetch_assoc()) {
        $sql_kecamatan = $mysqli->query("SELECT * FROM tabel_kecamatan WHERE id='$row[KEC]'");
        $row_kecamatan = $sql_kecamatan->fetch_assoc();
?>
        <tr>
            <td><?= $row['NO_KK']; ?></td>
            <td><?= $row['NIK']; ?></td>
            <td><?= $row['NAMA']; ?></td>
            <td>
                <?php if ($row['JK'] == 1) : ?>
                    Laki-laki
                <?php else : ?>
                    Perempuan
                <?php endif; ?>
            </td>
            <td><?= $row['TMPT_LHR']; ?>, <?= tgl_indo($row['TGL_LHR']); ?></td>
            <td><?= $row['ALAMAT']; ?></td>
            <td><?= $row['DESA']; ?></td>
            <td><?= $row_kecamatan['kecamatan']; ?></td>
            <td><?= $row['KAB']; ?></td>
            <td>
                <button type="button" class="btn btn-default" data-toggle="dropdown">
                    <i class="fas fa-cog"></i>
                </button>
                <div class="dropdown-menu">
                    <form action="data_identitas" method="POST">
                        <input type="hidden" name="nik" value="<?= $row['NIK']; ?>">
                        <button class="dropdown-item" type="submit" name="hapus_data" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                    <a href="edit_data_identitas/<?= $row['NIK']; ?>" class="dropdown-item">Edit</a>
                    <a href="detail_identitas/<?= $row['NIK']; ?>" class="dropdown-item">Detail</a>
                </div>
            </td>
        </tr>
<?php
    }
}
?>