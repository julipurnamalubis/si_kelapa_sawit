<?php
//membuat query untuk hapus data
$sql="DELETE FROM pengiriman_produksi WHERE id ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=pengiriman_produksi&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=pengiriman_produksin&actions=tampil');</scripr>";
}

