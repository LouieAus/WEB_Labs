<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab4: Доска объявлений</title>
</head>
<body>
    <div id="form">
        <!-- ====== Форма добавления новых объявлений ======-->
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <select name="category" required>
                <option value="animals">animals</option>
                <option value="cars">cars</option>
                <option value="fridges">fridges</option>
                <option value="smartphones">smartphones</option>
                <option value="others">others</option>
            </select>
            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="10" name="description"></textarea>

            <input type="submit" value="Save">
        </form>
    </div>

    <!-- ====== Таблица объявлений ======-->
    <div id="table">
        <table>
            <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>
            <?php

            $id = '1ekKo_rpxRuThsHtbe2sUinjakT2ge1VZYH-SiLf8lRs';
            $gid = 0;

            $csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
            $csv = explode("\r\n", $csv);
            $array = array_map('str_getcsv', $csv);

            foreach ($array as $row) {
                echo '<tr>';
                echo '<td>' . $row[0] . '</td>';
                echo '<td>' . $row[1] . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>