<!-- ====== Задание 2.а ====== -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab3: Ex. 2a - Форма. Сессии и Куки</title>
</head>
<body>
    <div id="text_analys">
        <?php
        $count = "0";
        $symbols = "0";
        $text = "";

        if (isset($_POST['count_button']) && isset($_POST['text']))
        {
            $text = $_POST['text'];
            $matches = array();

            $regexp = '/\S+/ui';
            $count = (string)preg_match_all($regexp, $text, $matches);

            $regexp = '/./ui';
            $symbols = (string)preg_match_all($regexp, $text, $matches);
        }
        ?>

        <form method="post">
            <textarea name="text" rows="10"></textarea>
            <input type="submit" name="count_button" value="Count">
            <p><?=$count?> слов и <?=$symbols?> символов найдено в тексте "<?=$text?>"</p>
        </form>


    </div>
</body>
</html>