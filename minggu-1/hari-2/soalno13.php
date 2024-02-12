<?php

// rumah makan beni mengadakan program diskon sebesar 5% tiap pembelian hari selasa. dan setiap pembelian diatas 100.000 mendapatkan diskon sebesar 7%

// Hitunglah uang yang harus dibayar jika total pembelian 130.000 di hari ini

// Total pembelian
$totalPembelian = 130000;

// Hari ini adalah hari Selasa
$hariIni = "rabu";

// Inisialisasi diskon
$diskon = 0;

// Cek jika hari ini Selasa
if ($hariIni == "Selasa") {
    // Berikan diskon 5%
    $diskon = 0.05;
    
    // Cek apakah total pembelian di atas 100.000
    if ($totalPembelian > 100000) {
        // Jika ya, tambahkan diskon 7%
        $diskon += 0.07;
    }

} 
else{

    if ($totalPembelian > 100000) {
        // Jika ya, tambahkan diskon 7%
        $diskon += 0.07;
    }
}

// Menghitung jumlah diskon
$jumlahDiskon = $totalPembelian * $diskon;

// menghitung jumlah dibayar setelah diskon
$totalSetelahDiskon = $totalPembelian - $jumlahDiskon;

// menampilkan hasil
echo "<p><strong>Total:</strong> Rp " . number_format($totalPembelian, 0, ',', '.') . "</p>";
echo "<p><strong>Diskon:</strong> " . ($diskon * 100) . "%</p>";
echo "<p><strong>Jumlah Diskon:</strong> Rp " . number_format($jumlahDiskon, 0, ',', '.') . "</p>";
echo "<p><strong>Total yang Harus Dibayar:</strong> Rp " . number_format($totalSetelahDiskon, 0, ',', '.') . "</p>";

?>
