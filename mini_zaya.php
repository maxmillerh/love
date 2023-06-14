<?php

// Подключение к базе данных
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'love';

$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
mysqli_set_charset($connection, 'utf8');

// Проверка соединения
if (!$connection) {
	die("Ошибка подключения: " . mysqli_connect_error());
}

// Обработка отправленной формы
if (isset($_POST['submit3'])) {

	if (isset($_SESSION['name1']) && isset($_SESSION['surname1']) && isset($_SESSION['tel1'])) {
		$name3 = $_SESSION['name1'];
		$surname3 = $_SESSION['surname1'];
		$tel3 = $_SESSION['tel1'];
	} else {
		echo "НЕт сессии!!";
	}


	$date3 = $_POST["date3"];
	$time3 = $_POST["time3"];
	$procedure3 = $_POST["procedure3"];

	//ищем цену по названию услуги
	$query_price = "SELECT price FROM uslugs WHERE title = '$procedure3'";
	$result_price = mysqli_query($connection, $query_price);

	if ($result_price && mysqli_num_rows($result_price) > 0) { //если такая есть то достаем
		$row_price = mysqli_fetch_assoc($result_price);
		$price3 = $row_price['price'];
	} else {
		$price3 = 0; // Установите значение по умолчанию, если цена не найдена
	}

	// Вставка данных в базу данных
	$query = "INSERT INTO zaya (name, surname, tel, date, time, proc, price) 
		VALUES ('$name3', '$surname3', '$tel3', '$date3', '$time3', '$procedure3', '$price3')";

	if (mysqli_query($connection, $query)) {
		// Удаление выбранного времени из таблицы базы данных
		$deleteQuery = "DELETE FROM time WHERE date = '$date3' AND time = '$time3'";
		mysqli_query($connection, $deleteQuery);

		// Перенаправление пользователя после успешной отправки формы
		header('Location: success.php'); // Замените "success.php" на вашу страницу с сообщением об успешной отправке
		exit();
	} else {
		$massage = "Ошибка при отправке: " . mysqli_error($connection);
	}
}

// Закрытие соединения с базой данных
mysqli_close($connection);
