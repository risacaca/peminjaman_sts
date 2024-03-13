<?php
require_once("database.php");
$tampil = mysqli_query($dbconnect,"Select * from barang");
$nomor=0;
// var_dump($tampil);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>barang</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Peminjaman</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="barang.php">Barang</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="peminjaman.php">Peminjaman</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="user.php">User</a>
        </li>
      </ul>
      <a class="btn btn-danger" href="logout.php"role="button">Log Out</a>
    </div>
  </div>
</nav>
<br><br>

       

<div class="container">
    <br>
    <h1>DATA BARANG </h1>
    <br>
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">kode_barang</th>
      <th scope="col">nama_barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Merek</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($tampil as $data): ?>
        <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo"$data[id]";?></td>
      <td><?php echo"$data[kode_barang]";?></td>
      <td><?php echo"$data[nama_barang]";?></td>
      <td><?php echo"$data[kategori]";?></td>
      <td><?php echo"$data[merek]";?></td>
      <td><?php echo"$data[jumlah]";?></td>
      <td><?php echo"<a href='edit.php?id=$data[id]'>Edit</a> |
          <a href='javascript:hapusData(".$data['id'].")'>Hapus</a>"; ?> </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
    <script language="javascript" type="text/JavaScript">
    function hapusData(id){
      if(confirm("Apakah anda yakin akan menghapus data ini ?")){
        window.location.href ='delete.php?id=' + id;
      }
    }
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>