<?php
require_once("database.php");
$data1 = $_POST['tgl_peminjaman'];
$data2 = $_POST['tgl_kembali'];
$data3 = $_POST['no_identitas'];
$data4 = $_POST['kode_barang'];
$data5 = $_POST['jumlah'];
$data6 = $_POST['keperluan'];
$data7 = $_POST['status'];
$data8 = '1';
$tgl = date('Y-d-m H:i:s');
$sql="INSERT INTO `peminjaman`(`id`, `tgl_peminjaman`, `tgl_kembali`, `no_identitas`, `kode_barang`, `jumlah`, `keperluan`, `status`, `id_login`)VALUES(null,'$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8')";
var_dump($sql);
$simpan=mysqli_query($dbconnect,$sql);
if($simpan){
    header("location:peminjaman.php");
}
?>      