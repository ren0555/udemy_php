<?php
recuire_once("testscore.php");

function ptintscore(string $name, int $math, int $english, int $japanese): void //戻り値の型
{
    $sum = $math + $english + $japanese;
    $ave = $sum / 3;
    print($name."さんの合計:".$sum."平均".$ave."<br>");
}

$taro = mew testscore();
$taro ->name = "たろう";
$taro ->math = 87;
$taro->english = 92;
$taro->japanese = 74;
printScore($taro->name, $taro->math, $taro->english,$taro->japanese);

$hanako = new testscore();
$hanako->name = "はなこ";
$hanako->math = 95;
$hanako->english = 79;
$hanako->japanese = 83;
printScore($hanako->name, $hanako->math, $hanako->english, $hanako->japanese);

    
    