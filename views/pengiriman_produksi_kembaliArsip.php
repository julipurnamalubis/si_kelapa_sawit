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
                    <h3 class="panel-title">Tanggal Kembali Pengiriman Produksi</h3>
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
                            <label for="pengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengirim" value="<?=$data['pengirim']?>" class="form-control" id="inputEmail3" placeholder="Nama Pengirim" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tgl_pengiriman" class="col-sm-3 control-label">Tanggal Pengiriman</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pengiriman" value="<?=$data['tgl_pengiriman']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Pengiriman" readonly="true">
                            </div>
                        </div> 
						
						<div class="form-group">
                            <label for="tgl_Kembali_pengiriman" class="col-sm-3 control-label">Tanggal Kembali Pengiriman</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_kembali_pengiriman" value="<?=$data['tgl_kembali_pengiriman']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Kembali Pengiriman">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tanggal</button>
								<a href="?page=pengiriman_produksi&actions=tampil" class="btn btn-danger"><span class="fa fa-ban"></span> Batal</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$tgl_Pengiriman =$_POST['tgl_Pengiriman'];
		$potTgl = substr($tglPengiriman,8,2);
		$potBln = substr($tglPengiriman,5,2);
		$potThn = substr($tglPengiriman,0,4);
	$tgl_Kembali_pengiriman=$_POST['tgl_Kembali_pengiriman'];
		$potTglKem = substr($tgl_Kembali_pengiriman,8,2);
		$potBlnKem = substr($tgl_Kembali_pengiriman,5,2);
		$potThnKem = substr($tgl_Kembali_pengiriman,0,4);
	$lama_pengiriman = (($potThnKem - $potThn)*360)+(($potBlnKem - $potBln)*30)+($potTglKem - $potTgl);
    //buat sql
    $sql="UPDATE pengirim SET tgl_Kembali_pengirima='$tgl_Kembali_pengiriman', lama_pengiriman='$lama_pengiriman' WHERE no_field='$nope'";
	$sqlHasilpanen="UPDATE tbl_hasilpanen SET status='Ada' WHERE no_field='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengiriman_produksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>