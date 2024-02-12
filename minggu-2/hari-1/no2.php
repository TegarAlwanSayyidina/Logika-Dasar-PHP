<?php
// buatkanlah sebuah fungsi yang akan mengubah sebuah number menjadi format "K" untuk ribuan dan "M" untuk jutaan. Misalkan 9500 menjadi 9,5K atau 1.700.000 menjadi 1,7M
function formatNumber($number) {
    if ($number >= 1000000) {
        return number_format($number / 1000000, 1) . 'M';
    } elseif ($number >= 1000) {
        return number_format($number / 1000, 1) . 'K';
    } else {
        return $number;
    }
}

echo formatNumber(9500);
echo "<br/>";
echo formatNumber(1700000);

?>