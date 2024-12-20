<?php 
include 'koneksi.php';
include 'function.php';
$idadmin = $_GET['table'];
$id = $_GET['id'];

try {
    $hasil = mysqli_query($conn,"update $idadmin set where id='$id'");
    echo "<script> alert('Data berhasil dihapus')";
    header("Location: admin_produk.php");
} catch (\Throwable $th) {
    echo $th;
}

?>