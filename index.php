<?php 
include 'zayavka.php';
include 'login.php'; 
include 'registration.php';
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
							<a class="nav-link menu-link" aria-current="page" href="#uslugi">Услуги</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#recom">Рекомендации</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#sert">Сертификаты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#otzv">Отзывы</a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link" href="#cont">Контакты</a>
						</li>
					</ul>

					<button class="btn btn-header" data-bs-toggle="modal" data-bs-target="#exampleModal">Войти</button>

				</div>
			</div>
		</nav>
	</header>
	<!-- header-end -->

	<main>
		<div class="container">
			<div class="main">
				<div class="soc-main">
					<hr class="soc-hr">
					<a class="a-soc" target="_blank" href="https://vk.com/l.biuti83">
						<span class="p-3 bok-soc">Whatsapp</span>
					</a>
					<hr class="soc-hr" style="width: 50px;">
					<a class="a-soc" target="_blank" href="https://vk.com/l.biuti83">
						<span class="p-3 bok-soc">Вконтакте</span>
					</a>
				</div>
				<div class="main-block-text">
					<h1 class="element-animation">Мастер по наращиванию <br>
						ресниц и шугарингу</h1>
					<h2 class="element-animation">При первом посещении скидка <br>
						10% на любую услугу</h2>
					<a href="#zaya" class="btn btn-main d-inline-block element-animation">Записаться</a>
					<div class="facts element-animation">
						<div class="fact fact1">
							<span>12</span>
							<p>Сертификатов</p>
						</div>
						<div class="fact">
							<span>4</span>
							<p>Года опыта</p>
						</div>
						<div class="fact">
							<span>100+</span>
							<p>Довольных клиентов</p>
						</div>
					</div>
				</div>
				<div class="main-img ">
					<img class="" src="img/main-img.png" alt="">
				</div>
			</div>
		</div>
	</main>
	<div class="shadow-blok"></div>

	<uslugi class="uslugs ">
		<div class="container">
			<div id="uslugi" class="help1">
				<h3 class="title-design element-animation">Мои услуги</h3>
			</div>
			<ul class="menu-recomend element-animation">
				<li id="narashivanie_usluga" class="activete m-0">Наращивание ресниц</li>
				<li id="shugaring_uslua">Шугаринг</li>
				<li id="permonentnyi_usluga">Перманентный макияж</li>
			</ul>
			<div id="uslBlock1" class="row p-rec gy-4 mt-4 element-animation">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/narash1.png" class="card-img-top" alt="...">
							<h5 class="card-title">Классика</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">1000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/narash2.png" class="card-img-top" alt="...">
							<h5 class="card-title">2D эффект</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">1200р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/narash3.png" class="card-img-top" alt="...">
							<h5 class="card-title">3D эффект</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">1300р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/narash4.png" class="card-img-top" alt="...">
							<h5 class="card-title">4D эффект</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">1400р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/narash5.png" class="card-img-top" alt="...">
							<h5 class="card-title">Y эффект</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">1300р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/narash6.png" class="card-img-top" alt="...">
							<h5 class="card-title">Снятие чужой работы</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">100р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="uslBlock2" class="row p-rec gy-4 mt-4 d-none element-animation">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/sugar1.png" class="card-img-top" alt="...">
							<h5 class="card-title">Усики</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">100р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/sugar2.png" class="card-img-top" alt="...">
							<h5 class="card-title">Подмышечные впадины</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">200р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/sugar3.png" class="card-img-top" alt="...">
							<h5 class="card-title">Руки до локтя</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">250р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/sugar4.png" class="card-img-top" alt="...">
							<h5 class="card-title">Руки полностью</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">500р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/sugar5.png" class="card-img-top" alt="...">
							<h5 class="card-title">Ноги до колена</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">500р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/sugar6.png" class="card-img-top" alt="...">
							<h5 class="card-title">Ноги полностью</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">900р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<div class="bekene-back"><img src="img/sugar7.png" class="card-img-top bekene" alt="..."></div>
							<h5 class="card-title">Бикини класика</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">500р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<div class="bekene-back"><img src="img/sugar8.png" class="card-img-top bekene" alt="..."></div>
							<h5 class="card-title">Бикини глубокое</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">800р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/sugar9.png" class="card-img-top" alt="...">
							<h5 class="card-title">Блеск-тату</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">250р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="uslBlock3" class="row p-rec gy-4 mt-4 d-none element-animation">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm1.png" class="card-img-top" alt="...">
							<h5 class="card-title">Брови напыление</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">3000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm2.png" class="card-img-top" alt="...">
							<h5 class="card-title">Брове коррекция</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">2000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm3.png" class="card-img-top" alt="...">
							<h5 class="card-title">Глаза Напыление</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">3000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm4.png" class="card-img-top" alt="...">
							<h5 class="card-title">Глаза коррекция</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">2000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm5.png" class="card-img-top" alt="...">
							<h5 class="card-title">Губы напыление</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">2000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm6.png" class="card-img-top" alt="...">
							<h5 class="card-title">Губы коррекция</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">2000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm7.png" class="card-img-top" alt="...">
							<h5 class="card-title">Микроблейдинг</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">4000р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<img src="img/perm8.png" class="card-img-top" alt="...">
							<h5 class="card-title">Микроблейдинг коррекция</h5>
							<div class="d-flex justify-content-between align-items-center mb-4">
								<p class="card-text">2500р</p>
								<a href="#" class="btn btn-header">Записаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</uslugi>

	<div class="shadow-blok mt-4 mb-5" style="float: right; transform: rotate(180deg); width: 50%; "></div>

	<recomend>
		<div class="container p-rec2">
			<div class="recomend">
				<div id="recom" class="help1">
					<h3 class="title-design element-animation">Рекомендации</h3>
				</div>
				<ul class="menu-recomend element-animation">
					<li id="narash" class="activete m-0">Наращивание ресниц</li>
					<li id="shugar">Шугаринг</li>
					<li id="permonen">Перманентный макияж</li>
				</ul>
				<div id="recBlock1">
					<div class="row gy-4 p-rec ">
						<h4 class="element-animation">Запрещается</h4>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block ">
								<img class="item-img" src="img/item1.png" alt="">
							</div>
							<span class="rec-text">Нельзя мочить ресницы 24ч после процедуры</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item2.png" alt="">
							</div>
							<span class="rec-text">Нельзя посещать сауну, баню, солярий 72ч после процедуры </span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item3.png" alt="">
							</div>
							<span class="rec-text">Не использовать жирные масла <br> и кремы</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item4.png" alt="">
							</div>
							<span class="rec-text">Не использовать тушь</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item5.png" alt="">
							</div>
							<span class="rec-text">Не снимать ресницы самостоятельно</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item6.png" alt="">
							</div>
							<span class="rec-text">Не тереть глаза и не трогать ресницы</span>
						</div>
						<h4 class="element-animation">Рекомендуется</h4>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item7.png" alt="">
							</div>
							<span class="rec-text">Ополаскивайте ресницы <br> каждый вечер обычной водой</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item8.png" alt="">
							</div>
							<span class="rec-text">Ежедневно расчесывайте ресницы специальной щеточкой</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item9.png" alt="">
							</div>
							<span class="rec-text">Используйте очищенную косметику на водной основе</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item10.png" alt="">
							</div>
							<span class="rec-text">Делайте своевременную коррекцию</span>
						</div>
					</div>
				</div>

				<div id="recBlock2" class="d-none">
					<div class="row gy-4 p-rec ">
						<h4 class="element-animation">Запрещается</h4>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block ">
								<img class="item-img" src="img/item11.png" alt="">
							</div>
							<span class="rec-text">Не загорать и не посещать солярий 24ч</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item12.png" alt="">
							</div>
							<span class="rec-text">Не заниматься спортом в течение 24ч</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item13.png" alt="">
							</div>
							<span class="rec-text">Не использовать между процедурами бритву </span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item14.png" alt="">
							</div>
							<span class="rec-text">Самостоятельно не удолять волоски</span>
						</div>
						<h4 class="element-animation">Рекомендуется</h4>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item1.png" alt="">
							</div>
							<span class="rec-text">Ежедневно увлажнять кожу</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item9.png" alt="">
							</div>
							<span class="rec-text">Скраб 1-2 раза в неделю</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item15.png" alt="">
							</div>
							<span class="rec-text">Первые 2-3 дня носить натуральное белье</span>
						</div>

					</div>
				</div>

				<div id="recBlock3" class="d-none">
					<div class="row gy-4 p-rec ">
						<h4 class="element-animation">Запрещается</h4>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block ">
								<img class="item-img" src="img/item2.png" alt="">
							</div>
							<span class="rec-text">Первые 2 недели воздержаться от посещения бань, саун, бассейнов</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item12.png" alt="">
							</div>
							<span class="rec-text">Не заниматься спортом в течение 24ч</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item3.png" alt="">
							</div>
							<span class="rec-text">Не использовать скрабы и пилинг</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec item-rec-line d-inline-block">
								<img class="item-img" src="img/item5.png" alt="">
							</div>
							<span class="rec-text">Посторайтесь не травмировать кожу чесанием</span>
						</div>
						<h4 class="element-animation">Рекомендуется</h4>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item10.png" alt="">
							</div>
							<span class="rec-text">Делайте своевременную коррекцию</span>
						</div>
						<div class="col-6 d-flex align-items-center item-itd element-animation">
							<div class="item-rec  d-inline-block">
								<img class="item-img" src="img/item9.png" alt="">
							</div>
							<span class="rec-text">Используйте очищенную косметику на водной основе</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</recomend>
	<div class="shadow-blok  " style="transform: rotate(180deg); width: 60%; "></div>

	<sertificat>
		<div class="container mt-5 ">
			<div id="sert" class="help1">
				<h3 class="title-design text-center element-animation">Сертификаты</h3>
			</div>
			<div class="sertificat">
				<div id="carouselExampleIndicators" class="carousel slide element-animation"">
					<div class=" carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="sertificats w-100">
							<img class="serf" src="img/1.jpg" alt="">
							<img class="serf" src="img/2.jpg" alt="">
						</div>
					</div>
					<div class="carousel-item">
						<div class="sertificats w-100">
							<img class="serf" src="img/3.jpg" alt="">
							<img class="serf" src="img/4.jpg" alt="">
						</div>
					</div>
					<div class="carousel-item">
						<div class="sertificats w-100">
							<img class="serf" src="img/5.jpg" alt="">
							<img class="serf" src="img/6.jpg" alt="">
						</div>
					</div>
					<div class="carousel-item">
						<div class="sertificats w-100">
							<img class="serf" src="img/7.jpg" alt="">
							<img class="serf" src="img/8.jpg" alt="">
						</div>
					</div>
					<div class="carousel-item">
						<div class="sertificats w-100">
							<img class="serf" src="img/9.jpg" alt="">
							<img class="serf" src="img/10.jpg" alt="">
						</div>
					</div>
					<div class="carousel-item">
						<div class="sertificats w-100">
							<img class="serf" src="img/7.jpg" alt="">
							<img class="serf" src="img/3.jpg" alt="">
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		</div>
	</sertificat>
	<div class="shadow-blok mb-5" style="float: right; transform: rotate(180deg); width: 70%; "></div>

	<otzivs class="otzivs">
		<div class="container pb-5">
			<div id="otzv" class="help1">
				<h3 class="title-design element-animation">Отзывы</h3>
			</div>
			<div class="row element-animation">
				<div class="col-3">
					<div class="card ">
						<img src="img/otz1.png" class="card-img-top" alt="...">
						<div class="card-body">
							<p class="name">Валентина Ушакова</p>
							<p class="otzText">Супер класс сосиска квас. Всем советую, всем рекомендую 19 раз, с новым годом</p>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="card ">
						<img src="img/otz2.png" class="card-img-top" alt="...">
						<div class="card-body">
							<p class="name">Валерия Голубева</p>
							<p class="otzText">Супер класс сосиска квас. Всем советую, всем рекомендую 19 раз, с новым годом</p>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="card ">
						<img src="img/otz3.png" class="card-img-top" alt="...">
						<div class="card-body">
							<p class="name">Милана Соловьева</p>
							<p class="otzText">Супер класс сосиска квас. Всем советую, всем рекомендую 19 раз, с новым годом</p>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="card ">
						<img src="img/otz4.png" class="card-img-top" alt="...">
						<div class="card-body">
							<p class="name">Андрей Гусь</p>
							<p class="otzText">Супер класс сосиска квас. Всем советую, всем рекомендую 19 раз, с новым годом</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</otzivs>

	<div class="shadow-blok  mb-5" style=" transform: rotate(180deg); width: 100%; "></div>


	<contact>
		<div class="container ">
			<div id="cont" class="help1">
				<h3 class="title-design element-animation">Контакты</h3>
			</div>
			<div class="contact">
				<div class="row">
					<div class="col-8">
						<iframe class="map element-animation" src="https://yandex.ru/map-widget/v1/?um=constructor%3A445d4c5c83491ca941d116b4a6e3acb29cdc7de23bb0169830c83f56e1cd4926&amp;source=constructor" width="100%" height="500px" frameborder="0"></iframe>
					</div>
					<div class="col-4 ">
						<div class="fon-contact element-animation">
							<p class=" cont">8 (900) 533-28-08</p>
							<p class="cont-sup">ПН-СБ С 9:00 до 22:00</p>
							<p class="cont">Фрязиновская 32, кв 123</p>
							<p class="cont-sup">4 подъезд 4 этаж</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</contact>

	<div class="shadow-blok mt-5 mb-5" style="float: right; transform: rotate(180deg); width: 60%; "></div>



	<zayavka class="zayavka">
		<div class=" mb-5 pt-5">
			<div class="container">
				<div id="zaya" class="help1">
					<h3 class="title-design element-animation">Оставить заявку</h3>
				</div>

				<div class="row teni br-10 element-animation">

					<form action="" class="col-6 br-10 block-zaya" method="post" name="zayavka">
						<input name="name2" id="name2" type="text" placeholder="Имя" required>
						<input name="surname2" id="surname2" type="text" placeholder="Фамилия" required>
						<input name="tel2" id="tel2" type="tel" placeholder="Номер телефона" required>
						<input name="procedure2" id="procedure" type="text" list="datalistOptions" placeholder="Процедура" require>
						<datalist id="datalistOptions">
							<option value="Наращивание классика">
							<option value="Наращивание 2D">
							<option value="Наращивание 3D">
							<option value="Наращивание Y-эффект">
							<option value="Снятие чужой работы">
						</datalist>
						<input name="date2" id="date" type="date" placeholder="Дата" required>
						<input name="time2" id="time" type="time" placeholder="Время" required>
						<button name="submit" class="btn btn-header d-block mt-4 btn-zaya">Записаться</button>

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
					<a class="nav-link menu-link" aria-current="page" href="#uslugi">Услуги</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="#recom">Рекомендации</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="#sert">Сертификаты</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="#otzv">Отзывы</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu-link" href="#cont">Контакты</a>
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

			<form class="modal-content" method="post" action="">
				<div class="modal-header">
					<h1 class="modal-title  " id="exampleModalLabel">Вход</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<input name="tel1" id="tel1" type="tel" placeholder="Номер телефона" required>
					<input name="pass1" id="pass1" type="password" placeholder="Пароль"  required>
				</div>
				<div class="modal-footer justify-content-between ">
					<div class="">
						<span>Нет аккаунта?</span>
						<span class="reg-link" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-dismiss="modal" aria-label="Close">Создать</span>
					</div>
					<button type="submit" name="send1" class="btn btn-header">Войти</button>
				</div>
			</form>
		</div>
	</div>

	

	<!-- Modal-registr -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<img src="img/registr.png" alt="">

			<form action="" method="post" class="modal-content" name="registr">
				<div class="modal-header">
					<h1 class="modal-title  " id="exampleModalLabel">Создать аккаунт</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<input name="name" id="name" type="text" placeholder="Имя" required>
					<input name="surname" id="surname" type="text" placeholder="Фамилия" required>
					<input name="tel" id="tel" type="tel" placeholder="Номер телефона" required>
					<input name="pass" id="pass" type="password" placeholder="Пароль" required>
					<p style="color: red; font-size:18px ;"><?= $error_message ?></p>
				</div>
				<div class="modal-footer justify-content-between ">
					<div class="">
						<span>Есть аккаунт?</span>
						<span class="reg-link" data-bs-toggle="modal" data-bs-target="#exampleModal " data-bs-dismiss="modal" aria-label="Close">Войти</span>
					</div>
					<button name="send" type="submit" class="btn btn-header">Создать</button>
				</div>
			</form>

		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/app.js"></script>
</body>

</html>