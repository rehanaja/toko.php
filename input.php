<?php function garis() {
    $i = 0;
    while ($i < 97) {
        echo "-";
        $i++;
} 
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Asyik Banget</title>
    <link rel="stylesheet" href="style.css">
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
                    :<input type="number" name="pesan" id="pesan" min="1" required>
                </li>
                <li>
                    <label for="date">Tanggal</label>
                    :<?= date("l, d-M-Y"); ?>
                </li>
                
                <?php garis() ?>

                <li>
                    <label for="nama">Nama Konsumen</label>
                    :<input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="barang">Pilih Jenis Barang</label>
                    :<select name="barang" id="barang">
                        <option value="Peralatan Rumah Tangga">Peralatan Rumah Tanggal</option>
                        <option value="Peralatan Kantor">Peralatan Kantor</option>
                    </select>
                </li>
                <li>
                    <label for="beli_grosir">Pilih Jenis Pembelian</label>
                    :<input type="radio" name="beli" value="Grosir" id="beli_grosir" required>
                    <label for="beli_grosir">Grosir</label>

                    <input type="radio" name="beli" value="Ecer" id="beli_ecer" required>
                    <label for="beli_ecer">Ecer</label>
                </li>

                <li>
                    <label for="nbarang">Masukan Nama Barang</label>
                    :<select name="nbarang" id="nbarang">
                        <option value="Kulkas">Kulkas == 1.500.000</option>
                        <option value="Kompor">Kompor == 500.000</option>
                        <option value="Lemari Besi">Lemari Besi == 2.500.000</option>
                        <option value="Kursi Kantor">Kursi Kantor == 1.500.000</option>
                    </select>
                </li>
                <li>
                    <label for="jbeli">Masukan Jumlah Beli</label>
                    :<input type="number" name="jbeli" id="jbeli" min="1" required>
                </li>

                <?php garis() ?>

                <li>
                    <label for="alamat">Alamat Pengiriman</label>
                    :<textarea name="alamat" id="alamat"></textarea>
                </li>

                <?php garis() ?>

                <li>
                    <button type="submit">Proses</button>
                    <span></span>
                    <span></span>
                    <button type="Reset">Batal</button>
                </li>

            </ul>
        </div>
    </form>
    
</body>
</html>