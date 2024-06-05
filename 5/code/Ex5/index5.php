<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Lab5: Доска объявлений</title>
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
					require_once 'config.php';

					// ---- Подключаемся к бд ----
					$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
					
					// ---- Проверяем является ли соединение успешным ----
					if ($connection->connect_error) {
						die("Error: " . $connection->connect_error);
					}

					// ---- Выюираем все объявления с базы и отоброжаем ----
					$result = $connection->query("SELECT * FROM web.ad");
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row['category'] . "</td>";
						echo "<td>" . $row['title'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['description'] . "</td>";
						echo "</tr>";
					}

					$connection->close();
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>