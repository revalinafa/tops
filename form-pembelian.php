<?php 
include "koneksi.php";
include "function.php";
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

if (isset($_POST["bayer"])) {
    var_dump($_POST["nomor-handphone"]);
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
    <link rel="stylesheet" href="css/form-pembelian.css">

    <!--LINK FONT GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!--LINK ICON NYA-->
    <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>

<header class="header">
    <div class="header-container">

        <div class="header-left">
            <h3>TOPS</h3>
        </div>
        
        <div class="header-right">

            <div class="search-container">
                <div class="search-con">
                    <input type="text" id="search">
                    <label for="search">
                        <i data-feather="search"></i>
                    </label>
                </div>
            </div>

            <div class="header-icon-con">
                <div class="header-con-item">
                    <i data-feather="headphones"></i>
                    <h3>Customer Service</h3>
                </div>
                <div class="header-con-item">
                    <i data-feather="shopping-cart"></i>
                    <h3>keranjang</h3>
                </div>
                <div class="header-con-item">
                    <i data-feather="user"></i>
                    <h3>login</h3>
                </div>

            </div>
            
        </div>

        <div class="hum-menu-con">
            <div class="hum-menu-flex">
                <div class="hum-menu">
                    <i data-feather="align-justify" class="hum-menu-icon"></i>
                </div>
            </div>
        </div>

    </div>
</header>

<div class="header-top"></div>

<div class="main">
    <div class="form-pembelian">
        <div class="baris">

            <form class="form-data-user" method="post" action="form-pembelian.php">
                <h3>Alamat Penerima</h3>
                <input type="text" id="nama" placeholder="Nama">
                <input type="text" name="nomor-handphone" id="nomor-handphone" placeholder="No Handphone" >
                <input type="submit" name="bayer" id="nomor-handphone" placeholder="No Handphone">
                <textarea name="detail-alamat" id="detail-alamat" placeholder="Alamat"></textarea>
            </form>
 
            <div class="form-data-produk">
                <h3>Pesanan Anda</h3>  
                
                <div class="tabel-data-produk">

                    <div class="tabel-produk-header">
                        <div class="nomor"><h3>No</h3></div>
                        <div class="nama-produk"><h3>Produk</h3></div>
                        <div class="harga-produk"><h3>Harga</h3></div>
                        <div class="jumlah-produk"><h3>Jumlah</h3></div>
                        <div class="subtotal"><h3>Subtotal</h3></div>
                    </div>

                    <?php foreach ($hasil as $s): ?>
                    <div class="tabel-produk-body">
                        <div class="nomor-body"><h3>1</h3></div>
                        <div class="nama-produk-body">
                            <div class="produk-pic">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/666333272d7d48a2b9676348935f5bbd_9366/Samba_OG_Shoes_Kids_White_JP5480_01_00_standard.jpg" alt="">
                            </div>
                            <div class="produk-detail">
                                <h3><?= $s["nama_produk"] ?></h3>
                                <h3><?= $s["warna"] ?>, <?= $s["size"] ?></h3>
                            </div>
                        </div>
                        <div class="harga-produk-body"><h3 class="harga"><?= $s["harga"] ?></h3></div>
                        <div class="jumlah-produk-body"><h3 class="jumlah">1</h3></div>
                        <div class="subtotal-body"><h3 class="subjumlah"></h3></div>
                    </div>
                    <?php endforeach; ?>

                </div>

                <br><br>
                <h3>Opsi Pengiriman</h3>
                <div class="pengiriman-con">
                    <div class="pengiriman-item">
                        <div class="jenis-ekpedisi">
                            <h3>Reguler</h3>
                        </div>
                        <div class="waktu-ekpedisi"><h3>2-3hari</h3></div>
                        <div class="harga-ekspedisi"><h3>Rp15.000,-</h3></div>
                        <div class="pilih">
                            <div class="pilih-con" id="pilih"><h3>pilih</h3></div>
                        </div>
                    </div>

                </div>

                <div class="last">
                    <table>
                        <tr>
                            <td>Subtotal  Produk</td>
                            <td>:</td>
                            <td class="cekout"></td>
                        </tr>
                        <tr>
                            <td>Subtotal pengiriman</td>
                            <td>:</td>
                            <td class="cekout"></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td class="cekout"></td>
                        </tr>
                    </table>
                    <div class="last-btn">
                        <div class="bayar-sekarang">
                            <h3 id="bayar">Bayar Sekarang</h3>
                        </div>
                        <div class="kembali">
                            <h3>kembali</h3>
                        </div>
                    </div>

                </div>
                
            </div>

        </div>
    </div>

    <footer class="footer">
    <div class="footer-con">
        <div class="footer-left">
            <div class="footer-left-judul">
                <h3>Toko Online Pembelian Sepatu</h3>
            </div>
            <div class="footer-left-detail">
                <h4>Kami adalah toko online terpercaya yang menyediakan berbagai pilihan sepatu berkualitas untuk segala usia dan kebutuhan. Temukan sepatu yang tepat untuk gaya hidup Anda dan nikmati pengiriman yang cepat ke seluruh Indonesia.</h4>
            </div>
        </div>
        <div class="footer-right">
            <div class="footer-right-top">
                <div class="footer-right-top-judul">
                    <h3>LOCATION</h3>
                </div>
                <div class="footer-right-top-detail">
                    <h4>Jl. Raya Mayjen Sungkono No.KM 5, Dusun 2, Blater, Kec. Kalimanah, Kabupaten Purbalingga, Jawa Tengah 53371</h4>
                </div>
            </div>
            <div class="footer-right-bottom">
                <div class="footer-right-bottom-judul">
                    <h3>CONNECT</h3>
                </div>
                <div class="footer-right-bottom-detail">
                    <div class="footer-right-bottom-detail-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    </div>
                    <div class="footer-right-bottom-detail-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>                    </div>
                    <div class="footer-right-bottom-detail-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                    </div>
                    <div class="footer-right-bottom-detail-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>






<script>
    const humMenu = document.querySelector('.hum-menu');
    const headerKanan = document.querySelector('.header-right');

    humMenu.addEventListener('click', () => {
    headerKanan.classList.toggle('active');
    });

    document.addEventListener('click', (event) => {
        if (!humMenu.contains(event.target) && !headerKanan.contains(event.target)) {
        // Hapus class 'active' jika klik di luar elemen
        headerKanan.classList.remove('active');
        }
  });
</script>
<script>
    feather.replace();
</script>    
<script src="../js/wilayah.js"></script>

<script>
// Ambil semua baris produk
const rows = document.querySelectorAll('.tabel-produk-body');

let subtotalproduk = 0;

rows.forEach(row => {
    // Ambil elemen harga, jumlah, dan subtotal di setiap baris
    const hargaElement = row.querySelector('.harga');
    const jumlahElement = row.querySelector('.jumlah');
    const subtotalElement = row.querySelector('.subjumlah');

    // Konversi harga dan jumlah ke angka
    const harga = parseFloat(hargaElement.textContent);
    const jumlah = parseInt(jumlahElement.textContent);

    // Hitung subtotal
    const subtotal = harga * jumlah;
    subtotalproduk +=subtotal;

    // Tampilkan subtotal dalam format Rupiah
    // subtotalElement.textContent = subtotal.toLocaleString('id-ID', {
    //     style: 'currency',
    //     currency: 'IDR'
    // });

    subtotalElement.textContent = subtotal;
});

let cekouts = document.querySelectorAll(".cekout");

document.getElementById("pilih").addEventListener("click",function(){
    cekouts[0].textContent = subtotalproduk;
    cekouts[1].textContent = 15000;
    cekouts[2].textContent = subtotalproduk + 15000;
});

</script>
<script>
    let keranjang = document.getElementById("bayar");

    // Fungsi untuk menambah ke keranjang
    keranjang.addEventListener("click", tambahpembelian);

    function tambahpembelian() {
        // Kirim data ke server menggunakan AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "tambahpembelian.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onload = function () {
            if (xhr.status === 200) {
                alert(xhr.responseText);
            }
        };

        // Kirim data (nama, email, idproduk, warna, size)
        xhr.send(`warna=${warna}&size=${size}&idproduk=<?= $id; ?>`);
    }
</script>
</body>
</html>