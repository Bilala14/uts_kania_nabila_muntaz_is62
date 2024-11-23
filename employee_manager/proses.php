<?php
// Membuat Koneksi  database dengan php
include("koneksi.php");

// Mengambil semua value dari form dan dimasukkan ke masing-masing variable
$id_kry = $_POST['id_kry'];
$nm_kry = $_POST['nm_kry'];
$jbtn = $_POST['jabatan'];
$tgl_masuk = $_POST['tgl_masuk'];
$gaji = $_POST['gaji'];


// Menuliskan query simpan
$simpan = "INSERT INTO tb_kry(id_kry,nm_kry,jabatan,tgl_masuk,gaji)
VALUES('$id_kry','$nm_kry','$jbtn','$tgl_masuk','$gaji')";

// Menjalankan query
$proses = mysqli_query($koneksi,$simpan);

?>
<!-- Mengalihkan Halaman 
header("location:index.php") -->
<script>
    document.location="indexcopy.php";
</script>