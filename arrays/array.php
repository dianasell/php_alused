<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 19:02
 */

$users = array(
    array (
    'Kalle',
    'Malle',
    'Priit',
    'Anne'
), array(
    'Särg',
    'Kärg',
    'Clown',
    'female',
    )
);

echo '<table style="border: solid 1px">';
echo '<tr>
    <th>kasutaja</th>
    <th>eesnimi</th>
    <th>perenimi</th>
    <th>sugu</th>
    </tr>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user[$i].'</td>';
    echo '</tr>';
    for ($i = 0; $i < count($user); $i++) {
        if($user[3] == 'female') {
            echo '<td style="background: green;">';
        } else {
            echo '<td style="background: green;">';
        }
        echo $user[$i].'</td>';
    }
}

