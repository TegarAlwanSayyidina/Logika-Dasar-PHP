<?php
$tahun_lahir = 2007;
$tahun_sekarang = date("Y");

$selisih_tahun = $tahun_sekarang - $tahun_lahir;

if ($selisih_tahun >= 17) {
    echo "tahun kelahiran $tahun_lahir ini udh punya ktp, usia sekarang = $selisih_tahun";
} else {
    echo "Tahun kelahiran $tahun_lahir ini belum punya ktp, usia sekarang = $selisih_tahun";
}
?>