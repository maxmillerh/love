<?php
session_start();

// Проверяем, авторизован ли пользователь
$authorized = 'none'; // Предположим, что пользователь не авторизован
if (isset($_SESSION['authorized']) && $_SESSION['authorized'] === 'user') {
	$authorized = 'user'; // Если пользователь авторизован, устанавливаем значение 
}
if (isset($_SESSION['authorized']) && $_SESSION['authorized'] === 'admin') {
	$authorized = 'admin'; // Если пользователь авторизован, устанавливаем значение 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вы успешно записались!</title>
	<link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poiret+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<style>
		body {
			display: flex;
			justify-content: center;
			height: 100vh;
			align-items: center;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-4 ">
				<div class="card p-4">
					<h4>Вы успешно записались!</h4>
					<img src="img/galca.png" alt="" class="m-5">

					<!-- Блок для неавторизованного пользователя -->
					<?php if ($authorized == 'none') : ?>
						<a href="index.php" class="btn btn-header mt-2">На главную</a>
					<?php endif; ?>

					<!-- Блок для авторизованного пользователя -->
					<?php if ($authorized == 'user') : ?>
						<a href="profile.php" class="btn btn-header">Профиль</a>
					<?php endif; ?>

					<?php if ($authorized == 'admin') : ?>
						<a href="admin.php" class="btn btn-header">Панель</a>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

</body>

</html>