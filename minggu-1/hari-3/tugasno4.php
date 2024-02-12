<?php 

// Dani ingin membangun rumah disuatu komplek perumahan dengan panjang tanah 13 meter dan lebar tanah 9 meter. Tetapi sebelum membangun rumah, Dani harus memberikan laporan terlebih dahulu tipe rumah yang ingin dia buat kepada kontraktor bangunan. Dengan luastanah yang dia punya, masuk ke kategori manakah rumah Dani nantinya.
// -tipe 36 : <90 m2
// -tipe 45 : 90 - 96 m2
// -tipe 54 : 96 - 120m2
// -tipe 60 : 120 - 150 m2
// -tipe 80 : >150 m2

 $panjangTanah = 13;
 $lebarTanah = 9;

 $luasTanah = $panjangTanah * $lebarTanah;

 if ($luasTanah < 90) {
    $tipeRumah = "Tipe 36";
} elseif ($luasTanah >= 90 && $luasTanah < 96) {
    $tipeRumah = "Tipe 45";
} elseif ($luasTanah >= 96 && $luasTanah <120 ){
    $tipeRumah = "Tipe 54";
} elseif ( $luasTanah >= 120 && $luasTanah <150) {
    $tipeRumah = "Tipe 60";
} else {
    $tipeRumah = "Tipe 70";
}

echo "Luas tanah Dani adalah $luasTanah M2, dapat membangun rumah dengan tipe $tipeRumah.";

?>