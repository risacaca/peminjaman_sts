<?php
 require_once("database.php");
 $id=$_POST['id'];
 $xbrg = $_POST['barang'];

 $sql2=update("barang",$xbrg,$id);
 if ($sql2) {
    header("location:barang.php");
 }
?>