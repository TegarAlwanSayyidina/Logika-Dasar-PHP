<?php 

// Waktu tidur yang baik untuk usia 6-12 adalah 10 jam. Untuk usia 12-18 adalah 8-9 jam. Untuk usia 18-30 adalah 7-8 jam. 
// Apabila seseorang berusia 17 tahun, maka berapa waktu tidur yang baik?

$umur = 10;

if ($umur >= 6 && $umur < 12){
    echo "Jam tidur untuk umur dibawah 12 tidur 10 jam";
} else if ($umur >= 12 && $umur < 18){
    echo "Jam Tidur untuk umur diatas 18-30 tidur 8-9 jam";
} else if ($umur >= 18 && $umur <= 30){
    echo "Jam tidur untuk umur 30 keatas tidur 7-8 jam";
} else {
    echo "Tidak Boleh lebih dari jam 7";
}

?>