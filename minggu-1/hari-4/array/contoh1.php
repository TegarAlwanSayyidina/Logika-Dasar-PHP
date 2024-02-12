<?php
// dari array tersebut hitunglah jumlah rata-rata dari nilai tiap-tiap siswa. Lalu tampilkan seperti berikut

$student = [
    [
        'nama' => 'Ahmad',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Muhammad',
        'nilai' => [86, 70, 80, 83, 81],
    ],
    [
        'nama' => 'Alwan',
        'nilai' => [83, 91, 70, 73, 81],
    ]
    ];

    echo "<ol>";
    foreach ($student as $key=>$value){
            echo "<li>".$value['nama'] . " = ".(array_sum($value['nilai']) / (count($value['nilai']))) . "</li>";
    }
    
    echo "</ol>";
