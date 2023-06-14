<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include 'mini_zaya.php';
include 'delete_zaya.php';
include 'get_times.php';

// Проверка, что пользователь авторизован
if (isset($_SESSION['name1']) && isset($_SESSION['surname1']) && isset($_SESSION['tel1'])) {
	$username = $_SESSION['name1'];
	$usersurname = $_SESSION['surname1'];
	$tel = $_SESSION['tel1'];
	$email = $_SESSION['email'];
	$photo = $_SESSION['photo'];
} else {
	// Пользователь не авторизован, выполните соответствующие действия
	echo "Вы не авторизованы!";
}

// Подключение к базе данных
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "love";

$connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$connection->set_charset('utf8');

// Проверка, была ли отправлена форма с почтой
if (isset($_POST['sandEmail'])) {

	$email = $_POST["email"];

	// Обновление записи в базе данных
	$query = "UPDATE registr SET email = ? WHERE tel = ?";
	$stmt = $connection->prepare($query);
	$stmt->bind_param("ss", $email, $tel);
	$stmt->execute();
	// Проверка успешности выполнения запроса
	if ($stmt->affected_rows > 0) {
		// Почта успешно добавлена в базу данных
		$_SESSION['email'] = $email;
	} else {
		// Произошла ошибка при добавлении почты
		$message =  $connection->error;
		echo $message;
	}

	if ($stmt->error) {
		echo "Ошибка при выполнении запроса: " . $stmt->error;
	}
}
$_SESSION['email'] = $email;

//добавление фото в бд
if (isset($_POST['btnSavePhoto'])) {

	$photo = $_POST["photo"];

	// Обновление записи в базе данных
	$query = "UPDATE registr SET photo = ? WHERE tel = ?";
	$stmt = $connection->prepare($query);
	$stmt->bind_param("ss", $photo, $tel);
	$stmt->execute();
	// Проверка успешности выполнения запроса
	if ($stmt->affected_rows > 0) {
		// Почта успешно добавлена в базу данных
		$_SESSION['photo'] = $photo;
	} else {
		// Произошла ошибка при добавлении почты
		$message =  $connection->error;
		echo $message;
	}

	if ($stmt->error) {
		echo "Ошибка при выполнении запроса: " . $stmt->error;
	}
}
$_SESSION['photo'] = $photo;

// Запрос на выборку данных из базы данных для вывода записей
$query = "SELECT * FROM zaya WHERE tel = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $tel);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lubov Usanova</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poiret+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Обработчик нажатия кнопки "Отменить запись"
			var deleteButtons = document.getElementsByClassName('btn-delete');
			for (var i = 0; i < deleteButtons.length; i++) {
				deleteButtons[i].addEventListener('click', function() {
					var recordId = this.getAttribute('data-record-id');
					// Отправка запроса на сервер для удаления записи с использованием AJAX
					var xhr = new XMLHttpRequest();
					xhr.open('POST', 'delete_zaya.php', true);
					xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhr.onreadystatechange = function() {
						if (xhr.readyState === 4) {
							if (xhr.status === 200) {
								// Обновление страницы или выполнение других действий при успешном удалении
								location.reload(); // Обновление страницы
							} else {
								// Обработка ошибок при удалении записи
								alert('Ошибка удаления записи');
							}
						}
					};
					var params = 'recordId=' + encodeURIComponent(recordId);
					xhr.send(params);
				});
			}
		});
	</script>

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

					<ul class="navbar-nav spec-position js-toc-list">
						<li class="nav-item ">
							<a class="nav-link menu-link" aria-current="page" href="index.php#uslugi">Услуги</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="index.php#recom">Рекомендации</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="index.php#sert">Сертификаты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="index.php#otzv">Отзывы</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="index.php#cont">Контакты</a>
						</li>
					</ul>
					<?php
					// Проверка, был ли выполнен запрос на выход
					if (isset($_GET["logout"])) {
						// Очистка всех сессионных данных
						session_unset();
						// Уничтожение сессии
						session_destroy();
						// Перенаправление на главную
						header('LOCATION: index.php');
						exit();
					}
					?>
					<a href="?logout=true" class="btn btn-header">Выйти</a>

				</div>

			</div>
		</nav>
	</header>
	<div class="container">
		<div class="shadow-blok mb-md-5 mb-4" style="float: right; transform: rotate(180deg); width: 100%; "></div>

	</div>
	<!-- header-end -->


	<div class="container">
		<div id="zaya" class="help1">
			<h3 style="margin-top: 0px; margin-bottom: 0px; font-size: 28px;" class=" element-animation">Личный профиль</h3>
		</div>
		<hr style="width:55%; color: black;">
	</div>

	<div class="main-profile">
		<div class="container pr-md-5 pl-md-5 d-flex oxxx ">
			<div class="row g-md-5 w100prof">
				<div class="col-12 col-md-5 element-animation mb-10">
					<div class="prof p-4">

						<?php if (!empty($photo)) : ?>
							<img data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-dismiss="modal" src="img/<?php echo $photo; ?>" class="card-img-top profile-photo" alt="Фото пользователя">
						<?php else : ?>
							<button style="width: 70%; height:292px; font-size:90px;" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-dismiss="modal" class="card-img-top profile-photo">+</button>
						<?php endif; ?>


						<p style="text-align: center; color: rgb(41, 40, 40); margin-bottom:5px;"><?php echo $username, " ", $usersurname ?></p>
						<hr style="width: 60px; margin: 0px auto 30px auto;">
						<p style="line-height: 30px;"><?php echo $tel ?></p>
						<p id="email_p" style="line-height: 30px;"><?php echo $email ?></p>

						<form id="content_mailAdd" class="content-mailAdd d-none mt-4" method="post" action="">
							<input class="d-block" name="email" id="email" type="email" placeholder="Почта" required>
							<button name='sandEmail' class="btn mb-4 " id="btnMailSave">Сохранить</button>
							<button class="btn mb-4 " id="btnMailOtmena">Отмена</button>
						</form>

						<div class="block-btn-profile mt-4 mb-2">

							<?php if (!$email) : ?>
								<button id="mail_btn" class="prof-otm btn">Добавить почту</button>
							<?php endif; ?>



							<button class="prof-otm btn">Изменить пароль</button>
						</div>


					</div>
				</div>

				<div class="col-12 col-md-7 ml-5 element-animation  mb-10">
					<p>Ваши записи:</p>

					<?php
					// Проверка наличия результатов
					if ($result->num_rows > 0) {
						// Вывод данных
						while ($row = $result->fetch_assoc()) {

							// Доступ к значениям полей записи
							$date = $row['date'];
							$time = $row['time'];
							$proc = $row['proc'];
							$price = $row['price'];
							$record_id = $row['id']; // Добавлено: получаем идентификатор записи

							// Дальнейшая обработка данных...
							echo "<div class='prof zapis p-4 pl-5 mt-4'>";
							echo "<p style='font-size: 26px; color: rgb(48, 47, 47); margin-bottom: 30px;'>" . $proc . "</p>";
							echo "<p>Дата: " . date("d.m", strtotime($date)) . "</p>";
							echo "<p>Время: " . date("H:i", strtotime($time)) .  "</p>";
							echo "<div class='d-flex justify-content-between mt-5'>";
							echo "<p style='font-size: 28px; color: rgb(85, 81, 81);'>" . $price . "р </p>";
							echo "<button class='btn btn-delete' data-record-id='$record_id'>Отменить запись</button>"; // Добавлено: атрибут с идентификатором записи
							echo "</div>";
							echo "</div>";
						}
					} else {
						echo  "<p style='font-size:30px;'>У вас пока нет записей <a class='btn' href='#zaya3'>Записаться?</a></p>";
					}
					?>

				</div>
			</div>

		</div>
	</div>

	<div class="shadow-blok mb-5" style="float: right; transform: rotate(180deg); width: 100%; ">
	</div>


	<zayavka class="zayavka">
		<div class=" mb-5 pt-5">
			<div class="container">
				<div id="zaya3" class="help1">
					<h3 style="margin-top: 0px; margin-bottom: 40px;" class="title-design element-animation">Оставить заявку</h3>
				</div>

				<div class="row teni br-10 element-animation">

					<form action="" class="col-12 col-md-6 br-10 block-zaya" method="post" name="zayavka3">
						<select name="procedure3" id="procedure3" required>
							<option value="" disabled selected>Выберите процедуру</option>
							<option value="Классика">Наращивание Классика</option>
							<option value="2D эффект">Наращивание 2D эффект</option>
							<option value="3D эффект">Наращивание 3D эффект</option>
							<option value="4D эффект">Наращивание 4D эффект</option>
							<option value="Y эффект">Наращивание Y эффект</option>
							<option value="Снятие чужой работы">Наращивание Снятие чужой работы</option>
						</select>

						<select name="date3" id="date3" required>
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

						<select name="time3" id="time3" required>
							<option value="" disabled selected>Выберите время</option>
						</select>

						<button name="submit3" class="btn btn-header d-block mt-4 btn-zaya">Записаться</button>

						<script>
							document.getElementById('date3').addEventListener('change', function() {
								var selectedDate = this.value;
								var timeSelect = document.getElementById('time3');
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


					</form>


					<div class=" col-md-6 br-10 z-img br-10 justify-content-center align-items-center">
						<p>Красивой быть <br> просто</p>
					</div>
				</div>
			</div>
		</div>
	</zayavka>

	<footer class="footer">
		<div class="container d-flex justify-content-between potom ">
			<a class="navbar-brand logo" href="index.php">Lubov</a>

			<ul class="navbar-nav  spec-position ">
				<li class="nav-item ">
					<a class="nav-link menu-link" aria-current="page" href="index.php#uslugi">Услуги</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="index.php#recom">Рекомендации</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="index.php#sert">Сертификаты</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="index.php#otzv">Отзывы</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="index.php#cont">Контакты</a>
				</li>
			</ul>

			<div class="socseti">
				<a class="a-soc" target="_blank" href="https://vk.com/l.biuti83">
					<img style="width: 44px;" src="img/vk-logo-svgrepo-com.svg" alt="">
				</a>
				<a class="a-soc" target="_blank" href="https://vk.com/l.biuti83">
					<img src="img/whatsapp-svgrepo-com.svg" alt="">
				</a>
			</div>
		</div>
		<hr>
		<p class="copy ">©LUBOV 2023. Все права защищены</p>
	</footer>

	<!-- Modal-save photo -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" style="max-width: 576px;">
			<form action="" method="post" class="modal-content" name="savephoto">
				<div class="modal-header">
					<h1 class="modal-title" id="exampleModalLabel">Добавить фото</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<input type="file" name="photo" id="photo" required>
				</div>
				<div class="modal-footer justify-content-between ">
					<span></span>
					<button name="btnSavePhoto" type="submit" class="btn btn-header">Сохранить</button>
				</div>
			</form>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/profile.js"></script>
</body>

</html>