<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person page</title>
</head>
<body>
    <div>
        <h3>User info:</h3>
        <?php
            function redirectToHome(): void
            {
                header('Location: /index2c.php');
                exit();
            }

            if (false === isset($_SESSION["user_data"]))
            {
                redirectToHome();
            }

            echo "<ul>";
            foreach ($_SESSION["user_data"] as $info)
            {
                echo "<li>$info";
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>