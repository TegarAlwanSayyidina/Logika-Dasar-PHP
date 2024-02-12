<?php

// Setiap orang memiliki IMT dan kategori IMT nya masing-masing Berikut Kategori IMT: 
// -Kurang dari 18.5 : Berat badan kurang 
// -Dari 18.5 sampai kurang dari 22.9 : Normal
// -Dari 22.9 sampai kurang dari 24.9 : Berat Badan Lebih
// -Lebih dari dan sama dengan 25 : Obesitas

// Jika Beni Memiliki berat badan 44 kg dengan tinggi badan 148 cm, termasuk kedalam kategori apakah Beni

$berat = 55;
$tinggi = 164;

//bagi 100
$pembagi = $tinggi/100;

$imt = ($berat/($pembagi*$pembagi));

if ($imt <= 18.5){
    echo "Berat badan kurang ";
} else if(($imt >= 18.5) && ($imt <= 22.9)){
    echo "Berat Badan Normal";
}else if(($imt >= 22.9) && ($imt <= 24.9)){
    echo "Berat berat lebih";
}else if($imt >= 25){
    echo "Obesitas";
}

echo " Beni adalah " . round($imt) . " ";
?>