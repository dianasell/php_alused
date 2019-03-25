<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 23:01
 */

function htmlFromFile($fileName) {
    $fileName = 'html/'.$fileName.'.html';
    $fp = fopen($fileName, 'r');
    $content = fread($fp, filesize($fileName));
    fclose($fp);
    return $content;
}

