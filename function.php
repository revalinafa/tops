

<?php
include "koneksi.php";


    function formatRupiah($value) {
        return "Rp." . number_format($value, 0, ',', '.') . ',-';
    }

    // Example usage:
    // echo formatRupiah(1000000); // Output: Rp.1.000.000,-

    function cari($nama_produk){
        global $conn;
        $query = "select * from produk where nama like '%$nama_produk%'";
        $temp = mysqli_query($conn,$query);
        $hasil_cari = array();
        while ($a = mysqli_fetch_assoc($temp)) {
            # code...
            array_push($hasil_cari,$a);
        }
        return $hasil_cari;
    }
?>