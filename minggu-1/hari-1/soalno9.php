<?php

$a = 5;

// Menentukan jenis bilangan

if(is_int($a)) {
    if($a > 0) {
        echo "Variabel adalah bilangan positif";
    }else if ($a < 0) {
        echo "Variabel adalah bilangan negatif";
    }else {
        echo "Variabel adalah bilangan cacah.";
}
}

$kelipatan = 3;
if ($a % $kelipatan == 0) {
    echo ", Variabel adalah kelipatan dari " . $kelipatan . ".";
}else {
    echo ", Variabel adalah bukan kelipatan dari " . $kelipatan . ".";
}
?>
