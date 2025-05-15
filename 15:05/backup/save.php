<?php
// Устанавливаем заголовок для JSON-ответа
header('Content-Type: application/json');

// Путь к файлу, куда будем записывать данные
$filePath = 'output.txt';

// Получаем текущее время
$dateTime = date('Y-m-d H:i:s');

// Проверяем, были ли отправлены данные о вопросах или ТВ программах
if (isset($_POST['questions']) && is_array($_POST['questions'])) {
    $texts = $_POST['questions'];
    
    $dataToWrite = implode("; ", $texts);

    // Записываем данные в файл с переносом на новую строку
    file_put_contents($filePath, $dateTime . ' - ' . $dataToWrite . "; " , FILE_APPEND | LOCK_EX);
    
    echo json_encode(['message' => 'Данные успешно сохранены']);
} elseif (isset($_POST['tvProgramsThird'])) {
    $tvProgramTextThird = $_POST['tvProgramsThird'];
    
    // Записываем новые данные в файл без переноса строки
    file_put_contents($filePath, $tvProgramTextThird . "; ", FILE_APPEND | LOCK_EX);
    
    echo json_encode(['message' => 'Данные о ТВ программах из третьей секции успешно сохранены']);
} elseif (isset($_POST['tvProgramsFourth'])) {
    $tvProgramTextFourth = $_POST['tvProgramsFourth'];
    
    // Записываем новые данные в файл без переноса строки
    file_put_contents($filePath, $tvProgramTextFourth . "; ", FILE_APPEND | LOCK_EX);
    
    echo json_encode(['message' => 'Данные о ТВ программах из четвертой секции успешно сохранены']);
} else {
   echo json_encode(['message' => 'Нет данных для сохранения']);
}
?>