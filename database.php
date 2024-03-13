<?php

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'peminjaman_barang');
$dbconnect=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Failed to connect to MYSQL: " . mysqli_error($dbconnect));

// $host="localhost";
// $user="root";
// $pass="";
// $db="pplg_1_notes";
// $dbconnect=mysqli_connect

function kuery($kueri)
{
    global $dbconnect;
    $result=mysqli_query($dbconnect, $kueri);
    $rows=[];
    while($rows=mysqli_fetch_assoc($result))
    {
        $rows[] = $rows;
    }
    return $rows;
}
function getpinjam($no_identitas)
{
    global $koneksi;
  $hasil=mysqli_query($koneksi,"SELECT * FROM peminjaman WHERE no_identitas = '$no_identitas'");
    $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
}

function showdatauser($tablename){
    global $dbconnect;
    $result=mysqli_query($dbconnect,"select * from $tablename");
    $rows=[];
    while($row=mysqli_fetch_assoc($result))
    {
        $rows[] = $rows;
    }
    return $rows;
}

function tampilkanuser(){
    global $dbconnect;
    $result=mysqli_query($dbconnect,"select * from user");
    $rows=[];
    while($row=mysqli_fetch_assoc($result))
    {
        $rows[] = $rows;
    }
    return $rows;
}

function inputbarang($tabelname,$data1,$data2,$data3,$data4,$data5,$data6)
{
    global $dbconnect;
    $sql=mysqli_query($dbconnect, "insert into $tabelname values (null,$data1,$data2,$data3,$data4,$data5,$data6)");
    return $sql;
}

function Editdata($tablename, $id)
{
    global $dbconnect;
    $hasil=mysqli_query($dbconnect, "select * from $tablename where id='$id'");
    return $hasil;
}

function update($table, $data, $id)
{
    global $dbconnect;
    $sql = "UPDATE $table SET nama_barang = '$data' WHERE id = '$id'";
    $hasil=mysqli_query($dbconnect, $sql);
    return $hasil;
}
function updatepinjam($table, $data, $id)
{
    global $dbconnect;
    $sql = "UPDATE $table SET kode_barang = '$data' WHERE id = '$id'";
    $hasil=mysqli_query($dbconnect, $sql);
    return $hasil;
}

function Delete($tablename, $id)
{
    global $dbconnect;
    $hasil=mysqli_query($dbconnect, "Delete from $tablename where id='$id'");
    return $hasil;
}
function cek_login($username,$password){
    global $dbconnect;
    $username = $username;
    $password = $password;

    $hasil= mysqli_query($dbconnect,"select * from user where username='$username' and password='$password'");
    $cek = mysqli_num_rows($hasil);

    if($cek > 0 ){
        return true;
    }
    else{
        return false ;
    }
}
?>