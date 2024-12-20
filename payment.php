<?php
$conn = mysqli_connect("localhost","root","","toplay");
/*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
composer require midtrans/midtrans-php
                              
Alternatively, if you are not using **Composer**, you can download midtrans-php library 
(https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
the file manually.   

require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

//SAMPLE REQUEST START HERE

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-Q_oFxyIRKxLH17pVanNxya_T';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$order_id = rand();

$params = array(
    'transaction_details' => array(
        'order_id' => $order_id,
        'gross_amount' => $_POST['harga'],
    ),
    'item_details' => array(
        array(
            'id' => $_POST['nama_produk'],
            'userId' => $_POST['userId'],
            'serverId' => $_POST['serverId'],
            'price' => $_POST['harga'],
            'quantity' => 1,
            'name' => $_POST['nominal'] . ' diamonds'
        )
    ),
    'customer_details' => array(
        'last_name' => $_POST['userId'],
        'email' => $_POST['gmail'],
        'phone' => $_POST['phone'],
    ),
);

  $userID=$_POST['userId'];   
  $serverID=$_POST['serverId'];
  $produk='mobile legends';
  $nominal=$_POST['nominal'];
  $harga=$_POST['harga'];
  $noWhatsapp=$_POST['phone'];
  $gmail=$_POST['gmail'];
  $status = "mantap";

  $query="INSERT INTO transaksi (order_id, userID, username, serverID, nominal, produk, harga, nomor_whatsapp, gmail, statuss) 
  VALUES ('$order_id','$userID','','$serverID','$nominal','$produk','$harga','$noWhatsapp','$gmail','$status')";

  mysqli_query($conn,$query);

$snapToken = \Midtrans\Snap::getSnapToken($params);
echo $snapToken;

?>