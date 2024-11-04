<?php

$serverName = "DESKTOP-NBMK98F\SQLEXPRESS";
$connectionInfo = [
    "Database" => "phpcrud"
];

$conn = sqlsrv_connect($serverName, $connectionInfo) or die(print_r(sqlsrv_errors(), true));