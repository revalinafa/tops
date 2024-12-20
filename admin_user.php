<?php 
include "koneksi.php";
include "function.php";

$hasil = array ();
    $temp = mysqli_query($conn, "SELECT * FROM user");
    while ($x = mysqli_fetch_assoc($temp)) {
        array_push($hasil, $x);
    }

// if (isset($_POST["tambah"])) {
//     $id = $_POST["id"] ;
//     $nama = $_POST["nama"] ;
//     $tipe = $_POST["tipe"] ;
//     $harga = $_POST["harga"] ;
//     $deskripsi = $_POST["deskripsi"] ;
//     $poto = $_POST["poto"];

//     $query = "insert into $idadmin values ('$id', '$nama','$tipe','$harga','$deskripsi','$poto')";
//     $hasil = mysqli_query($conn,$query);
//     echo "<script> alert('Data berhasil ditambah')";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!--LINK CSS NYA-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/admin-user.css">

    <!--LINK FONT GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!--LINK ICON NYA-->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<header class="header">
    <div class="header-con">
        <div class="header-left">
        <a href="home.php"><h3>TOPS</h3></a>
        </div>
        <div class="header-mid">
            <h3>ADMIN PANEL</h3>
        </div>
        <div class="header-right">
        <a href="homecs.php.php"><h3>LOGOUT</h3></a>
        </div>
    </div>
</header>

<div class="sidebar">
    <div class="sidebar-list">
        <div class="sidebar-item svg">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 128 128" width="128px" height="128px"><path d="M115.2,93.7l-17.8-9.9l3-4.6c0.9-1.4,0.5-3.2-0.9-4.1c-1.4-0.9-3.2-0.5-4.1,0.9l-3.2,4.9l-12.7-7.1l2.9-4.6 c0.9-1.4,0.5-3.2-0.9-4.1c-1.4-0.9-3.2-0.5-4.1,0.9l-3.1,4.9L50.5,57.4c-0.8-0.4-1.7-0.5-2.5-0.2c-0.8,0.3-1.5,0.9-1.8,1.7 l-7.5,18.7c-1.1,2.7-3.6,4.4-6.5,4.4H10c-1.7,0-3,1.3-3,3v12c0,1.7,1.3,3,3,3s3-1.3,3-3v-9h19.2c5.3,0,10.1-3.2,12.1-8.2l6.2-15.5 L71,75.8l-2.6,4.1c-0.9,1.4-0.5,3.2,0.9,4.1c0.5,0.3,1.1,0.5,1.6,0.5c1,0,2-0.5,2.5-1.4l2.8-4.4L89,85.8l-2.6,4 c-0.9,1.4-0.5,3.2,0.9,4.1c0.5,0.3,1.1,0.5,1.6,0.5c1,0,2-0.5,2.5-1.4l2.8-4.3l18.1,10.1c5.4,3,8.7,8.7,8.7,14.8v7.3H11 c-2.2,0-4-1.8-4-4s1.8-4,4-4h93c1.7,0,3-1.3,3-3s-1.3-3-3-3H11c-5.5,0-10,4.5-10,10s4.5,10,10,10h113c1.7,0,3-1.3,3-3v-10.3 C127,105.4,122.5,97.7,115.2,93.7z"/></svg>            
            <a href="admin_produk.php">  <p>Shoes</p></a>
        </div>
        <div class="sidebar-item">
            <i data-feather="shopping-cart"></i>
            <p>Pembelian</p>
        </div>
        <div class="sidebar-item">
            <i data-feather="user"></i>
            <a href="admin_user.php"> <p>Pelanggan</p></a> 
        </div>
        <div class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>            <a href="homecs.php.php"><p>LOGOUT</p></a>
        </div>
    </div>
</div>

<div class="main">
    <div class="container">

        <div class="top">
            <h3>Data Pelanggan</h3>
        </div>

        <div class="table-user">

            <div class="table-header">
                <div class="nomor-header"><h3>NO</h3></div>
                <div class="nama-user-header">
                    <h3>Nama User</h3>
                </div>
                <div class="email-user-header">
                    <h3>Email</h3>
                </div>
                <div class="ttl-header">
                    <h3>tanggal lahir</h3>
                </div>
            </div>

            <div class="table-body-con">
                <?php foreach ($hasil as $x): ?>
                <div class="table-body">
                    <div class="nomor-body"><h3>1</h3></div>
                    <div class="nama-user-body">
                        <h3><?= $x["nama"] ?></h3>
                    </div>
                    <div class="email-user-header">
                        <h3><?= $x["email"] ?></h3>
                    </div>
                    <div class="ttl-body">
                        <h3><?= $x["lahir"] ?></h3>
                    </div>
                </div>
                    
                <?php endforeach; ?>
               
               


                
            </div>


        </div>

    </div>

    <!-- Pop-up Modal -->
    <div id="popup-delete" class="popup-delete hidden">
        <div class="popup-delete-content">
            <p>Apakah kamu yakin ingin menghapus data ini?</p>
            <div class="popup-delete-actions">
                <button class="btn popup-delete-cancel" onclick="popupDeleteClose()">Batal</button>
                <button class="btn popup-delete-confirm" onclick="popupDeleteItem()">Hapus</button>
            </div>
        </div>
    </div>



</div>
    













<script>
    let popupDeleteSelectedId = null;

    function popupDeleteShow(rowId) {
        popupDeleteSelectedId = rowId; // Simpan ID baris yang ingin dihapus
        const popup = document.getElementById("popup-delete");
        popup.classList.remove("hidden");
        popup.style.display = "flex";
    }

    function popupDeleteClose() {
        popupDeleteSelectedId = null; // Reset ID baris
        const popup = document.getElementById("popup-delete");
        popup.classList.add("hidden");
        popup.style.display = "none";
    }

    function popupDeleteItem() {
        if (popupDeleteSelectedId) {
            alert(`Data dengan ID ${popupDeleteSelectedId} berhasil dihapus!`);
            // Tambahkan logika untuk menghapus data sesuai ID
            popupDeleteClose();
        }
    }

</script>
<script>
    feather.replace();
</script> 
</body>
</html>