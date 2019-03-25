<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 23:10
 */

$username = $_GET['username'];
$password = $_GET['password'];

$connect = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);

$sql = 'SELECT * FROM user WHERE username="'.$username.'"AND $password = "'.md5($password).'"';

if($users !== false) {
    session_start();
    $_SESSION['user'] = $users[0]['username'];
    header('Location: ../index.php');
}