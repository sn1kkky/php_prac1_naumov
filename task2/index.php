<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="container">
        <h1>Список кружков</h1>

        <?php
        $circles = [
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванова",
            "Литературный" => "Петров",
            "Биологический" => "Антонова"
        ];
        asort($circles);

        echo "<ul>";
        foreach ($circles as $circle => $name) {
            echo "<li>$circle - $name</li>";
        }
        echo "</ul>";
        ?>    
        
        <button onclick="window.location.href='http://prac1/'">Вернуться на главную</button>          

    </div>


</div>

</body>
</html>