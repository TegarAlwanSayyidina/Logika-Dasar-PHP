<?php

// Menu makan di rumah makan Beni
// -Nasi Goreng = 15000
// -Ayam Bakar = 20000
// -Nasi Kebuli = 25000
// -Aneka Jus = 8000
// -Es Teh Manis = 3000
// -Es Jeruk = 5000

// Rumah makan Beni Mengadakan program jum'at berkah dengan memberikan diskon sebesar 5% di hari Jum'at dan 2% di hari Senin.
// Hitunglah harga yang harus dibayar jika Dani ingin membeli 2 nasi Kebuli, 1 Ayam Bakar, 2 nasi Goreng (Gunakan hari secara otomatis dari hari ini)


$nasi_goreng = 15000 ;
$ayam_bakar = 20000 ;
$nasi_kebuli = 25000 ;
$aneka_jus = 8000 ;
$esteh_manis = 3000 ;
$es_jeruk = 5000 ;
$paket = $nasi_kebuli + $nasi_kebuli + $ayam_bakar + $nasi_goreng + $nasi_goreng;
$diskon = 0;
$tanggal = date("l-m-Y");
$hari = date("l");

if ($hari == "Friday") {
    $diskon = 5;
}elseif ($hari == "Monday") {
    $diskon = 2;
}else{
    $diskon = 0;
}


$paket *= ((100 - $diskon) / 100);

echo "Tanggal: $tanggal";
echo "<br>";
echo "ini bukan hari senin atau jumat : $paket";
echo " <br>";
echo "Diskon : $diskon %";



?>