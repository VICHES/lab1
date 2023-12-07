<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вычисление разности квадратов</title>
</head>
<body>

<form action="" method="post">
    <label for="num1">Введите первое число:</label>
    <input type="number" name="num1" required>

    <label for="num2">Введите второе число:</label>
    <input type="number" name="num2" required>

    <button type="submit">Вычислить разность квадратов</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем введенные пользователем числа
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Вычисляем разность квадратов
    $result = pow($num1, 2) - pow($num2, 2);

    // Выводим результат
    echo "<p>Разность квадратов чисел $num1 и $num2 равна: $result</p>";
}
?>

</body>
</html>
