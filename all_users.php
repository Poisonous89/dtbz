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

echo "Database is connected";

//sql select
$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

var_dump($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>All users</title>
</head>
<body>
    <header></header>
    <main>
        <h1>All users</h1>
        <br>
        <a href="index.php">Back to</a>
    </main>
    <footer></footer>
</body>
</html>