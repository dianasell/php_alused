<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 21.03.2019
 * Time: 15:39
 */

$tais = 3;
$real = 3.3;
$sone = '3';
$true = true;
$false = false;

// väljastame muutujad koos selgitusega
echo 'täisarv '.$tais.'<br>';
echo 'reaalarv '.$real.'<br>';
echo 'sõne '.$sone.' <br>';
echo 'True '.$true.'<br>';
echo 'False '.$false.'<br>';
echo '<hr>';

echo gettype($real);
echo "<br>";
$sum = $sone + $sone;
echo 'Summa = '.$sum.'<br>';

$a1 = 42;
$a2 = 11;
echo $a1.' + '.$a2.' = '.($a1 + $a2).'<br>';
echo $a1.' - '.$a2.' = '.($a1 - $a2).'<br>';
echo $a1.' * '.$a2.' = '.($a1 * $a2).'<br>';
echo $a1.' / '.$a2.' = '.($a1 / $a2).'<br>';
echo $a1.' % '.$a2.' = '.($a1 % $a2).'<br>';
echo '<hr>';
echo $a1.' == '.$a2.' on '.($a1 == $a2).'<br>';
echo $a1.' != '.$a2.' on '.($a1 != $a2).'<br>';
echo $a1.' <= '.$a2.' on '.($a1 <= $a2).'<br>';
echo $a1.' >= '.$a2.' on '.($a1 >= $a2).'<br>';
echo $a1.' < '.$a2.' on '.($a1 < $a2).'<br>';
echo $a1.' > '.$a2.' on '.($a1 > $a2).'<br>';