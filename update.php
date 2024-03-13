<?php
require_once("database.php");
$id=$_POST['id'];
$xnote = $_POST['barang'];

$sql2=update("barang ",$xnote, $id);
if($sql2) {
        header("location:barang .php");
    }
?>