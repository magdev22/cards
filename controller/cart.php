<?php
function sumCart ($card) {
    $summ = $card + $card + $card;
    $nalogSum = $summ + 100;
    $dostavka = $nalogSum + 20;
    $result = $dostavka - 10;
 
    return print_r($result);
 };


function summ ($numbfirst,$numbSecond,$numbThird,$numbfifth,$numbFourth) {
    $summ = ($numbfirst + $numbSecond + $numbThird + $numbfifth + $numbFourth)/5;

 
    return print_r($summ);
 };
 
 sumCart(5000, 10000, 20000);
 




?>