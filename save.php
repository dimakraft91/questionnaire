<?php
// Устанавливаем заголовок для JSON-ответа
header('Content-Type: application/json');

// Путь к файлу, куда будем записывать данные
$filePath = 'output.txt';

// Получаем текущую дату и время
$currentDateTime = date('Y-m-d H:i:s');

if (isset($_POST['questions']) && is_array($_POST['questions'])) {
    $texts = $_POST['questions'];
    $dataToWrite = implode("; ", $texts);
    // Записываем с новой строки
    file_put_contents($filePath, PHP_EOL . $currentDateTime . ' - ' . $dataToWrite . "; ", FILE_APPEND | LOCK_EX);
    echo json_encode(['message' => $currentDateTime . ' - Данные успешно сохранены']);
} elseif (isset($_POST['tvProgramsThird'])) {
    $tvProgramTextThird = $_POST['tvProgramsThird'];
    file_put_contents($filePath, $tvProgramTextThird . "; ", FILE_APPEND | LOCK_EX);
    echo json_encode(['message' => $currentDateTime . ' - Данные о ТВ программах из третьей секции успешно сохранены']);
} elseif (isset($_POST['tvProgramsFourth'])) {
    $tvProgramTextFourth = $_POST['tvProgramsFourth'];
    file_put_contents($filePath, $tvProgramTextFourth . "; ", FILE_APPEND | LOCK_EX);
    echo json_encode(['message' => $currentDateTime . ' - Данные о ТВ программах из четвертой секции успешно сохранены']);
} elseif (isset($_POST['tvProgramsFifth'])) {
    $tvProgramTextFifth = $_POST['tvProgramsFifth'];
    file_put_contents($filePath, $tvProgramTextFifth . "; ", FILE_APPEND | LOCK_EX);
    echo json_encode(['message' => $currentDateTime . ' - Данные о ТВ программах из пятой секции успешно сохранены']);
} elseif (isset($_POST['favoriteMoviesSixth'])) {
    $favoriteMoviesSixth = $_POST['favoriteMoviesSixth'];
    file_put_contents($filePath, $favoriteMoviesSixth . "; ", FILE_APPEND | LOCK_EX);
    echo json_encode(['message' => $currentDateTime . ' - Избранные фильмы из шестой секции успешно сохранены']);
} elseif (isset($_POST['seventhScreen'])) {
    $seventhScreen = $_POST['seventhScreen'];
    file_put_contents($filePath, $seventhScreen . "; ", FILE_APPEND | LOCK_EX);
    echo json_encode(['message' => $currentDateTime . ' - Данные с седьмого экрана успешно сохранены']);
} elseif (isset($_POST['EighthField'])) {
    $eighthField = $_POST['EighthField'];
    file_put_contents($filePath, $eighthField . "; ", FILE_APPEND | LOCK_EX);
    // echo json_encode(['message' => $currentDateTime . ' - Данные восьмого поля успешно сохранены']);
} elseif (isset($_POST['finalquestions']) && is_array($_POST['finalquestions'])) {
    $texts = $_POST['finalquestions'];
    $dataToWrite = implode("; ", $texts);
    file_put_contents($filePath, $dataToWrite . "; ", FILE_APPEND | LOCK_EX);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Например, сохранить в файл или базу данных
        $filePath = 'output.txt'; // путь к файлу для хранения писем
        file_put_contents($filePath, $email . PHP_EOL, FILE_APPEND | LOCK_EX);

        echo json_encode(['status' => 'success', 'message' => 'Email received']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>

