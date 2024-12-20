<?php
session_start();
require 'function.php';
$conn = mysqli_connect("localhost","root","","toplay");

if(!isset($_SESSION['login'])){ 
  header("location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/produk.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/feather-icons"></script>
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-tejWUPMxAcbaKl0G"></script>
  </head>
  <body>
    <nav class="header">
      <div class="kiri">
        <i data-feather="align-justify" id="humMenu"></i>

        <a href="home.php"
          ><img src="../image/ToPlay.png" alt="ToPlay" class="logo"
        /></a>
      </div>
      <div class="kanan">
        <?php if (isset($_SESSION["login"]) && $_SESSION["login"]): ?>
            <div class="masuk">
              <a href="../php/profil.php">
                <div class="masukk">
                  <i data-feather="user"></i><span>Profil</span>
                </div>
              </a>
            </div>
          </div>
        <?php else: ?>
            <a href="login.php">
              <div class="masuk">
                <div class="masukk">
                  <i data-feather="log-in"></i><span>masuk</span>
                </div>
              </div>
            </a>
            <a href="daftar.php">
              <div class="daftar">
                <div class="daftarr">
                  <i data-feather="user"></i><span>daftar</span>
                </div>
              </div>
            </a>
            </div>
        <?php endif; ?>
      </div>
    </nav>

    <div class="container">
      <div class="sidebar">
        <a href="home.php" class="aLogo">
          <img src="../image/ToPlay.png" class="logo" alt=""/>
        </a>
        <div class="menu">

          <div class="subMenu">
            <h3>MENU</h3>
            <ul type="none">
              <li>
                <div class="nav">
                  <a href="home.php" class="nav">
                    <i data-feather="home"></i><span> &nbsp;Beranda</span></a>
                </div>
              </li>
              <li>
                <div class="nav">
                  <a href="history.php" class="nav">
                    <i data-feather="search"></i><span>&nbsp;Cek Transaksi</span></a>
                </div>
              </li>
            </ul>
          </div>

          <div class="subMenu">
            <h3>NAVIGASI</h3>
            <ul type="none">
              <li>
                <div class="nav">
                  <a href="FAQ.php" class="nav">
                    <i data-feather="help-circle"></i><span>&nbsp;FAQ</span></a>
                </div>
              </li>
              <li>
                <div class="nav">
                  <a href="cs.php" class="nav">
                    <i data-feather="headphones"></i><span>&nbsp;Dukungan Pelanggan</span></a>
                </div>
              </li>
            </ul>
          </div>

          <div class="subMenu">
            <h3>PENGGUNA</h3>
            <ul type="none">
              <li>
                <div class="nav">
                  <a href="../php/login.php" class="nav">
                    <i data-feather="log-in"></i><span>&nbsp;masuk</span></a>
                </div>
              </li>
              <li>
                <div class="nav">
                  <a href="../php/daftar.php" class="nav">
                    <i data-feather="user"></i><span>&nbsp;daftar</span></a>
                </div>
              </li>
            <?php if (isset($_SESSION["login"]) && $_SESSION["login"]): ?>
              <li>
              <div class="nav">
                <a href="../php/logout.php" class="nav">
                  <i data-feather="log-out"></i><span>&nbsp;Log out</span></a>
              </div>
              </li>
            <?php endif;?>
            </ul>
          </div>
        
        </div>
      </div>

      <div class="main">
        <div class="content">

        <div class="salam">
          <div class="gambar">
            <img src="../image/img_pd/bg_ml.jpg" alt="">
          </div>
          
          <!-- Gambar Persegi di Tengah -->
          <div class="gambar-tengah">
            <img src="../image/img_pd/mobile legend.webp" alt="Image Tengah">
          </div>

          <div class="latar">

            <div class="kelebihanCon">
              <div class="kelebihan">
                <i data-feather="thumbs-up"></i>
                <h2>layanan terbaik</h2>
              </div>

              <div class="kelebihan">
                <i data-feather="credit-card"></i>
                <h2>harga Termurah</h2>
              </div>

              <div class="kelebihan">
                <i data-feather="zap"></i>
                <h2>proses kilat</h2>
              </div>
            </div>

              Beli Top Up Diamond MLBB (Mobile Legends) Termurah Se-Indonesia, Dijamin Aman & Garansi Uang Kembali 10x Lipat eksklusif hanya ada di toplay! 
              Pembayaran Diamonds dengan e-wallet bisa melalui Dana, Ovo, gopay, QRIS, ShopeePay, dan Link Aja. Sedangkan virtual account bisa melalui BCA, 
              Mandiri, Bank BRI, BNI, Permata Bank, CIMB Niaga, Danamon, Maybank, BSI, dan bank bjb. Selain itu anda juga membayarnya di gerai Alfamart terdekat.
          </div>

        </div>

        <form action="" method="POST">
          <div class="data">
            <div class="list">


              <div class="desc">
                <h2>Deskripsi Mobile Legends</h2>
                <h5>Mobile Legends adalah salah satu game MOBA (Multiplayer Online Battle Arena) berbasis tim dimana pemain akan 
                  bermain sebagai salah satu hero. Hero disini merupakan karakter yang akan digunakan oleh pemain dalam game. Setiap 
                  hero memiliki skill dan role yang berbeda. Player bisa memilihnya sebelum pertempuran dimulai</h5>
              </div>

              <div class="judul">
                <div class="nomor"><h3>1</h3></div>
                <div class="nameJudul"><h3>Pilih Nominal</h3></div>
              </div>



              <div class="nominalGrid">
              <?php
                $result = mysqli_query($conn, "SELECT nominal, harga, logo FROM GM01");  
                while ($row = mysqli_fetch_assoc($result)): 
              ?>    
                <div class="listItem" onclick="selectItem('<?php echo $row['nominal']; ?>', '<?php echo $row['harga']; ?>', this)">
                  <div class="kida">
                    <div class="nominal"><h4><?php echo $row['nominal']; ?> diamonds</h4></div>
                    <div class="harga"><h4>Rp.<?php echo $row['harga']; ?></h4></div>
                  </div>
                  <div class="suok">
                    <div class="logo">
                      <img src="../image/img_pd/<?php echo $row['logo']; ?>" alt="Logo Produk" />
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
            </div>
            
            <div class="form">
              <!-- Input untuk User ID dan Server ID -->
              <div class="formCover">
                <div class="judul">
                  <div class="nomor"><h3>2</h3></div>
                  <div class="nameJudul"><h3>Masukan Detail Akun </h3></div>
                </div>
                <div class="judulAdd">
                  <div class="idAccCon">
                    <div class="idAcc">
                      <label for="userId">User ID</label>
                      <input type="text" name="userId" id="userId" class="userID" placeholder="User ID" required>
                    </div>
                    <div class="serverAcc">
                      <label for="serverId">Server ID</label>
                      <input type="text" name="serverId" id="serverId" class="serverId" placeholder="Server ID" required>
                    </div>
                  </div>
                  <hr>
                  <h5>Untuk Menemukan ID & Server Kamu, Klik Avatar Pada Pojok Kiri Atas Layar Akan Muncul ID & Server Kamu Di Bawah Nickname. Contoh: 12345678 (1234).</h5>
                </div>
              </div>


              <div class="formCover">

                <div class="judul">
                    <div class="nomor"><h3>3</h3></div>
                    <div class="nameJudul"><h3>Kode Promo </h3></div>
                </div>

                <div class="judulAdd">
                  <div class="promoCon">
                    <input type="text" name="promo" id="promo" class="promo" placeholder="Masukan Kode Promo"> 
                    <button name="promoBtn" class="promoBtn">REDEEM</button>
                  </div>
                    <h5>*Optional: Jika tidak mempunyai kode promo abaikan saja</h5>
                </div>

              </div>


              <!-- Input untuk Whatsapp -->
              <div class="formCover">
                <div class="judul">
                  <div class="nomor"><h3>4</h3></div>
                  <div class="nameJudul"><h3>Masukan Nomor Whatsapp </h3></div>
                </div>
                <div class="judulAdd">
                  <i data-feather="phone" class="icon"></i>
                  <input type="text" name="phone" id="phone" class="contact" placeholder="Masukan Nomor Whatsapp" required>
                </div>
              </div>

              <!-- Input untuk Email -->
              <div class="formCover">
                <div class="judul">
                  <div class="nomor"><h3>5</h3></div>
                  <div class="nameJudul"><h3>Masukan email untuk Notifikasi </h3></div>
                </div>

                <input type="hidden" name="nominal" id="nominal" value="">
                <input type="hidden" name="harga" id="harga" value="">
                <input type="hidden" name="status" id="status" value="">
                <input type="hidden" name="nama_produk" id="produk" value="mobil legends">

                <div class="judulAdd">
                  <i data-feather="user" class="icon"></i>
                  <input type="email" name="gmail" id="gmail" class="contact" placeholder="Masukan Alamat Email" required>
                  <br><h5>Dengan membeli otomatis saya menyutujui Ketentuan Layanan</h5><br>
                  <button type="submit" name="pay" class="pay" id="pay">Bayar Sekarang</button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Hidden input untuk membawa nominal dan harga dari produk.php -->
          
        </form>



          </div>
        </div>

        </div>
      </div>


    <script>
      feather.replace();
    </script>
    <script src="../js/home.js"></script>

    <script type="text/javascript">
    // Pastikan elemen 'pay' sudah ada saat script dijalankan
    document.addEventListener("DOMContentLoaded", function() {
        var payButton = document.getElementById('pay');

        if (payButton) {
            payButton.addEventListener('click', async function(event) {
                event.preventDefault();

                try {
                    // Pastikan FormData mengambil form yang benar
                    const response = await fetch('payment.php', {
                        method: 'POST',
                        body: new FormData(document.querySelector("form"))
                    });
                    const token = await response.text();

                    if (token) {
                    window.snap.pay(token, {
                        onSuccess: function(result) {
                          document.getElementById('status').value = succes;
                          alert("Pembayaran berhasil!");
                            
                        },
                        onPending: function(result) {
                          document.getElementById('status').value = pending;
                          alert("Menunggu pembayaran!");
                          
                        },
                        onError: function(result) {
                          document.getElementById('status').value = eror;
                            alert("Pembayaran gagal!");
                        },
                        onClose: function() {
                            alert("Transaksi ditutup tanpa selesai.");
                        }
                    }); // Panggil Midtrans Snap dengan token
                    } else {
                        alert('Gagal mendapatkan token pembayaran.');
                    }
                } catch (err) {
                    alert('Terjadi kesalahan dalam proses pembayaran.');
                    console.error(err); // Menampilkan error di console untuk debug
                }
            });
        } else {
            console.error("Pay button tidak ditemukan.");
        }
    });
</script>


    <script>

          // Update hidden input fields
                    
    function selectItem(nominal, harga, element) {
    // Isi input hidden dengan nilai nominal dan harga
    document.getElementById('nominal').value = nominal;
    document.getElementById('harga').value = harga;

    // Hapus kelas 'selected' dari semua listItem
    document.querySelectorAll('.listItem').forEach(item => {
        item.classList.remove('selected');
    });

    // Tambahkan kelas 'selected' ke item yang diklik
    element.classList.add('selected');
}


       
    </script>


  </body>
</html>
