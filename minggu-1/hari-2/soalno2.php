<?php

    // Nilai minimum
    $nilai_mtk = 87;
    $nilai_inggris = 85;
    $nilai_indonesia = 87;
    $nilai_minimum = 85;

    // Nilai peserta bisa diganti
    $nilai_mtk_siswa = 89;
    $nilai_inggris_siswa = 88;
    $nilai_indonesia_siswa = 98;

    // Menghitung rata-rata nilai peserta
    $rata_rata_siswa = ($nilai_mtk_siswa + $nilai_inggris_siswa + $nilai_indonesia_siswa) / 3;

    // Memeriksa syarat pendaftaran
    if ($nilai_mtk_siswa >= $nilai_mtk && $nilai_inggris_siswa >= $nilai_inggris && $nilai_indonesia_siswa >= $nilai_indonesia && $rata_rata_siswa >= $nilai_minimum) {
        echo "Peserta diterima!";
    } else {
        echo "Maaf, peserta tidak diterima";
    }
    ?>