<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pengiriman Produksi</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pengiriman_produksi WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Field</td> <td><?= $data['no_field'] ?></td>
                        </tr>
                        <tr>
                            <td>Total Pengiriman</td> <td><?= $data['pengirim'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengiriman</td> <td><?= $data['tgl_pengiriman'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Kembali</td> <td><?= $data['tgl_kembali_pengiriman'] ?></td>
                        </tr>
                        <tr>
                            <td>Lama Pengiriman</td> <td><?= $data['lama_pengiriman'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pengiriman_produksi&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pengirman Produksi </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

