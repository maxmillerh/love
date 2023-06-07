<?php

// Проверяем, что запрос является POST-запросом
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получаем идентификатор записи из запроса
  if (isset($_POST['recordId'])) {
    $recordId = $_POST['recordId'];
    // Подключение к базе данных (замените значения на свои)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "love";
    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Проверка соединения
    if ($conn->connect_error) {
      die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }
    // Подготовленное выражение для удаления записи
    $stmt = $conn->prepare("DELETE FROM zaya WHERE id = ?");
    $stmt->bind_param("i", $recordId); // "i" указывает на тип данных идентификатора (integer)
    // Выполнение подготовленного выражения
    if ($stmt->execute()) {
      $message = "Запись успешно удалена";
      echo $recordId;
    } else {
      $message = "Ошибка при удалении записи: " . $stmt->error;
    }
    // Закрытие подготовленного выражения
    $stmt->close();
    // Закрытие соединения
    $conn->close();
  } else {
    $message = "Идентификатор записи не найден";
  }
} else {
  $message = "Неверный метод запроса";
}
?>