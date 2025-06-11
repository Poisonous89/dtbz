<?php
//pripojentie

$db_host = "localhost";
$db_user = "admin";
$db_password = "admin123";
$db_name = "db_user";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

//echo "Database is connected";

?>