<!-- ====== Задание 2.b ====== -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab3: Ex. 2b - Форма. Сессии и Куки</title>
</head>
<body>
    <div id="person">
        <form action="person.php" method="post">
            <p>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" required> <br>
            </p>

            <p>
                <label for="second_name">Second Name</label>
                <input type="text" name="second_name" required> <br>
            </p>

            <p>
                <label for="age">Age</label>
                <input type="number" name="age" required><br>
            </p>

            <input type="submit" name="send_data" value="Send Data">
        </form>

        <form action="page.php" method="post">
            <input type="submit" name="open_page" value="Open other page">
        </form>
    </div>
</body>
</html>