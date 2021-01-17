<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Hasil Panen</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_hasilpanen WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengiriman Produksi </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA HASIL PANEN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Laporan</td> <td><?= $data['laporan'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">No Field</td> <td><?= $data['no_field'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pemanen</td> <td><?= $data['nama_pemanen'] ?></td>
                                </tr>
                                <tr>
                                    <td>Hasil Panen</td> <td><?= $data['hasil_panen'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Panen</td> <td><?= $data['tgl_panen'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                                </tr>
								
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Produksi</u><br>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>