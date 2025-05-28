<?php require_once 'input_logic.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Asyik Banget</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1 class="judul">Selamat Datang di Toko Asyik Banget</h1>
        <?php for ($i = 0; $i < 40; $i++) : ?>
            <?= "="; ?>
        <?php endfor; ?>
    </header>
        <form class="main">
        <div class="container">
            <ul>
                <li>
                    <label for="pesan">No. Pesanan</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $_POST["pesan"]; ?>
                    </div>
                </li>
                <li>
                    <label for="date">Tanggal</label>
                    <div class="tab">
                        <span>:</span>
                        <?= date("l, d-M-Y") ?>
                    </div>
                </li>
                
                <?php garis() ?>

                <li>
                    <label for="nama">Nama Konsumen</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $_POST["nama"]; ?>
                    </div>   
                </li>

                <li>
                    <label for="alamat">Alamat Kirim</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $_POST["alamat"] ?>
                    </div>
                </li>

                <li>
                    <label for="barang">Jenis Barang</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $_POST["barang"]; ?>
                    </div>
                </li>
                
                <li>
                    <label for="beli_grosir">Jenis Pembelian</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $_POST["beli"] ?>
                    </div>
                </li>

                <li>
                    <label for="nbarang">Nama Barang</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $_POST["nbarang"] ?>
                    </div>
                </li>

                <li>
                    <label for="nbarang">Harga Barang</label>
                    <div class="tab">
                        <span>:</span>
                        <?php
                        if($_POST["nbarang"] == "Kulkas") {
                            $harga = 1500000;
                            echo $harga;
                        } else if ($_POST["nbarang"] == "Kompor") {
                            $harga = 500000;
                            echo $harga;
                        } else if ($_POST["nbarang"] == "Lemari Besi") {
                            $harga = 2500000;
                            echo $harga;
                        } else {
                            $harga = 1500000;
                            echo $harga;
                        }
                        ?>
                    </div>
                </li>

                <li>
                    <label for="jbeli">Jumlah Beli</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $_POST["jbeli"] ?>
                    </div>
                </li>

                <?php garis() ?>

                <li>
                    <label for="jbeli">Subtotal Pembelian</label>
                    <div class="tab">
                        <span>:</span>
                        <?php $subtotal = $harga * $_POST["jbeli"];
                        echo $subtotal;
                        ?>
                    </div>
                </li>

                <li>
                    <label for="diskon">Diskon</label>
                    <div class="tab">
                        <span>:</span>
                        <?php if($_POST["beli"] === "Grosir" and $_POST["jbeli"] > 10 ) {
                                $diskon = 35/100 * $subtotal;
                            } else if($_POST["beli"] === "Grosir" and $_POST["jbeli"] <= 9) {
                                $diskon = 25/100 * $subtotal;
                            } else if($_POST["beli"] === "Ecer" and $_POST["jbeli"] < 10) {
                                $diskon = 10/100 * $subtotal;
                            } ?>
                        <?= $diskon; ?>
                    </div>
                </li>

                <li>
                    <label for="bayar">Total Yang Harus Dibayar</label>
                    <div class="tab">
                        <span>:</span>
                        <?= $subtotal - $diskon ?>
                    </div>
                </li>

                <?php garis() ?>

                <li>
                    <a href="input.php">"Input Lagi"</a>
                </li>
            </ul>
        </div>
        </form>
    
</body>
</html>