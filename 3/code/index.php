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
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <!-- Добавить обратботку папок -->
            <label for="category">Category</label>
            <select name="category" required>
                <option value="cars">Cars</option>
                <option value="other">Other</option>
            </select>

            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="10" name="description"></textarea>

            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>
                <!-- Из папок достать список и сделать через <tr> <td> </td> <td> </td> <td> </td> </tr> -->
            </tbody>
        </table>
    </div>
</body>
</html>