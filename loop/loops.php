<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 17:13
 */
?>
<?php
$arv = 12938104982394583209582390458;
$found = 0;
while($arv != 0) {
    $number = $arv % 10;
    echo 'Number = '.$number.'</br>';
    $arv = $arv / 10;
    echo 'Arv ümardamata = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv ümardatult = '.$arv.'</br>';
    if($number == 5) {
        $found++;
    }
    echo '<hr>';
    $sum += $number;
}
echo 'Number 5 esineb '.$found.' korda<br>';

echo '<table>';
    echo '<tr>';
    for ($rnr = 0; $rnr <= 10; $rnr++) {
        $txt = ($rnr == 0) ? '&nbsp;' : $rnr;
        echo '<th>'.$rnr.'</th>';
    }
    echo '</tr>';
    for ($rnr = 1; $rnr <= 10; $rnr++) {
        echo'<tr>';
            echo '<th>'.$rnr.'</th>';
            for ($vnr = 1; $vnr <= 10; $vnr++) {
                echo '<td>';
                echo ($rnr * $vnr);
                echo '</td>';
            }
        echo'</tr>';
    }
echo '</table>';