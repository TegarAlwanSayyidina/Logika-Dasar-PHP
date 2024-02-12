<?php

// buatkanlah sebuah fungsi yang menghasilkan sebuah array dari banyak data yang diterima. Data yang dikirim berbentuk string nama nama jurusan. Jika nama jurusannya ada yang dipanggil duplikat, maka yang dimasukan ke array hanya salah satunya saja (capslock).
// contoh pemanggilan argumentnya : namafunc("PPLG", "HTL", "KLN", "PMN", "pplg"). maka akan menghasilkan array ["PPLG", "HTL", "KLN", "PMN"]

function uniqueJurusan(...$jurusan) {
    $uniqueJurusan = [];

    foreach ($jurusan as $jurusanStr) {
        $normalizedJurusan = strtoupper($jurusanStr);

        // Pastikan hanya nama jurusan dalam format huruf kapital yang ditambahkan
        if (!in_array($normalizedJurusan, $uniqueJurusan) && $normalizedJurusan === $jurusanStr) {
            $uniqueJurusan[] = $normalizedJurusan;
        }
    }

    return $uniqueJurusan;
}

// Contoh pemanggilan dan tampilkan hasil dengan echo
$result = uniqueJurusan("PPLG", "HTL", "KLN", "PMN", "pplg", "htl");
echo "[" . implode(", ", $result) . "]";

?>