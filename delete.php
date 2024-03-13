<?php
require_once("database.php");
$id  = $_GET['id'];
$sql = Delete("barang", $id);
if ($sql) {
    header("location:barang.php");
}
?>
    