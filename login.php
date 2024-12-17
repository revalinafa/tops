<?php 
include 'koneksi.php';
    
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    if($username == "admin" && $password =="admin"){
        header("Location: dashboard.php");
        session_start();
        $_SESSION["username"]="admin";
        exit();
    }

    $query = "SELECT password FROM user WHERE nama='$username' or email='$username'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        $result2 = mysqli_fetch_assoc($result);
        if ($result2) {
            if ($result2["password"] == $password) {
             
                header("Location: home.php");
                session_start();
                $_SESSION["username"]=$_POST["username"];
                exit();
            } else {
                echo "<script> alert('Invalid password!'); </script>";
            }
        } else {
            echo "<script> alert('Nama atau Email sudah digunakan'); </script>";
        }
    }
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN IN FORM</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        border: none;
        outline: none;
        text-decoration: none;
        font-family: "Poppins", sans-serif;
      }

      body {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url(asset/background-login.png);
        background-size: cover;
        background-position: center;
        transition: opacity 0.3s ease-in-out;
      }

      .container {
        position: relative;
        width: 100%;
        max-width: 800px;
        height: 500px;
        background: transparent;
        border-radius: 20px;
        border: 1px solid rgba(20, 31, 47, 0.9);
        background-color: rgba(127, 178, 248, 0.5);
        backdrop-filter: blur(8px);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }

      .main-box {
        padding: 100px;
        width: 100%;
      }

      .main-box h1 {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        color: #ffffff;
        background-color: #062743;
        border-radius: 10px;
      }

      .input-box {
        position: relative;
        height: 55px;
        width: 100%;
        border-bottom: 2px solid #062743;
        margin: 30px 0;
        background-color: #ffffff;
        border-radius: 8px;
      }

      .input-box label {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        color: #062743;
        font-weight: 700;
        font-size: 17px;
        transition: all ease 0.4s;
      }

      .input-box input {
        height: 100%;
        width: 100%;
        background-color: transparent;
        font-size: 15px;
        font-weight: 600;
        color: #062743;
        padding: 0 30px 0 6px;
      }

      .input-box .icon {
        position: absolute;
        right: 10px;
        margin-top: 10px;
        font-size: 15px;
        color: #062743;
      }

      .input-box input:focus ~ label,
      .input-box input:valid ~ label {
        top: -3px;
      }

      .check {
        color: #062743;
        font-size: 15px;
        font-weight: 500;
        margin: -10px 0 15px;
        display: flex;
        justify-content: space-between;
      }

      .check label input {
        vertical-align: middle;
        margin-right: 6px;
        accent-color: #062743;
      }

      .btn {
        width: 250px;
        height: 45px;
        background-color: #062743;
        border-radius: 30px;
        font-size: 15px;
        font-weight: 600;
        color: #ffffff;
        margin-top: 10px;
        cursor: pointer;
        align-items: center;
      }

      .register {
        text-align: center;
        color: #062743;
        font-size: 15px;
        font-weight: 500;
        margin: 35px 0 10px;
      }

      .register p a {
        font-size: 15px;
        font-weight: 600;
        color: #062743;
        margin-left: 5px;
      }

      .register p a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="main-box">
        <h1>Toko Online Pembelian Sepatu</h1>
        <form action="login.php" method="post">
          <div class="input-box">
            <span class="icon"><i data-feather="mail"></i></span>
            <input type="text" name="username" required />
            <label>Nama atau Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i data-feather="lock"></i></span>
            <input type="password" name="password" required />
            <label>Katasandi</label>
          </div>
          <div class="check">
            <label><input type="checkbox" /> Ingat saya</label>
          </div>
          <button type="submit" class="btn" name="login">Masuk</button>
          <div class="register">
            <p>
            Belum punya akun?
              <a href="register.php" class="register-link">Daftar!</a>
            </p>
          </div>
        </form>
      </div>
    </div>
    <script>
      const links = document.querySelectorAll("a");
      links.forEach((link) => {
        link.addEventListener("click", (e) => {
          e.preventDefault();
          const href = link.getAttribute("href");

          document.body.style.opacity = 0;

          setTimeout(() => {
            window.location.href = href;
          }, 300);
        });
      });
    </script>
  </body>
</html>
