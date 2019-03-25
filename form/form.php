<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 23.03.2019
 * Time: 10:15
 */

$name = $_GET['name'];
$formattedName = strtoupper(implode('.',str_split($name)));
echo $formattedName.'.';

?>


