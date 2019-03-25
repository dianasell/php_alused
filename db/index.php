<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 23:00
 */

require_once('db_connect.php');

$connect = connect_db(DBHOST,DBUSER,DBPASS,DBNAME);
$updateSql = 'UPDATE user SET last_name = "Perenimi" WHERE user_id = 1';
$result = query($updateSql, $connect);

$selectSql = 'SELECT * FROM user';
$result = getData($selectSql, $connect);

echo '<pre>';
print_r($result);

echo 'Tere, '.$result[0]['first_name'].' '.$result[0]['last_name'].'<br>';

$selectTime = 'SELECT NOW()';
$time = getData($selectTime, $connect);

echo '<pre>';
print_r($time);

echo $time[0]['NOW()'].'<br>';