<?php

// Buatkanlah sebuah fungsi yang akan membandingkan dua buah string nama. lalu, tampilkan jumlah karakter dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selishnya

function pembandingNama($nama1, $nama2) {
    // Menghitung jumlah karakter dari masing-masing nama
    $jumlahNama1 = strlen($nama1);
    $jumlahNama2 = strlen($nama2);

    // Menampilkan jumlah karakter dari masing-masing nama
    echo "Jumlah Nama 1 : $jumlahNama1\n";
    echo "Jumlah Nama 2: $jumlahNama2\n";

    if ($jumlahNama1 > $jumlahNama2) {
        $selisih = $jumlahNama1 - $jumlahNama2;
        echo "$nama1 lebih panjang dari $nama2 dan selisihnya $selisih karakter.\n";
    } elseif ($jumlahNama2 > $jumlahNama1) {
        $selisih = $jumlahNama2 - $jumlahNama1;
        echo "$nama2 lebih panjang dari $nama1 dan selisihnya $selisih karakter.\n";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.\n";
    }
}

pembandingNama("Tegar Alwan Sayyidina Hk", "Sakti Alanbiya Hk");

?>
