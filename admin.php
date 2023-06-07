<?php
session_start();

// Подключение к базе данных
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "love";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$conn->set_charset('utf8');

// Запрос на выборку данных из базы данных
$query = "SELECT * FROM zaya ORDER BY date, time";
$result = $conn->query($query);



// Проверка, был ли выполнен запрос на выход
if (isset($_GET["logout"])) {
	// Очистка всех сессионных данных
	session_unset();

	// Уничтожение сессии
	session_destroy();

	// Перенаправление на главную
	header(('LOCATION: index.php'));
	exit();
}

?>


<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Администратор</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poiret+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>


	<header class="header  ">

		<nav class="navbar navbar-expand-lg header-bg">
			<div class="container d-flex justify-content-beetwen" style="background-color: #F5F5F7;">

				<a class="navbar-brand logo" href="index.php">Lubov</a>
				<p>Вы аторизовались как Администратор</p>
				<a href="?logout=true" class="btn btn-header">Выйти</a>




			</div>
		</nav>
	</header>
	<!-- header-end -->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				// Проверка наличия результатов
				if ($result->num_rows > 0) {
					// Вывод данных
					while ($row = $result->fetch_assoc()) {
						// Доступ к значениям полей записи
						$name = $row['name'];
						$surname = $row['surname'];
						$date = $row['date'];
						$time = $row['time'];
						$proc = $row['proc'];

						// Дальнейшая обработка данных...
						echo "<div class='prof zapis p-4 pl-5 mt-4'>";
						echo "<p style='font-size: 26px; color: rgb(48, 47, 47); margin-bottom: 15px;'>" . $name . " " . $surname . "</p>";
						echo "<p style='font-size: 20px; color: rgb(48, 47, 47);'>" . $proc . " | Дата: " . $date . " | Время: " . $time . "</p>";
						echo "</div>";
					}
				} else {
					echo  "<p style='font-size:30px;'>Записей нет</p>";

				}




				?>
			</div>
		</div>
	</div>

</body>

</html>