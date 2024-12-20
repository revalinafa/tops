<?php 
include 'koneksi.php';
include 'function.php';
session_start();
$nama = $_SESSION["nama"];
$email = $_SESSION["email"];
$query = " select a.*, b.harga,b.nama as nama_produk from keranjang a join produk b on a.idproduk = b.id where a.nama='$nama' and a.email='$email'";
$temp = mysqli_query($conn,$query);
$hasil = array();
while ($x = mysqli_fetch_assoc($temp)) {
    array_push($hasil,$x);
}

// $hasil = array ();
if (isset($_POST["search"])) {
    header("Location: home.php");
} 

$nama = $_GET["nama"];
$email = $_GET["email"];
$idproduk = $_GET["idproduk"];
$warna = $_GET["warna"];
$size = $_GET["size"];

foreach ($hasil as $key => $value) {
    # code...
}

try {
    echo "<script> alert('Data berhasil dihapus')";
    $hasil = mysqli_query($conn,"insert into pembelian values('$nama','$email', '$idproduk','$warna', '$size'");
    header("Location: keranjang.php");
} catch (\Throwable $th) {
    echo $th;
}


?>