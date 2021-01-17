<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_hasilpanen WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Panen</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="laporan" class="col-sm-3 control-label">Laporan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="laporan" class="form-control">
                                    <option value="laporan hasil">Laporan Hasil</option>
                                    <option value="laporan produksi">Laporan Produksi</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_field" class="col-sm-3 control-label">Nomor field</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_field" value="<?=$data['no_field']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor field" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_pemanen" class="col-sm-3 control-label">Nama Pemanen</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemanen" value="<?=$data['nama_pemanen']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pemanen" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="hasil_panen" class="col-sm-3 control-label">Hasil Panen</label>
                            <div class="col-sm-9">
                                <input type="text" name="hasil_panen" value="<?=$data['hasil_panen']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Hasil Panen" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_panen" class="col-sm-3 control-label">Tanggal Panen</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_panen" value="<?=$data['tgl_panen']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Panen" required>
                            </div>
                         <!--Status-->

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="keterangan" class="form-control">
                                    <option value="panen">Panen</option>
                                    <option value="tidak panen">Tidak Panen</option>
                                    <option value="Penghapusan">Penghapusan</option>
                                </select>
                            </div>
                        </div>
                           <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=hasilpanen&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data 
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $laporan=$_POST['laporan'];
    $nomorfield=$_POST['no_field'];
    $namapemanen=$_POST['nama_pemanen'];
    $hasilpanen=$_POST['hasil_panen'];
  $tglpanen=$_POST['tgl_panen'];
    $keterangan=$_POST['keterangan'];
 
    //buat sql
    $sql="UPDATE tbl_hasilpanen SET laporan='$laporan', no_field='$nomorfield',
    nama_pemanen='$namapemanen',hasil_panen='$hasilpanen',tgl_panen='$tglpanen',keterangan='$keterangan' WHERE id='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=hasilpanen&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
