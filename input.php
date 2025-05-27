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
    <form class="main" method="post" action="">
        <div class="container">
            <ul>
                <li>
                    <label for="pesan">No. Pesanan</label>
                    <div class="tab">
                        <span>:</span>
                        <input type="number" name="pesan" id="pesan" min="1" required>
                    </div>
                </li>
                <li>
                    <label for="date">Tanggal</label>
                    <div class="tab">
                        <span>:</span>
                        <?= date("l, d-M-Y"); ?>
                    </div>
                </li>
                
                <?php garis() ?>

                <li>
                    <label for="nama">Nama Konsumen</label>
                    <div class="tab">
                        <span>:</span>
                        <input type="text" name="nama" id="nama" required>
                    </div>   
                </li>
                <li>
                    <label for="barang">Pilih Jenis Barang</label>
                    <div class="tab">
                        <span>:</span>
                        <select name="barang" id="barang" onchange="this.form.submit()">
                            <option value="" disabled selected>--Pilih--</option>
                            <?php foreach ($opsi as $jenis => $items): ?>
                                <option value="<?= $jenis ?>" <?= $selectedJenis === $jenis ? 'selected' : '' ?>>
                                    <?= $jenis ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </li>
                <li>
                    <label for="beli_grosir">Pilih Jenis Pembelian</label>
                    <div class="tab">
                        <span>:</span>
                        <input type="radio" name="beli" value="Grosir" id="beli_grosir" required>
                        <label for="beli_grosir">Grosir</label>

                        <input type="radio" name="beli" value="Ecer" id="beli_ecer" required>
                        <label for="beli_ecer">Ecer</label>
                    </div>
                </li>

                <li>
                    <?php if ($selectedJenis): ?>
                    <label for="nbarang">Masukan Nama Barang</label>
                    <div class="tab">
                        <span>:</span>
                        <select name="nbarang" id="nbarang">
                            <option value="" disabled selected>--Pilih--</option>
                            <?php foreach ($opsi[$selectedJenis] as $nama => $harga): ?>
                                <option value="<?= $nama ?>" <?= $selectedNama === $nama ? 'selected' : '' ?>>
                                    <?= $nama . " == " . number_format($harga, 0, ',', '.') ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php endif; ?>
                </li>
                <li>
                    <label for="jbeli">Masukan Jumlah Beli</label>
                    <div class="tab">
                        <span>:</span>
                        <input type="number" name="jbeli" id="jbeli" min="1" required>
                    </div>
                </li>

                <?php garis() ?>

                <li>
                    <label for="alamat">Alamat Pengiriman</label>
                    <div class="tab">
                        <span>:</span>
                        <textarea name="alamat" id="alamat"></textarea>
                    </div>
                </li>

                <?php garis() ?>

                <li class="proses">
                    <button type="submit" formaction="proses.php">Proses</button>
                    <div>|</div>
                    <div>|</div>
                    <button type="Reset">Batal</button>
                </li>
            </ul>
        </div>
    </form>
    
</body>
</html>