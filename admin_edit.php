<?php 
include 'koneksi.php';
include 'function.php';
$idadmin = $_GET['table'];
// $id = $_GET['id'];

if (isset($_POST["saveedit"])) {
    $id = $_POST["product-id"] ;
    $nama = $_POST["product-name"] ;
    $tipe = $_POST["product-type"] ;
    $harga = $_POST["product-price"] ;
    $deskripsi = $_POST["product-description"] ;
    // $poto = $_POST["poto"];

    $query = "update produk set
                nama = '$nama',
                tipe ='$tipe',
                harga = '$harga',
                deskripsi = '$deskripsi'
                where id = '$id'";

                try { mysqli_query($conn,$query);
                    //code...
                    echo "<script> alert('Data berhasil diubah');
                            window.location.href = 'admin_produk.php';        
                    </script>";
                } catch (\Throwable $th) {
                    //throw $th;
                }
                exit();
            }
?>