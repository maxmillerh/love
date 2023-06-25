<?php
session_start();


include 'time.php';
include 'get_times.php';
include 'zayavka.php';


// Подключение к базе данных
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "love";

$connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$connection->set_charset('utf8');

// Запрос на выборку данных из базы данных
$query = "SELECT * FROM zaya ORDER BY date, time";
$result = $connection->query($query);


// Запрос для получения уникальных дат из базы данных
$sql = "SELECT DISTINCT date FROM time ";
$result_times = $connection->query($sql);




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
	<link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poiret+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">

</head>

<body>


	<header class="header  ">

		<nav class="navbar navbar-expand-lg header-bg">
			<div class="container d-flex justify-content-between" style="background-color: #F5F5F7;">

				<a class="navbar-brand logo logo-admin" href="index.php">Lubov</a>

				<div class="">
					<button class="btn btn-header btn-header-admin" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить время</button>
					<button class="btn btn-header btn-header-admin" data-bs-toggle="modal" data-bs-target="#exampleModal2">Добавить запись</button>

				</div>

				<a href="?logout=true" class="btn btn-header btn-header-admin">Выйти</a>

			</div>

			</div>
		</nav>
	</header>



	<div class="container">
		<div class="row mb-3">
			<div class="col-12 col-lg-8">
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
						$price = $row['price'];

						// Дальнейшая обработка данных...
						echo "<div class='prof zapis p-4 pl-5 mt-2 mt-lg-4'>";
						echo "<p style='font-size: 26px; color: rgb(48, 47, 47); margin-bottom: 15px;'>" . $name . " " . $surname . "</p>";
						echo "<p style='font-size: 20px; color: rgb(48, 47, 47);'>" . $proc . " | Дата: " . date("d.m", strtotime($date)) . " | Время: " . date("H:i", strtotime($time)) . " | Цена: " . $price .  "</p>";
						echo "</div>";
					}
				} else {
					echo  "<p style='font-size:30px;'>Записей нет</p>";
				}




				?>
			</div>
			<div class="col-12 col-lg-4  mt-4">
				<div class="prof p-3">
				<?php

				if ($result_times->num_rows > 0) {
					while ($row = $result_times->fetch_assoc()) {
						$date = $row['date'];
						echo "<h4 class='free_date_admin'>" . date("d.m", strtotime($date)) . "</h4>";

						// Запрос для получения времени, относящегося к данной дате
						$timeSql = "SELECT time FROM time WHERE date = '$date' ORDER BY time ASC";
						$timeResult = $connection->query($timeSql);
						echo "<div class='mda'>";
						if ($timeResult->num_rows > 0) {
							while ($timeRow = $timeResult->fetch_assoc()) {
								$time = $timeRow['time'];
								echo "<span class='free_time_admin'>" . date("H:i", strtotime($time)) . "</span>";
							}
							echo "</div>";
						} else {
							
						}
					}
					echo "</div>";
				} else {
					echo "<p>Нет доступного времени.</p>";
				}
				?>
				</div>
			</div>
		</div>
	</div>



	<!-- Modal-zapis -->
	<div class="modal fade modal-zaya" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">

			<form class="modal-content" method="post" action="">
				<div class="modal-header">
					<h1 class="modal-title  " id="exampleModalLabel">Добавить Запись</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<input name="name2" id="name2" type="text" placeholder="Имя" required pattern="[А-Яа-яЁё ]+" title="Пожалуйста, используйте только русские буквы">
					<input name="surname2" id="surname2" type="text" placeholder="Фамилия" required pattern="[А-Яа-яЁё ]+" title="Пожалуйста, используйте только русские буквы">
					<input name="tel2" id="tel2" type="tel" placeholder="Номер телефона" required pattern="[+0-9\s()\-\x2012]+">
					<select name="procedure2" id="procedure2" required>
						<option value="" disabled selected>Выберите процедуру</option>
						<option value="Классика">Наращивание Классика</option>
						<option value="2D эффект">Наращивание 2D эффект</option>
						<option value="3D эффект">Наращивание 3D эффект</option>
						<option value="4D эффект">Наращивание 4D эффект</option>
						<option value="Y эффект">Наращивание Y эффект</option>
						<option value="Снятие чужой работы">Наращивание Снятие чужой работы</option>
						<option value="Усики">Шугаринг усики</option>
						<option value="Подмышечные впадины">Шугаринг подмышечные впадины</option>
						<option value="Руки до локтя">Шугаринг руки до локтя</option>
						<option value="Руки полностью">Шугаринг руки полностью</option>
						<option value="Ноги до колена">Шугаринг ноги до колена</option>
						<option value="Ноги полностью">Шугаринг ноги полностью</option>
						<option value="Бикини класика">Шугаринг бикини класика</option>
						<option value="Бикини глубокое">Шугаринг бикини глубокое</option>
						<option value="Блеск-тату">Шугаринг блеск-тату</option>
						<option value="Брови напыление">Перманентный брови напыление</option>
						<option value="Брови коррекция">Перманентный брови коррекция</option>
						<option value="Глаза напыление">Перманентный глаза напыление</option>
						<option value="Глаза коррекция">Перманентный глаза коррекция</option>
						<option value="Губы напыление">Перманентный губы напыление</option>
						<option value="Губы коррекция">Перманентный губы коррекция</option>
						<option value="Микроблейдинг">Перманентный микроблейдинг</option>
						<option value="Микроблейдинг коррекция">Перманентный микроблейдинг коррекция</option>
					</select>

					<select name="date2" id="date2" required>
						<option value="" disabled selected>Выберите дату</option>
						<?php
						$dateQuery = "SELECT DISTINCT date FROM time";
						$dateResult = mysqli_query($connection, $dateQuery);

						while ($row = mysqli_fetch_assoc($dateResult)) {
							$date = $row['date'];
							echo "<option value='$date'>" . date("d.m", strtotime($date)) . "</option>";
						}
						?>
					</select>

					<select name="time2" id="time2" required>
						<option value="" disabled selected>Выберите время</option>
					</select>


					<script>
						document.getElementById('date2').addEventListener('change', function() {
							var selectedDate = this.value;
							var timeSelect = document.getElementById('time2');
							timeSelect.innerHTML = '<option value="" disabled selected>Выберите время</option>';

							// Запрос на сервер для получения времени на основе выбранной даты
							var xhr = new XMLHttpRequest();
							xhr.onreadystatechange = function() {
								if (xhr.readyState === XMLHttpRequest.DONE) {
									if (xhr.status === 200) {
										var times = JSON.parse(xhr.responseText);
										times.forEach(function(time) {
											var option = document.createElement('option');
											option.value = time;
											option.text = time;
											timeSelect.appendChild(option);
										});
									} else {
										console.log('Ошибка: ' + xhr.status);
									}
								}
							};
							xhr.open('GET', 'get_times.php?date=' + selectedDate, true);
							xhr.send();
						});
					</script>

				</div>
				<div class="modal-footer justify-content-between ">
					<div class=""></div>
					<button name="submit" class="btn btn-header d-block mt-4 btn-zaya">Записать</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Modal-time -->
	<div class="modal fade modal-time" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">

			<form class="modal-content" method="post" action="">
				<div class="modal-header">
					<h1 class="modal-title  " id="exampleModalLabel">Добавить время</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<input name="date" id="date" type="date" placeholder="Дата" required>
					<input name="time" id="time" type="time" placeholder="Время" required>

				</div>
				<div class="modal-footer justify-content-between ">
					<div class=""></div>
					<button type="btnSaveTime" name="btnSaveTime" class="btn btn-header">Сохранить</button>
				</div>
			</form>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(function() {
			$("#tel2").mask("+7(999) 999-99-99", {
				placeholder: "+7(XXX) XXX-XX-XX"
			});
		});
	</script>

</body>

</html>