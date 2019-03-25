<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 16:32
 */

?>
<?php
function tabel($txt1, $txt2, $txt3, $txt4) {
    echo '<table>';
    echo '<tr>';
    for ($i = 1; $i <= 4; $i++) {
        echo '<td>';
        echo ${'txt'.$i};
        echo '</td>';
    }
    echo '</tr>';
    echo '</table>';
}
tabel('testin', 'tabeli', 'formattimist', 'phps');