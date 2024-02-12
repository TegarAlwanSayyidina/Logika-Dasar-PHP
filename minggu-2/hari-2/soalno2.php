<?php
// Buatkanlah sebuah fungsi yang akan menghitung lembar uang rupiah .
// Contoh : 140500
// Lembar Rupiah :
// - Rp. 100.000 : 1
// - Rp. 20.000 : 2
// - Rp. 500 : 1
function rupiah($nomor) {
    $lembaruang = array(100000, 20000, 500);
    echo "Jumlah lembar uang : <br>";
    foreach ($lembaruang as $denomination) {
        $count = floor($nomor / $denomination);
        echo "Rp. " . number_format($denomination, 0, ',', '.') . " : " . $count . "<br>";
        $nomor %= $denomination;
    }
}

rupiah(140500);

?>