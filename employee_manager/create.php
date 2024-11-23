<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<?php include_once('navbar.php');
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto"></div>
            <div class="card">
    <div class="card-header " >
       <h3>Form Karyawan</h3>
    <div class="card-body">
        <form action="proses.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Id Karyawan</label>
        <input type="text" name="id_kry" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Karyawan</label>
        <input type="text" name="nm_kry" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
        <input type="date" name="tgl_masuk" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gaji</label>
        <input type="text" name="gaji" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Sumbit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="js/bootstrap.js"></script> 
    <script src="js/bootstrap.bundle.js"></script> 
    <script src="js/all.js"></script> 
</body>
</html>