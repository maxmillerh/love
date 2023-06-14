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
			<div class="container d-flex justify-content-between" style="background-color: #F5F5F7;">

				<a class="navbar-brand logo" href="index.php">Lubov</a>

				<button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="hamburger">&#9776</span>
				</button>

				<div class="collapse navbar-collapse justify-content-between toc js-toc" id="navbarSupportedContent">

					<span></span>

					<div class="">
						<button class="btn btn-header" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить время</button>
						<button class="btn btn-header" data-bs-toggle="modal" data-bs-target="#exampleModal2">Добавить запись</button>

					</div>

					<a href="?logout=true" class="btn btn-header">Выйти</a>

				</div>

			</div>
		</nav>
	</header>
	<div class="container">
		<div class="shadow-blok mb-md-5 mb-4" style="float: right; transform: rotate(180deg); width: 100%; "></div>

	</div>


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
						$price = $row['price'];

						// Дальнейшая обработка данных...
						echo "<div class='prof zapis p-4 pl-5 mt-4'>";
						echo "<p style='font-size: 26px; color: rgb(48, 47, 47); margin-bottom: 15px;'>" . $name . " " . $surname . "</p>";
						echo "<p style='font-size: 20px; color: rgb(48, 47, 47);'>" . $proc . " | Дата: " . date("d.m", strtotime($date)) . " | Время: " . date("H:i", strtotime($time)) . " | Цена: " . $price .  "</p>";
						echo "</div>";
					}
				} else {
					echo  "<p style='font-size:30px;'>Записей нет</p>";
				}




				?>
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
			$(function(){
		$("#tel2").mask("+7(999) 999-99-99", {placeholder: "+7(XXX) XXX-XX-XX" });
	});
	</script>

</body>

</html>