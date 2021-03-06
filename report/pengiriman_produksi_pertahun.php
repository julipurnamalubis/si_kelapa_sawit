<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pengririman Produksi Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengiriman Produksi </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PENGIRIMAN PRODUKSI TAHUN   <?php echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
                                    <th>No.</th><th>Nomor Field</th><th>Total Pengiriman</th><th>Tanggal Pengiriman </th><th>Tanggal Kembali</th><th>Lama Pengiriman</th><th>Keterangan</th>
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pengiriman_produksi WHERE substr(tgl_pengiriman,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $data['no_field'] ?></td>
                                        <td><?= $data['pengirim'] ?></td>
                                         <td><?= $data['tgl_pengiriman'] ?></td>
                                         <td><?= $data['tgl_kembali_pengiriman'] ?></td>
                                         <td><?= $data['lama_pengiriman'] ?></td>
                                         <td><?= $data['keterangan'] ?></td>
                                    </tr>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Produksi<strong></u><br>
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
