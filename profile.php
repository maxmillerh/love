<?php


session_start();

include 'mini_zaya.php';

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

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$conn->set_charset('utf8');

// Проверка, была ли отправлена форма с почтой
if (isset($_POST['sandEmail'])) {

	$email = $_POST["email"];

	// Обновление записи в базе данных
	$query = "UPDATE registr SET email = ? WHERE tel = ?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ss", $email, $tel);
	$stmt->execute();
	// Проверка успешности выполнения запроса
	if ($stmt->affected_rows > 0) {
		// Почта успешно добавлена в базу данных
		$_SESSION['email'] = $email;
	} else {
		// Произошла ошибка при добавлении почты
		$message =  $conn->error;
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
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ss", $photo, $tel);
	$stmt->execute();
	// Проверка успешности выполнения запроса
	if ($stmt->affected_rows > 0) {
		// Почта успешно добавлена в базу данных
		$_SESSION['photo'] = $photo;

	} else {
		// Произошла ошибка при добавлении почты
		$message =  $conn->error;
		echo $message;
	}

	if ($stmt->error) {
		echo "Ошибка при выполнении запроса: " . $stmt->error;
	}
}
$_SESSION['photo'] = $photo;




// Запрос на выборку данных из базы данных для вывода записей
$query = "SELECT * FROM zaya WHERE tel = ?";
$stmt = $conn->prepare($query);
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

</head>

<body>

	<header class="header  ">

		<nav class="navbar navbar-expand-lg header-bg">
			<div class="container d-flex justify-content-between" style="background-color: #F5F5F7;">

				<a class="navbar-brand logo" href="index.php">Lubov</a>

				<button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><img src="img/burger.png" width="30px" height="30px" alt=""></span>
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
					// Запуск сессии
					session_start();

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
		<div class="shadow-blok mb-5" style="float: right; transform: rotate(180deg); width: 100%; "></div>

	</div>
	<!-- header-end -->


	<div class="container">
		<div id="zaya" class="help1">
			<h3 style="margin-top: 0px; margin-bottom: 0px; font-size: 28px;" class=" element-animation">Личный профиль</h3>
		</div>
		<hr style="width:55%; color: black;">
	</div>

	<div class="main-profile">
		<div style="padding-left: 100px; padding-top: 40px; padding-bottom: 60px;" class="container pr-5 pl-5 d-flex ">
			<div class="row g-5 w-100">
				<div class="col-5  element-animation">
					<div class="prof p-4">

					<?php if (!empty($photo)) : ?>
							<img data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-dismiss="modal" src="img/<?php echo $photo; ?>" class="card-img-top profile-photo" alt="Фото пользователя">
						<?php else : ?>
							<button style="width: 70%; height:292px; font-size:90px;" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-dismiss="modal"  class="card-img-top profile-photo" >+</button>
						<?php endif; ?>

						
						<p style="text-align: center; color: rgb(41, 40, 40); margin-bottom:5px;"><?php echo $username, " ", $usersurname ?></p>
						<hr style="width: 60px; margin: 0px auto 30px auto;">
						<p style="line-height: 30px;"><?php echo $tel ?></p>
						<p id="email_p" style="line-height: 30px;"><?php echo $email ?></p>

						<form id="content_mailAdd" class="content-mailAdd d-none mt-4" method="post" action="">
							<input class="d-block" name="email" id="email" type="email" placeholder="Почта">
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

				<div class="col-7 ml-5 element-animation">
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

							// Дальнейшая обработка данных...
							echo "<div class='prof zapis p-4 pl-5 mt-4'>";
							echo "<p style='font-size: 26px; color: rgb(48, 47, 47); margin-bottom: 30px;'>" . $proc . "</p>";
							echo "<p>Дата: " . $date . "</p>";
							echo "<p>Время: " . $time . "</p>";
							echo "<div class='d-flex justify-content-between mt-5'>";
							echo "<p style='font-size: 28px; color: rgb(85, 81, 81);'>1200p </p>";
							echo "<button class='btn' id='btnMailOtmenaZaya'>Отменить запись</button>";
							echo "</div>";
							echo "</div>";
						}
					} else {
						echo "Записи не найдены";
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

					<form action="" class="col-6 br-10 block-zaya" method="post" name="zayavka3">
						<input name="procedure3" id="procedure3" type="text" list="datalistOptions2" placeholder="Процедура" require>
						<datalist id="datalistOptions2">
							<option value="Наращивание классика">
							<option value="Наращивание 2D">
							<option value="Наращивание 3D">
							<option value="Наращивание Y-эффект">
							<option value="Снятие чужой работы">
						</datalist>
						<input name="date3" id="date3" type="date" placeholder="Дата" required>
						<input name="time3" id="time3" type="time" placeholder="Время" required>
						<button name="submit3" class="btn btn-header d-block mt-4 btn-zaya">Записаться</button>

					</form>
					<div class="col-6 br-10 z-img br-10 d-flex justify-content-center align-items-center">
						<p>Красивой <br> быть просто</p>
					</div>
				</div>
			</div>
		</div>
	</zayavka>

	<footer class="footer">
		<div class="container d-flex justify-content-between align-items-center ">
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
					<input type="file" name="photo" id="photo" require>
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