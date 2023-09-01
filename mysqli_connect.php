<?php

$host = '127.0.0.1';
$port = 3306;
$db   = 'aadil';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $con = new mysqli($host, $user, $pass, $db, $port);
    $con->set_charset($charset);
} catch (\mysqli_sql_exception $e) {
     throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
}
unset($host, $db, $user, $pass, $charset); // we don't need them anymore