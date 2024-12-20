<?php
include "koneksi.php";
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION["nama"]) || !isset($_SESSION["email"])) {
    echo "You need to log in first!";
    exit;
}

$nama = $_SESSION["nama"];
$email = $_SESSION["email"];
$idproduk = $_POST["idproduk"];
$warna = $_POST["warna"];
$size = $_POST["size"];

// Validasi data
if (empty($idproduk) || empty($warna) || empty($size)) {
    echo "Invalid input!";
    exit;
}

// Masukkan data ke tabel keranjang
$query = "INSERT INTO pembelian (nama, email, idproduk, warna, size) VALUES ('$nama', '$email', '$idproduk', '$warna', '$size')";
if (mysqli_query($conn, $query)) {
    echo "Product added to cart successfully!";
} else {
    echo "Failed to add product to cart: " . mysqli_error($conn);
}
?>
