<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pengiriman_produksi WHERE no_field ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pengiriman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_field" class="col-sm-3 control-label">Nomor Field</label>
                            <div class="col-sm-9">
								<input type="text" name="no_field" value="<?=$data['no_field']?>" class="form-control" id="inputEmail3" placeholder="Nomor Field" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="pengirim" class="col-sm-3 control-label">Total Pengiriman</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengirim" class="form-control" id="inputEmail3" placeholder="Nama Pengirim">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgl_pengiriman" class="col-sm-3 control-label">Tanggal Pengiriman</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pengiriman" class="form-control" id="inputEmail3" placeholder="Tanggal Pengiriman"\>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Pengiriman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengiriman_produksi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pengiriman
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $noPerkara=$_POST['no_field'];
	$pengirim=$_POST['pengirim'];
	$tglpengiriman=$_POST['tgl_pengiriman'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO pengiriman_produksi VALUES ('$no_field','$pengirim','$tgl_pengiriman','tgl_kembali_pengiriman','','$ket','')";
	$sqlArsip="UPDATE pengiriman_produksi SET status='pengiriman' WHERE no_field='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan pengiriman Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan pengiriman Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengiriman_produksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>