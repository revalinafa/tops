<?php 
include 'koneksi.php';
include 'function.php';
$idadmin = $_GET['table'];
// $id = $_GET['id'];

if (isset($_POST["tambah"])) {
    $id = $_POST["id"] ;
    $nama = $_POST["nama"] ;
    $tipe = $_POST["tipe"] ;
    $harga = $_POST["harga"] ;
    $deskripsi = $_POST["deskripsi"] ;
    $poto = $_POST["poto"];

    $query = "insert into $idadmin values ('$id', '$nama','$tipe','$harga','$deskripsi','$poto')";
    $hasil = mysqli_query($conn,$query);
    echo "<script> alert('Data berhasil ditambah')";
}

// try {
//     header("Location: admin_produk.php");
// } catch (\Throwable $th) {
//     echo $th;
// }

?>