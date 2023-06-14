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
if (isset($_POST['btnSaveTime'])) {

	$date = $_POST["date"];
	$time = $_POST["time"];


	// Вставка данных в базу данных
	$query = "INSERT INTO time (date, time) 
		VALUES ('$date', '$time')";

	if (mysqli_query($connection, $query)) {
		$massage = "Форма отправлена";

		
	} else {
		$massage = "Ошибка при отправке: " . mysqli_error($connection);

	}
}

// Закрытие соединения с базой данных
mysqli_close($connection);
?>