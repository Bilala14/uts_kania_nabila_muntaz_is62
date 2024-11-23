<?php
// Koneksi file ini
include("koneksi.php");

// Mengambil id dari tombol hapus
$id_kry = $_GET['xyz'];

// Menuliskan query 
$hapus = "DELETE FROM tb_kry WHERE id_kry='$id_kry'";

// Menjalankan query
$proses = mysqli_query($koneksi,$hapus);

?>
<!-- Mengalihkan Halaman 
header("location:index.php") -->
<script>
    document.location="indexcopy.php";
</script>