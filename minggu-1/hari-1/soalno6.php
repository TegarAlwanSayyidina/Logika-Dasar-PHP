<?php

// variabel untuk menyimpan tahun 2023
$year = 2024;

// tahun yang berkelipatan 4 pada bulan februari yang terdapat tanggal 29
if ($year % 4 == 0 ) {
    echo "Tahun $year , bulan Februari sampai dengan tanggal 29";
}else {
    echo "Tahun $year , bulan Februari sampai dengan tanggal 28";
}
?>