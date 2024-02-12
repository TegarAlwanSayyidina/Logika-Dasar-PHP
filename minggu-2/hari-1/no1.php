<?php 
    function formatIDN($tanggal) {
    $hariIDN = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',   
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    ];
     return strtr($tanggal , $hariIDN);
    }

    $tanggal = date('l, d M Y');
    echo $tanggal;
    echo " vs ";
    formatIDN($tanggal);


?>