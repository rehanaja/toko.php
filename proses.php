<?php include "input.php"; ?>
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
        <div class="container">
            <ul>
                <li>
                    <label for="pesan">No. Pesanan</label>
                    <div class="tab">
                        <span>:</span>
                        
                    </div>
                </li>
                <li>
                    <label for="date">Tanggal</label>
                    <div class="tab">
                        <span>:</span>
                    </div>
                </li>
                
                <?php garis() ?>

                <li>
                    <label for="nama">Nama Konsumen</label>
                    <div class="tab">
                        <span>:</span>
                        
                    </div>   
                </li>
                <li>
                    <label for="barang">Pilih Jenis Barang</label>
                    <div class="tab">
                        <span>:</span>
                        
                    </div>
                </li>
                <li>
                    <label for="beli_grosir">Pilih Jenis Pembelian</label>
                    <div class="tab">
                        <span>:</span>
                        
                    </div>
                </li>

                <li>
                    <label for="nbarang">Masukan Nama Barang</label>
                    <div class="tab">
                        <span>:</span>
                        
                    </div>
                </li>
                <li>
                    <label for="jbeli">Masukan Jumlah Beli</label>
                    <div class="tab">
                        <span>:</span>
                        
                    </div>
                </li>

                <?php garis() ?>

                <li>
                    <label for="alamat">Alamat Pengiriman</label>
                    <div class="tab">
                        <span>:</span>
                        
                    </div>
                </li>

                <?php garis() ?>

                <li>
                    <a href="input.php">"Input Lagi"</a>
                </li>
            </ul>
        </div>
    
</body>
</html>