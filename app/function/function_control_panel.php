<?php

function tampil_kecamatan($mysqli)
{
    $sql = "SELECT * FROM tabel_kecamatan";
    $result = $mysqli->query($sql);
    $no = 1;
    while ($row = $result->fetch_object()) {
        echo "";
?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->kecamatan; ?></td>
            <td>
                <form action="" method="post">
                    <button type="button" class="btn btn-sm btn-warning text-light" data-toggle="modal" data-target="#modal-edit<?= $row->id; ?>">
                        <i class="fas fa-edit"></i>
                    </button>

                    <input type="hidden" name="id_kecamatan" value="<?= $row->id; ?>">
                    <button type="submit" name="hapus_kecamatan" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>

        <div class="modal fade" id="modal-edit<?= $row->id; ?>">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Edit Kecamatan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="id_kecamatan" value="<?= $row->id; ?>">
                        <div class="modal-body">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="<?= $row->kecamatan; ?>">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="edit_kecamatan" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<?php
        echo "";
    }
}
