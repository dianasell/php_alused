<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 22:58
 */

function connect_db($host, $user, $pass, $db)
{
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        echo 'ERROR: Unable to connect to MYSQL' . PHP_EOL;
        echo mysqli_connect_error();
        exit;
    }
    return $conn;
}

function query($sql, $conn) {
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        echo 'Problem with <b>'.$sql.'</b><br>';
        exit;
    }
    return $result;
}

function getData($sql, $conn) {
    $data = array();
    $result = query($sql, $conn);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $row;
    }
    return $data;
}
