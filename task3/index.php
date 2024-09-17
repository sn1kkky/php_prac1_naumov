<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="container">
        <h1>Информация о студенте</h1>

    <?php
        $student = [
            "Имя" => "Дмитрий",
            "Фамилия" => "Наумов",
            "Группа" => "425 ВЕБ",
            "Хобби" => "Игры, Программирование, Музыка",
            "Соцсети" => [
                "Instagram" => "https://www.instagram.com/cvdzxerw",
                "Telegram" => "https://t.me/kukyoo",
                "Steam" => "https://steamcommunity.com/profiles/76561199101475730/"
            ]
        ];

        // Вывод информации о студенте
        echo "<div class='info'>";
        echo "<p><strong>Имя:</strong> " . $student['Имя'] . "</p>";
        echo "<p><strong>Фамилия:</strong> " . $student['Фамилия'] . "</p>";
        echo "<p><strong>Группа:</strong> " . $student['Группа'] . "</p>";
        echo "<p><strong>Хобби:</strong> " . $student['Хобби'] . "</p>";
        echo "</div>";

        // Вывод информации о соцсетях
        echo "<div class='social'>";
        echo "<h2>Социальные сети</h2>";
        echo "<ul>";
        foreach ($student['Соцсети'] as $network => $url) {
            echo "<li><a href='$url' target='_blank'>$network</a></li>";
        }
        echo "</ul>";
        echo "</div>";
    ?>
        <button onclick="window.location.href='http://prac1/'">Вернуться на главную</button>          

    </div>


</div>

</body>
</html>