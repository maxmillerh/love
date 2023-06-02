<?php 
session_start();

// Проверка, что пользователь авторизован
if (isset($_SESSION['name1']) && isset($_SESSION['surname1']) && isset($_SESSION['tel1'])) {
    $username = $_SESSION['name1'];
		$usersurname = $_SESSION['surname1'];
		$tel = $_SESSION['tel1'];
} else {
    // Пользователь не авторизован, выполните соответствующие действия
    echo "Вы не авторизованы!";
}


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
						header(('LOCATION: index.php'));
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
		<div style="padding-left: 160px; padding-top: 40px; padding-bottom: 60px;" class="container pr-5 pl-5 d-flex justify-content-center">
			<div class="row g-5">
				<div class="prof col-4 p-4 element-animation">
					<img src="img/otz3.png" style="width: 70%; margin-left: 15%; margin-top: 0; margin-bottom: 22px;" class="card-img-top" alt="">
					<p style="text-align: center; color: rgb(41, 40, 40);"><?php echo $username, " ", $usersurname ?></p>
					<p style="line-height: 30px;"><?php echo $tel ?></p>
					<p class="prof-otm" style="line-height: 20px; font-size: 20px;">Добавить почту</p>
					<p class="prof-otm" style="line-height: 20px; font-size: 20px;">Изменить пароль</p>
				</div>
				<div class="col-7 ml-5 element-animation">
					<p>Ваши записи:</p>
					<div class="prof zapis p-4 pl-5">
						<p style="font-size: 26px; color: rgb(48, 47, 47); margin-bottom: 30px;">Наращивание ресниц</p>
						<p>Процедура: классическое наращивание</p>
						<p>09.03.2023</p>
						<div class="d-flex justify-content-between mt-5">
							<p style="font-size: 28px; color: rgb(85, 81, 81);">1200p</p>
							<div>
								<p class="prof-otm " style="float: left;">Изменить</p>
								<p class="prof-otm" style="float: left; margin-left: 12px;">Отменить</p>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="shadow-blok mb-5" style="float: right; transform: rotate(180deg); width: 100%; "></div>


	<zayavka class="zayavka">
		<div class=" mb-5 pt-5">
			<div class="container">
				<div id="zaya" class="help1">
					<h3 style="margin-top: 0px; margin-bottom: 40px;" class="title-design element-animation">Оставить заявку</h3>
				</div>

				<div class="row teni br-10 element-animation">

					<div class="col-6 br-10 block-zaya ">
						<input name="date" id="date" type="date" placeholder="Дата">
						<input name="time" id="time" type="time" placeholder="Время">
						<button class="btn btn-header d-block mt-4 btn-zaya">Записаться</button>
					</div>
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




	<!-- Modal-login -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<img src="img/login.png" alt="">

			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title  " id="exampleModalLabel">Вход</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!--<label id="name-lab" for="name">Имя</label> -->
					<input name="tel" id="tel" type="tel" placeholder="Номер телефона">
					<input name="pass" id="pass" type="password" placeholder="Пароль" pattern="2[0-9]{3}-[0-9]{3}" required>
				</div>
				<div class="modal-footer justify-content-between ">
					<div class="">
						<span>Нет аккаунта?</span>
						<span class="reg-link" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-dismiss="modal" aria-label="Close">Создать</span>
					</div>
					<button type="button" class="btn btn-header">Войти</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal-registr -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<img src="img/registr.png" alt="">

			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title  " id="exampleModalLabel">Создать аккаунт</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!--<label id="name-lab" for="name">Имя</label> -->
					<input name="name" id="name" type="text" placeholder="Имя">
					<input name="surname" id="surname" type="text" placeholder="Фамилия">
					<input name="tel" id="tel" type="tel" placeholder="Номер телефона">
					<input name="pass" id="pass" type="password" placeholder="Пароль" pattern="2[0-9]{3}-[0-9]{3}" required>
				</div>
				<div class="modal-footer justify-content-between ">
					<div class="">
						<span>Есть аккаунт?</span>
						<span class="reg-link" data-bs-toggle="modal" data-bs-target="#exampleModal " data-bs-dismiss="modal" aria-label="Close">Войти</span>
					</div>
					<button type="button" class="btn btn-header">Создать</button>
				</div>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/app.js"></script>
</body>

</html>