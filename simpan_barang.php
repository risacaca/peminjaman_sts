<?php
require_once("database.php");
$data1 = $_POST['kode_barang'];
$data2 = $_POST['nama_barang'];
$data3 = $_POST['kategori'];
$data4 = $_POST['merek'];
$data5 = $_POST['jumlah'];
$sql="INSERT INTO `barang`(`id`, `kode_barang`, `nama_barang`, `kategori`, `merek`, `jumlah`) VALUES (null,'$data1','$data2','$data3','$data4','$data5')";
// var_dump($sql);
$simpan=mysqli_query($dbconnect,$sql);
if($simpan){
    header("location:barang.php");
}
?>