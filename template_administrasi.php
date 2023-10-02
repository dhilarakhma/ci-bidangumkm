<?php
?>
<html>
  <body style="font-size:15px">
    <table border="0" cellpadding="1" width="80%">
      <tbody>
        <tr>
          <td align="left" width="200">
            <img src="logo.jpeg" alt="logo" width="80px">  
          </td>
          <td valign="bottom" align="center" width="300">
              <span>
                <b>PEMERINTAH KABUPATEN KETAPANG<br>
                    KECAMATAN SUNGAI LAUR<br>
                </b>
              </span>
              <div style="font-size: larger;">
                <span>
                  <b>DESA BAYUN SARI</b><br>
                </span>
              </div>
              <span style="font-size:12px">
                Alamat : Jalan Sawit Raya<br>
                <i>Email : pemdes.bayunsari@gmail.com</i><br>
              </span>
          </td>
          <td valign="bottom" align="right" width="200">
              <span style="font-size:12px;font-style:italic">
                Kode Pos : 78872<br>
                No. HP/WA : 0821-4938-2428
              </span>
          </td>
        </tr>
      </tbody>
    </table>
    <table align="center" border="0" cellpadding="1" width="80%">
      <tbody>
        <tr>
          <td colspan="3" align="center">
              <hr />
              <span style="font-size:20px">
                <u><b>SURAT KETERANGAN USAHA</b></u><br>
              </span>
              <span style="font-size:17px">
                NOMOR: B / . . . . / SET.145 / III / 2023
              </span>
          </td>
        </tr>
        <tr>
          <td colspan="3" valign="top" align="justify">
              <span style="font-size:17px">
                <br>
                Yang bertanda tangan dibawah ini Kepala Desa Bayun Sari Kecamatan Sungai Laur Kabupaten Ketapang, Dengan ini menyatakan bahwa:
              </span>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <table border="0" cellpadding="1">
              <tbody>
                <br>
                <tr>
                  <td width="200">
                    <span style="font-size:17px">1. Nama Lengkap</span>
                  </td>
                  <td width="8">
                    <span style="font-size:17px">:</span>
                  </td>
                  <td width="500">
                    <span style="font-size:17px">
                        <?php
                            echo $_POST['nama']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">2. NIK</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['nik']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">3. Jenis Kelamin</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['jk']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">4. Tempat Tanggal Lahir</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['ttl']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">5. Pekerjaan</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['pekerjaan']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">6. Kewarganegaraan</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">Indonesia</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">7. Agama</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['agama']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">8. Status Perkawinan</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['status_perkawinan']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px">9. Alamat</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['alamat']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-size:17px"></span>
                  </td>
                  <td>
                    <span style="font-size:17px"></span>
                  </td>
                  <td>
                    <table border="0" cellpadding="1">
                      <tbody>
                        <tr>
                          <td width="120">
                            <span style="font-size:17px">a. Kel/Desa</span>
                          </td>
                          <td width="8">
                            <span style="font-size:17px">:</span>
                          </td>
                          <td width="100">
                            <span style="font-size:17px">Bayun Sari</span>
                          </td>
                        </tr>
                        <tr>
                          <td width="100">
                            <span style="font-size:17px">b. Kecamatan</span>
                          </td>
                          <td width="8">
                            <span style="font-size:17px">:</span>
                          </td>
                          <td width="100">
                            <span style="font-size:17px">Sungai Laur</span>
                          </td>
                        </tr>
                        <tr>
                          <td width="100">
                            <span style="font-size:17px">c. Kabupaten</span>
                          </td>
                          <td width="8">
                            <span style="font-size:17px">:</span>
                          </td>
                          <td width="100">
                            <span style="font-size:17px">Ketapang</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="3" valign="top">
            <div align="justify">
              <span style="font-size:17px">
                <br>
                Menerangkan lain-lain:<br>
                Adalah benar yang bersangkutan tersebut diatas merupakan penduduk Desa Bayun Sari yang saat ini mempunyai:
              </span>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <table border="0" cellpadding="1" style="font-weight: bold;">
              <tbody>
                <tr>
                  <td width="100">
                    <span style="font-size:17px">USAHA</span>
                  </td>
                  <td width="8">
                    <span style="font-size:17px">:</span>
                  </td>
                  <td width="500">
                    <span style="font-size:17px"></span>
                  </td>
                </tr>
              </tbody>
            </table>
            <table border="0" cellpadding="1" style="font-weight: bold;">
              <tbody>    
                <tr>
                  <td width="100">
                    
                  </td>  
                  <td width="200">
                    <span style="font-size:17px">1. Usaha Sekarang</span>
                  </td>
                  <td width="8">
                    <span style="font-size:17px">:</span>
                  </td>
                  <td width="500">
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['usaha_sekarang']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                    <td></td>
                  <td>
                    <span style="font-size:17px">2. Waktu Usaha</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['waktu_usaha']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                <td></td>
                  <td>
                    <span style="font-size:17px">3. Luas Usaha</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span style="font-size:17px">
                    <?php
                            echo $_POST['luas_usaha']
                        ?>
                    </span>
                  </td>
                </tr>
                <tr>
                <td></td>
                  <td>
                    <span style="font-size:17px">4. Alamat Usaha</span>
                  </td>
                  <td>
                    <span style="font-size:17px">:</span>
                  </td>
                  <td>
                    <span>
                    <?php
                            echo $_POST['alamat_usaha']
                        ?>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="3" valign="top">
            <div align="justify">
              <span style="font-size:17px">
                <br>
                Surat keterangan usaha ini berlaku sejak tanggal dikeluarlan s/d 60 hari kedepan.
              </span>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="3" valign="top">
            <div align="justify">
              <span style="font-size:17px">
                <br>
                Demikianlah Surat Keterangan Usaha ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya.
              </span>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <table align="center" border="0" cellpadding="1">
      <tbody>
        <tr>
          <td width="300"></td>
          <td width="200"></td>
          <td valign="top" align="center">
              <span style="font-size:17px">
                <br>
                <br>
                <br>
                <br>  
                Dikeluarkan Di : Merumbuk<br>
                Pada Tanggal : 
                <?php
                    setlocale(LC_TIME, 'id_ID');
                    echo date("d F");
                ?>
                2023<br>
              </span>
              <span>  
                KEPALA DESA BAYUN SARI <br>
              </span>
              <img src="barcode.jpeg" alt="logo" width="150px">
              <br>
              <span><u>ASMAN</u>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>