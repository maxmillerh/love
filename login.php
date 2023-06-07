<?php
session_start();

// Проверка, была ли отправлена форма авторизации
if (isset($_POST["send1"])) {
	// Получение данных из формы
	$tel1 = $_POST["tel1"];
	$pass1 = $_POST["pass1"];

	// Подключение к базе данных
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "love";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	$conn->query("SET_NAME * 'UTF8'");

	// Проверка соединения с базой данных
	if ($conn->connect_error) {
		die("Ошибка соединения: " . $conn->connect_error);
	}

	// Поиск пользователя в базе данных
	$select_user_sql = "SELECT * FROM registr WHERE tel = '$tel1'";
	$select_user_result = $conn->query($select_user_sql);

	if ($select_user_result->num_rows == 1) {
		if($tel1 != '8(900) 533-28-08'){
			$user = $select_user_result->fetch_assoc();
			$name1 = $user["name"]; // Получение имени пользователя из базы данных
			$_SESSION['name1'] = $name1; // Сохранение имени пользователя в сессии
			$surname1 = $user["surname"]; // Получение фамилии пользователя из базы данных
			$_SESSION['surname1'] = $surname1; // Сохранение фамилии пользователя в сессии
			$tel1 = $user["tel"]; // Получение телефона пользователя из базы данных
			$_SESSION['tel1'] = $tel1; // Сохранение телефона пользователя в сессии
			$email = $user["email"]; // Получение телефона пользователя из базы данных
			$_SESSION['email'] = $email; // Сохранение телефона пользователя в сессии
			$photo = $user["photo"]; // Получение телефона пользователя из базы данных
			$_SESSION['photo'] = $photo; // Сохранение телефона пользователя в сессии
			// Проверка пароля
			if (password_verify($pass1, $user["pass"])) {
				// Успешный вход
				$_SESSION['authorized'] = 'user'; // Сохранение статуса авторизации в сессии
				header('Location: profile.php');
				exit();
			} else {
				// Неправильный пароль
				$error_massage = "Неверный пароль";
			}
		}else{
			$user = $select_user_result->fetch_assoc();
			if (password_verify($pass1, $user["pass"])) {
				$_SESSION['authorized'] = 'admin'; // Сохранение статуса авторизации в сессии
				// Успешный вход
				header('Location: admin.php');
				exit();
			} else {
				// Неправильный пароль
				$error_massage = "Неверный пароль";
			}
		}

	} else {
		$error_massage = "Пользователь не найден";
	}

	$conn->close();
}
