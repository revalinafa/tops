<?php 
include 'koneksi.php';
include 'function.php';

$nama = $_GET["nama"];
$email = $_GET["email"];
$idproduk = $_GET["idproduk"];
$warna = $_GET["warna"];
$size = $_GET["size"];

try {
    $hasil = mysqli_query($conn,"delete from keranjang where nama='$nama' and email='$email' and idproduk = '$idproduk' and warna ='$warna' and size = '$size'");
    echo "<script> alert('Data berhasil dihapus')";
    header("Location: keranjang.php");
} catch (\Throwable $th) {
    echo $th;
}

?>