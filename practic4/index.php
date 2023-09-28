<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Страница с машинами</title>
</head>
<body>
    <div class="container">
    <?php
        require_once 'Car.php';
        require_once 'lib/Car.php';

        // Создаем объекты обоих классов
        $car1 = new Car();
        echo "<br>"; // Выводим пустую строку для разделения текста
        $car2 = new \lib\Car(); // Используем полное пространство имен для второго класса
        ?>

        <!-- Добавляем пустую строку в HTML для разделения вывода -->
        <br>
    </div>
    <div class="car"></div>
</body>
</html>