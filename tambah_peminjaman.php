<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>My Notes</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">peminjaman</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="barang.php">Barang</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="user.php">user</a>
        </li>
      </ul>
      <a class="btn btn-danger" href="logout.php"role="button">Log Out</a>      
    </div>
  </div>
</nav>

<br><br>
<div class="container">
  <h1>TAMBAH DATA PEMINJAMAN</h1>
  <form action="simpan_peminjaman.php" method="post">
  <div class="form-group row">
    <label for="tgl_peminjaman" class="col-sm-2 col-form-label">tanggal_Peminjaman</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman">
    </div>
    <div class="form-group row">
    <label for="tgl_kembali" class="col-sm-2 col-form-label">tanggal_kembali</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode_barang" class="col-sm-2 col-form-label">No Identitas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_identitas" name="no_identitas">
    </div>
  <div class="form-group row">
    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kode_barang" name="kode_barang">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="kategori" class="col-sm-2 col-form-label">Keperluan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keperluan" name="keperluan">
    </div>
  </div>
  <div class="form-group row">
    <label for="col-sm-2 col-form-label">Status</label>
    <select class="form-control" id="status" name="status">
      <option>Aktif</option>
      <option>Tidak Aktif</option>
    </select>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah" name="jumlah">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"name="simpan">simpan</button>
    </div>
  </div>
</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>