 <!-- Content Header (Page header) -->
 <section class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h3><i class="fas fa-plus-square"></i> Input Data Pemilik Usaha</h3>
             </div>
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="data_identitas">Data Pemilik Usaha</a></li>
                     <li class="breadcrumb-item active">Input Data Pemilik Usaha</li>
                 </ol>
             </div>
         </div>
     </div><!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">
     <!-- Default box -->

     <form action="data_identitas" method="POST">
         <a href="data_identitas" class="btn text-light" style="background-color: #042165;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
         <div class="card mt-3">
             <div class="card-header" style="background-color: #042165;">
                 <h3 class="card-title text-white">Data Pemilik Usaha</h3>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="">No KK</label>
                             <input type="number" name="no_kk" class="form-control" id="" placeholder="Masukkan No.KK">
                         </div>
                         <div class="form-group">
                             <label for="">NIK</label>
                             <input type="number" name="nik" class="form-control" id="" placeholder="Masukkan NIK">
                         </div>
                         <div class="form-group">
                             <label for="">Nama</label>
                             <input type="text" name="nm" class="form-control" id="" placeholder="Masukkan Nama Lengkap">
                         </div>

                         <div class="form-group">
                             <label>Jenis Kelamin</label>
                             <select class="form-control select2" name="jk" style="width: 100%;">
                                 <option hidden>--Pilih Jenis Kelamin--</option>
                                 <option value="1">Laki-laki</option>
                                 <option value="2">Perempuan</option>
                             </select>
                         </div>

                         <div class="form-group">
                             <label for="">Tempat Lahir</label>
                             <input type="text" name="tmp_lahir" class="form-control" id="" placeholder="Masukkan Tempat Lahir">
                         </div>
                         <div class="form-group">
                             <label for="">Tanggal Lahir</label>
                             <input type="date" name="tgl_lahir" class="form-control" id="">
                         </div>
                         <div class="form-group">
                             <label for="">Alamat</label>
                             <input type="text" name="alamat" class="form-control" id="" placeholder="Masukkan Alamat">
                         </div>
                         <div class="form-group">
                             <label for="">Desa</label>
                             <input type="text" name="desa" class="form-control" id="" placeholder="Masukkan Desa">
                         </div>
                         <div class="form-group">
                             <label for="">Kecamatan</label>
                             <select class="form-control select2" name="kecamatan" style="width: 100%;">
                                    <option hidden>--Pilih Kecamatan--</option>
                                    <?php  
                                        $result_kecamatan= $mysqli->query("SELECT * FROM tabel_kecamatan");
                                        while($rows_kecamatan = $result_kecamatan->fetch_object()) {
                                            echo"
                                                <option value='$rows_kecamatan->id'>$rows_kecamatan->kecamatan</option>
                                            ";
                                        }
                                    ?>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="">Kabupaten</label>
                             <input type="text" name="kab" class="form-control" id="" placeholder="Masukkan Kabupaten">
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
                             <input type="text" name="nm_usaha" class="form-control" id="" placeholder="Masukkan Nama Usaha">
                         </div>
                         <div class="form-group">
                             <label for="">Jenis Produk</label>
                             <input type="text" name="jn_produk" class="form-control" id="" placeholder="Masukkan Jenis Produk">
                         </div>
                         <div class="form-group">
                             <label>Sektor Usaha</label>
                             <select class="form-control select2" name="sek_usaha" style="width: 100%;">
                                 <option value="0" hidden>--Pilih Sektor Usaha--</option>
                                 <option value="1">Perdagangan</option>
                                 <option value="2">Kuliner - Makanan</option>
                                 <option value="3">Kuliner - Minuman</option>
                                 <option value="4">Fashion</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="">Modal</label>
                             <input type="text" name="modal" class="form-control" id="" placeholder="Masukkan Modal">
                         </div>
                         <div class="form-group">
                             <label for="">Omset</label>
                             <input type="text" name="omset" class="form-control" id="" placeholder="Masukkan Omset">
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-12 mb-3">
                 <button type="submit" name="simpan_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Data</button>
             </div>
         </div>
     </form>
 </section>