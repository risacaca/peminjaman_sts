<?php
require_once("database.php");
$data1 = $_POST['no_identitas'];
$data2 = $_POST['status'];
$data3 = $_POST['nama'];
$data4 = $_POST['username'];
$data5 = $_POST['password'];
$data6 = $_POST['role'];
$tgl = date('Y-d-m H:i:s');
$sql="INSERT INTO `user`(`id`, `no_identitas`, `nama`, `status`, `username`, `password`, `role`) VALUES (NULL,'$data1','$data2','$data3','$data4','$data5','$data6')";
var_dump($sql);
$simpan=mysqli_query($dbconnect,$sql);
if($simpan){
    header("location:user.php");
}
?>      