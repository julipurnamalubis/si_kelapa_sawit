<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Hasil Panen</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail hasilpanen-->
                    <?php
                    $sql = "SELECT *FROM tbl_hasilpanen WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Laporan</td> <td><?= $data['laporan'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Field</td> <td><?= $data['no_field'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pemanen</td> <td><?= $data['nama_pemanen'] ?></td>
                        </tr>
						<tr>
                            <td>Nomor Hasil Panen</td> <td><?= $data['hasil_panen'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Panen</td> <td><?= $data['tgl_panen'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=hasilpanen&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Hasil Panen </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

