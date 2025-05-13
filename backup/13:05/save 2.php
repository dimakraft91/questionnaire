<?php
// Устанавливаем заголовок для JSON-ответа
header('Content-Type: application/json');

// Путь к файлу, куда будем записывать данные
$filePath = 'output.txt';

// Проверяем, были ли отправлены данные о вопросах или ТВ программах
if (isset($_POST['questions']) && is_array($_POST['questions'])) {
    $texts = $_POST['questions'];
    
    $dataToWrite = implode("; ", $texts);

    // Записываем данные в файл с переносом на новую строку и с датой
    file_put_contents($filePath, date('Y-m-d H:i:s') . ' - ' . $dataToWrite . PHP_EOL, FILE_APPEND | LOCK_EX);
    
    echo json_encode(['message' => 'Данные успешно сохранены']);
} elseif (isset($_POST['tvProgramsThird'])) {
    $tvProgramTextThird = $_POST['tvProgramsThird'];
    
    // Записываем новые данные в файл без даты
    file_put_contents($filePath, $tvProgramTextThird . "; ", FILE_APPEND | LOCK_EX);
    
    echo json_encode(['message' => 'Данные о ТВ программах из третьей секции успешно сохранены']);
} elseif (isset($_POST['tvProgramsFourth'])) {
    $tvProgramTextFourth = $_POST['tvProgramsFourth'];
    
    // Записываем новые данные в файл без даты
    file_put_contents($filePath, $tvProgramTextFourth . "; ", FILE_APPEND | LOCK_EX);
} elseif (isset($_POST['tvProgramsFifth'])) {
    $tvProgramTextFifth = $_POST['tvProgramsFifth'];
    
    // Записываем новые данные в файл без даты
    file_put_contents($filePath, $tvProgramTextFifth . "; ", FILE_APPEND | LOCK_EX);
} elseif (isset($_POST['favoriteMoviesSixth'])) {
    $favoriteMoviesSixth = $_POST['favoriteMoviesSixth'];
    
    // Записываем новые данные в файл без даты
    file_put_contents($filePath, $favoriteMoviesSixth . "; ", FILE_APPEND | LOCK_EX);
} elseif (isset($_POST['seventhScreen'])) {
    $seventhScreen = $_POST['seventhScreen'];
    
    // Записываем новые данные в файл без даты
    file_put_contents($filePath, $seventhScreen . "; ", FILE_APPEND | LOCK_EX);
} elseif (isset($_POST['EighthField'])) {
    $eighthField = $_POST['EighthField'];
    
    // Записываем новые данные в файл без даты
    file_put_contents($filePath, $eighthField . "; ", FILE_APPEND | LOCK_EX);
} elseif (isset($_POST['ninthScreen'])) {
    $tvProgramTextNinth = $_POST['ninthScreen'];
    
    // Записываем новые данные в файл без даты
    file_put_contents($filePath, $tvProgramTextNinth . "; ", FILE_APPEND | LOCK_EX);
    
    echo json_encode(['message' => 'Данные о ТВ программах из девятой секции успешно сохранены']);
} else {
   echo json_encode(['message' => 'Нет данных для сохранения']);
}
?>