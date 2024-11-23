<?php
#1. Membuat Koneksi  database dengan php
include("koneksi.php");

#2. Mengambil semua value dari form dan dimasukkan ke masing-masing variable
$id_kry = $_POST['id_kry'];
$nm_kry = $_POST['nm_kry'];
$jbtn = $_POST['jabatan'];
$tgl_masuk = $_POST['tgl_msk'];
$gaji = $_POST['gaji'];

#3 Menuliskan query simpan
$sunting = "UPDATE tb_kry SET id_kry='$id_kry',nm_kry='$nm_kry',jabatan='$jbtn',tgl_masuk='$tgl_masuk',gaji='$gaji' WHERE id_kry='$id_kry'";

#4. Menjalankan query
$proses = mysqli_query($koneksi,$sunting);


#5. Mengalihkan Halaman 
//header("location:index.php")//
?>
<script>
    document.location="indexcopy.php";
</script>