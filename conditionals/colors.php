<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 20:00
 */

?>

<?php
$color = 'yellow';
switch ($color) {
    case 'red':
        echo '<div style="background: red;"></div>';
        break;
    case 'yellow':
        echo '<div style="background: yellow;"></div>';
        break;
    case 'green':
        echo '<div style="background: green;"></div>';
        break;
    default:
        echo '<div style="background: black;"></div>';

}


