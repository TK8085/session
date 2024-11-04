<?php

    session_start();
    print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome Member!</h1>
    <?php

    echo($_SESSION['user']);

    ?>

    <div>
        <a href="./index.php?lo=y">Log Out</a>
    </div>
</body>
</html>