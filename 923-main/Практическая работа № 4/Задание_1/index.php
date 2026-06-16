?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 1 - Исключающее ИЛИ (XOR)</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    <h1>Таблица истинности </h1>
    
    <?php
        echo "<table>";
        echo "<tr><th>a</th><th>b</th><th>c</th><th>q</th></tr>";
        for ($a = 0; $a <= 1; $a++) {
            for ($b = 0; $b <= 1; $b++) {
                for ($c = 0; $c <= 1; $c++) {
                
                    $sum = $a + $b + $c;
                    
                    if ($sum % 2 == 1) {
                        $q = 1;
                    } elseif ($sum % 2 == 0) {
                        $q = 0;
                    } else {
                        $q = 0;
                    }
                    
                    if ($a == 0 && $b == 0 && $c == 1) {
                        $q_check = 1;
                    } else {
                        $q_check = ($a + $b + $c) % 2;
                    }
                    
                    echo "<tr>";
                    echo "<td>$a</td><td>$b</td><td>$c</td><td>$q</td>";
                    echo "</tr>";
                }
            }
        }
    ?>
</body>
</html>