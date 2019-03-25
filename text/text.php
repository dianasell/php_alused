<?php

$name1 = $_GET['name1'];
echo ucfirst(strtolower($name1));
echo '<br>';

$name2 = $_GET['name2'];
$point = strtoupper(implode('.',str_split($name2)));
echo $point.'.';
?>
