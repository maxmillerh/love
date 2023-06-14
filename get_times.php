<?php
// Подключение к базе данных и другие необходимые настройки

// Подключение к базе данных
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "love";

$connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$connection->set_charset('utf8');

if (isset($_GET['date'])) {
    $selectedDate = $_GET['date'];
    
    // Запрос к базе данных для получения доступных временных слотов на выбранную дату
    $timeQuery = "SELECT time FROM time WHERE date = '$selectedDate'";
    $timeResult = mysqli_query($connection, $timeQuery);

    $times = array();
    while ($row = mysqli_fetch_assoc($timeResult)) {
			$time = date("H:i", strtotime($row['time'])); // Получаем только часы и минуты
			$times[] = $time;
    }

    // Отправка списка временных слотов в формате JSON
    echo json_encode($times);
}
?>