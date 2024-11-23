<?php
#1. Koneksi Ke DataBase
include("koneksi.php");

#2. Ambil Id yang Akan Disunting
$id_kry =$_GET['id_kry'];

#3. Mengambil  Semua Record Data Berdasarkan Id Yang Dipilih
$ambil = "SELECT * FROM tb_kry WHERE id_kry='$id_kry'";

#4. Menjalankan Query
$edit = mysqli_query($koneksi,$ambil);

#5. Memisahkan Record Data Berdasarkan Kolom/Field
$data = mysqli_fetch_array($edit);

?>
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
       <h3>Form Edit Data Karyawan</h3>
    <div class="card-body">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_kry" value="<?=$data['id_kry']?>">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Karyawan</label>
        <input type="text" readonly value="<?=$data['nm_kry']?>" name="nm_kry" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jabatan</label>
        <input type="text" value="<?=$data['jabatan']?>" name="jabatan" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
        <input type="date" value="<?=$data['tgl_masuk']?>" name="tgl_masuk" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gaji</label>
        <input type="text"  value="<?=$data['gaji']?>" name="gaji" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
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