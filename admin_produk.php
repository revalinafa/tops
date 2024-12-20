<?php 
include "koneksi.php";
include "function.php";

$hasil = array ();
    $temp = mysqli_query($conn, "SELECT * FROM produk");
    while ($x = mysqli_fetch_assoc($temp)) {
        array_push($hasil, $x);
    }

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!--LINK CSS NYA-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/admin-produk.css">

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
            <a href=""></a><p>Pembelian</p>
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
    <div class="data-produk">
        <div class="top">
            <h3 style="font-size: 40px;">Data Produk</h3>
            <div class="add-produk">
                <button onclick="openPopupAdd()" class="tambah-produk-btn">Tambah Produk</button>
            </div>
        </div>
        <div class="table-produk-con">
            <div class="table-header">
                <div class="id-pemesanan-header">
                    <h3>Id_produk</h3>
                </div>
                <div class="nama-header">
                    <h3>Nama Sepatu</h3>
                </div>
                <div class="tipe-header">
                    <h3>Tipe</h3>
                </div>
                <div class="harga-header">
                    <h3>Harga</h3>
                </div>
                <div class="aksi-header">
                    <h3>Aksi</h3>
                </div>

            </div>

            <div class="table-body">
                <?php foreach ($hasil as $x): ?>
                <div class="table-body-list">
                    <div class="id_pemesanan-body">
                        <h3> <?= $x["id"] ?> </h3>
                    </div>
                    <div class="nama-body">
                        <h3><?= $x["nama"] ?></h3>
                    </div>
                    <div class="tipe-body">
                        <h3><?= $x["tipe"] ?></h3>
                    </div>
                    <div class="harga-body">
                        <h3><?= $x["harga"] ?></h3>
                    </div>                    
                    <div class="aksi-body">
                        <div class="edit" onclick="openPopupEdit( '<?=$x['id']?>',  '<?=$x['nama']?>',  '<?=$x['tipe']?>',  '<?=$x['harga']?>',  '<?=$x['deskripsi']?>')">
                            <i data-feather="edit"></i>
                        </div>
                        <div class="delete" onclick="popupDeleteShow('<?=$x['id'] ?>')">
                            <i data-feather="trash-2"></i>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>



    <form id="popup-edit" class="popup-edit hidden" method="post" action="admin_edit.php">
        <div class="popup-edit-content">
            <h3>Edit Sepatu</h3>
            <div id="edit-product-form" >
                <label for="product-id">ID Sepatu</label>
                <input type="text" id="product-id" name="product-id" readonly>
    
                <label for="product-name">Nama Sepatu</label>
                <input type="text" id="product-name" name="product-name">
    
                <label for="product-type">Tipe Sepatu</label>
                <input type="text" id="product-type" name="product-type">
    
                <label for="product-price">Harga Sepatu</label>
                <input type="number" id="product-price" name="product-price">
    
                <label for="product-description">Deskripsi Sepatu</label>
                <textarea id="product-description" name="product-description"></textarea>
    
                <button onclick="savePopupEdit()" name="saveedit">Simpan</button>
                <button onclick="closePopupEdit()">Batal</button>
            </div>
        </div>
    </form>

    <form id="popup-tambah" class="popup-edit hidden" method="post" action="admin_tambah.php?table=produk">
        <div class="popup-edit-content">
            <h3>Tambah Sepatu</h3>
            <label for="product-id">ID Sepatu</label>
            <input type="text" id="add-product-id" name="id">
            
            <label for="add-product-name">Nama Sepatu</label>
            <input type="text" id="add-product-name" name="nama"/>
    
            <label for="add-product-type">Tipe Sepatu</label>
            <select id="add-product-type" name="tipe">
                <option value="men">Men</option>
                <option value="running">Running</option>
                <option value="women">Women</option>
                <option value="Football">Football</option>
                <option value="daily">Daily</option>
                <option value="indoor">Indoor</option>
                <option value="outdoor">Outdoor</option>
            </select>

    
            <label for="add-product-price">Harga Sepatu</label>
            <input type="number" id="add-product-price" name="harga"/>
    
            <label for="add-product-description">Deskripsi Sepatu</label>
            <textarea id="add-product-description" rows="4" name="deskripsi"></textarea>

            <label for="add-product-price">Image Sepatu</label>
            <input type="text" id="add-product-img" name="poto" />

    
            <button onclick="savePopupAdd()" name="tambah">Simpan</button>
            <button onclick="closePopupAdd()">Batal</button>
        </div>
    </form>

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


function openPopupAdd() {
    // Reset input field
    document.getElementById("add-product-name").value = "";
    document.getElementById("add-product-type").value = "";
    document.getElementById("add-product-price").value = "";
    document.getElementById("add-product-description").value = "";

    // Tampilkan popup-tambah
    const popupAdd = document.getElementById("popup-tambah");
    popupAdd.classList.remove("hidden");
    popupAdd.style.display = "flex";
    }

    function closePopupAdd() {
        // Sembunyikan popup-tambah
        const popupAdd = document.getElementById("popup-tambah");
        popupAdd.classList.add("hidden");
        popupAdd.style.display = "none";
    }

    function savePopupAdd() {
        // Ambil data dari input field
        const name = document.getElementById("add-product-name").value;
        const type = document.getElementById("add-product-type").value;
        const price = document.getElementById("add-product-price").value;
        const description = document.getElementById("add-product-description").value;

        // Simpan data (misalnya kirim ke server atau tampilkan di console)

        console.log("Data Produk Baru yang Ditambahkan:", {
            name,
            type,
            price,
            description,
        });

        // Tutup popup-tambah
        closePopupAdd();
    }


    function openPopupEdit(id, name, type, price, description) {
    // Isi input field dengan data produk
    document.getElementById("product-id").value = id;
    document.getElementById("product-name").value = name;
    document.getElementById("product-type").value = type;
    document.getElementById("product-price").value = price;
    document.getElementById("product-description").value = description;

    // Tampilkan popup-edit
    const popupEdit = document.getElementById("popup-edit");
    popupEdit.classList.remove("hidden");
    popupEdit.style.display = "flex";
    }

    function closePopupEdit() {
        // Sembunyikan popup-edit
        const popupEdit = document.getElementById("popup-edit");
        popupEdit.classList.add("hidden");
        popupEdit.style.display = "none";
    }

    function savePopupEdit() {
        // Ambil data dari input field
        const id = document.getElementById("product-id").value;
        const name = document.getElementById("product-name").value;
        const type = document.getElementById("product-type").value;
        const price = document.getElementById("product-price").value;
        const description = document.getElementById("product-description").value;

        // Tutup popup-edit
        closePopupEdit();
    }





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
            window.location.href = `admin_hapus.php?table=produk&id=${popupDeleteSelectedId}`;
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