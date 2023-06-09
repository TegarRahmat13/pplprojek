<?php
// include "header.php";
// function http_request($url) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     $output = curl_exec($ch);
//     curl_close($ch);
//     return $output;
// }

// $data = http_request("http://localhost/JWT_PAA/api/read_produk.php");
// $data = json_decode($data, TRUE); 

/*session_start();
$admin_id = $_SESSION['admin'];

if(!isset($admin_id)){
   header('location:login.php');
};*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/JWT_PAA/menu_style.css">
    <!--BS-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<body>
    <section class="produk section">
    <div class="container__table">
        <div class="buat__center">
            <div class="nav">
                <h3>Data Produk</h3>
            </div>
        </div>
        <div class="table">
            <table  class="table__produk" >
                <thead class="table__head">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Harga</th>
                </thead>
                <tbody>
                    <?php foreach ($data as $data) { ?>
                        <tr  class="table__body">
                            <td class="td">
                                <?= $data["id"] ?>
                            </td>
                            <td class="td">
                                <?= $data["nama"] ?>
                            </td>
                            <td class="td">
                                <?= $data["stok"] ?>
                            </td>
                            <td class="td">
                                <?= $data["harga"] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </section>
</body>
</html>
