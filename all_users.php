<?php
require "databse.php";

//sql select
$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

$allUsers = mysqli_fetch_all($result, MYSQLI_ASSOC);

//var_dump($allUsers);

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
        <?php if(empty($allUsers)):?>
            <p>database is empty</p>
        <?php else: ?>
            <ul>
                
            </ul>
            <table>
                <tr>
                    <td>Meno</td>
                    <td>Priezvisko</td>
                    <td>Vek</td>
                    <td>Operacia</td>
                </tr>
                <?php foreach($allUsers as $oneUser): ?>
                    <tr>
                        <td><?php echo $oneUser['first_name'];?></td>
                        <td><?php echo $oneUser['last_name']; ?></td>
                        <td><a href="one_user.php?id= <?php echo $oneUser['id']; ?> ">more info..</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        <?php endif; ?>
        <a href="index.php">Back to</a>
    </main>
    <footer></footer>
</body>
</html>