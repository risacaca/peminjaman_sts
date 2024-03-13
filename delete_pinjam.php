<?php
require_once("database.php");
$id  = $_GET['id'];
$sql = Delete("peminjaman", $id);
if ($sql) {
    header("location:peminjaman.php");
}
?>
    