<?php
// Подключение к базе данных
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'love';

$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
$connection->set_charset('utf8');

// Проверка соединения
if (!$connection) {
	die("Ошибка подключения: " . mysqli_connect_error());
}

// Обработка отправленной формы
if (isset($_POST['submit'])) {
	$name2 = $_POST["name2"];
	$surname2 = $_POST["surname2"];
	$tel2 = $_POST["tel2"];
	$date2 = $_POST["date2"];
	$time2 = $_POST["time2"];
	$procedure2 = $_POST["procedure2"];

	//ищем цену по названию услуги
	$query_price = "SELECT price FROM uslugs WHERE title = '$procedure2'";
	$result_price = mysqli_query($connection, $query_price);

	if ($result_price && mysqli_num_rows($result_price) > 0) { //если такая есть то достаем
		$row_price = mysqli_fetch_assoc($result_price);
		$price2 = $row_price['price'];
	} else {
		$price2 = 0; // Установите значение по умолчанию, если цена не найдена
	}

	// Вставка данных в базу данных
	$query = "INSERT INTO zaya (name, surname, tel, date, time, proc, price) 
		VALUES ('$name2', '$surname2', '$tel2', '$date2', '$time2', '$procedure2', '$price2')";

	if (mysqli_query($connection, $query)) {
		// Удаление выбранного времени из таблицы базы данных
		$deleteQuery = "DELETE FROM time WHERE date = '$date2' AND time = '$time2'";
		mysqli_query($connection, $deleteQuery);
		
		// Перенаправление пользователя после успешной отправки формы
		header('Location: success.php'); // Замените "success.php" на вашу страницу с сообщением об успешной отправке
	} else {
		$error_massage = "Ошибка при отправке: " . mysqli_error($connection);
	}
}

// Закрытие соединения с базой данных
mysqli_close($connection);
