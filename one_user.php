<?php
require "databse.php";

//sql select

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $sql = "SELECT * FROM users WHERE id =".$_GET['id'];

    $result = mysqli_query($conn, $sql);

    $oneUser = mysqli_fetch_assoc($result);

    //var_dump($oneUser);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>One user</title>
</head>
<body>
<header></header>
    <main>
        <h1>User details:</h1>
        <?php if($oneUser === NULL): ?>
            <p>User doesn't exist!!!</p>
        <?php else: ?>
            <h2><?php echo $oneUser['first_name']." ".$oneUser['last_name']; ?></h1>
            <h3>vek: <?php echo $oneUser['age'];?></h3>
        <?php endif; ?>
    </main>
    <a href="all_users.php">Back</a>
    <footer></footer>
</body>
</html>