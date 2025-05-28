<?php function garis() {
    $i = 0;
    while ($i < 97) {
        echo "-";
        $i++;
} 
}
$opsi = [
    "Peralatan Rumah Tangga" => [
        "Kulkas" => 1500000,
        "Kompor" => 500000
    ],
    "Peralatan Kantor" => [
        "Lemari Besi" => 2500000,
        "Kursi Kantor" => 1500000
    ]
    ];

$selectedJenis = $_POST['barang'] ?? null;
$selectedNama = $_POST['nbarang'] ?? null;
$nopesan = $_POST['pesan'] ?? null;
$nama = $_POST['nama'] ?? null;
$jenisBeli = $_POST['barang'] ?? null;
$alamat = $_POST['alamat'] ?? null;
$jumlahBeli = $_POST['jbeli'] ?? null;
?>