<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab3: Ex. 3 - Доска объявлений</title>
</head>
<body>
    <div id="form">
        <!-- ====== Форма добавления новых объявлений ======-->
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <?php
                // Обработка категорий

                echo '<select name="category" required>';

                $dir = opendir('categories');
                while ($file = readdir($dir))
                {
                    if (is_dir('categories/'.$file) && $file != '.' && $file != '..') {
                        echo '<option value="'.$file.'">'.$file.'</option>';
                    }
                }

                echo '</select>';
            ?>

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
                    // Обработка объявлений из папки categories

                    $dir = opendir('categories');

                    // Считываем каждую папку из categories
                    while ($file = readdir($dir))
                    {
                        if (is_dir('categories/'.$file) && $file != '.' && $file != '..')
                        {
                            $subdir = opendir('categories/'.$file);

                            // Проходимся по каждому объявлению
                            while ($obj = readdir($subdir))
                            {
                                if ($obj != '.' && $obj != '..')
                                {
                                    // Открываем файл и считываем описание
                                    $fp = fopen('categories/'.$file.'/'.$obj, 'r');
                                    $desc = "";
                                    while ($line = fgets($fp))
                                    {
                                        $desc .= $line;
                                    }
                                    fclose($fp);

                                    // Выводим строчку в таблице с данными объявления
                                    echo '<tr>';
                                    echo "<td>$file</td>";
                                    echo "<td>".substr($obj, 0, strlen($obj) - 4)."</td>";
                                    echo "<td>$desc</td>";
                                    echo '</tr>';
                                }
                            }
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>