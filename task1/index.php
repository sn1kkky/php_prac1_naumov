<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Список студентов</h1>

    <?php
    $students = ["Наумов", "Маслов", "Дудкин", "Низамов", "Вафин", "Самигуллин", "Пестов"];

    $students_count = count($students);
    $expelled = array_pop($students);
    ?>

    <p>Кол-во студентов: <?php echo $students_count; ?></p>
    <p class='expelled'>Удаленная фамилия: <?php echo $expelled; ?></p>

    <div class="lists">
        <div class="list-container">
            <h2>Исходный список</h2>
            <ul>
                <li>Наумов</li>
                <li>Маслов</li>
                <li>Дудкин</li>
                <li>Низамов</li>
                <li>Вафин</li>
                <li>Самигуллин</li>
                <li>Пестов</li>
            </ul>
        </div>

        <div class="list-container">
            <h2>Обновленный список</h2>
            <ul>
                <?php
                foreach ($students as $student) {
                    echo "<li>$student</li>";
                }
                ?>
            </ul>
        </div>
    </div>

    <button onclick="window.location.href='http://prac1/'">Вернуться на главную</button>          

</div>

</body>
</html>
