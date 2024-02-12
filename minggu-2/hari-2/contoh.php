<?php 

$data = [80, 90, 75, 100, 85, 100, 66];

function searchNumber($angkaYangDicari, ...$data) {
    $jumlah = 0;
    foreach ($data as $key => $value) {
        if ($value == $angkaYangDicari) {
            $jumlah += 1;
        }
    }
    return $jumlah;
}

$angkaYangDicari = 100;
echo "Jumlah angka $angkaYangDicari = " . searchNumber($angkaYangDicari, 100,20,40,80,100);
echo "<br>";
$angkaYangDicari2 = 80;
echo "Jumlah angka $angkaYangDicari2 = " . searchNumber($angkaYangDicari2, 100,20,40,80,100);
?>