<html lang="ru">
<head>
<meta charset="UTF-8">
    <title>Задание 3 - Корни квадратного уравнения</title>
    <style>
            .result { margin-top: 20px; padding: 10px; background: #f0f0f0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Решение квадратного уравнения ax² + bx + c = 0</h1>
    
    <form method="get" action="">
        <label>a: <input type="number" name="a" step="any" value="1" required></label><br><br>
        <label>b: <input type="number" name="b" step="any" value="2" required></label><br><br>
        <label>c: <input type="number" name="c" step="any" value="1" required></label><br><br>
        <input type="submit" value="Вычислить корни">
    </form>
    <?php
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
            $a = (float)$_GET['a'];
            $b = (float)$_GET['b'];
            $c = (float)$_GET['c'];
            
            echo "<div class='result'>";
            echo "<h3>Уравнение: {$a}x² + {$b}x + {$c} = 0</h3>";
            if ($a == 0) {
                echo "<p>Ошибка: коэффициент 'a' не может быть равен 0 (это не квадратное уравнение).</p>";
            } else {
                $d = $b * $b - 4 * $a * $c;
                echo "<p>Дискриминант D = b² - 4ac = {$b}² - 4·{$a}·{$c} = " . round($d, 4) . "</p>";
                if ($d > 0) {
                    $x1 = (-$b + sqrt($d)) / (2 * $a);
                    $x2 = (-$b - sqrt($d)) / (2 * $a);
                    echo "<p><strong>D > 0 → два корня:</strong></p>";
                    echo "<p>x₁ = " . round($x1, 4) . "</p>";
                    echo "<p>x₂ = " . round($x2, 4) . "</p>";
                } elseif ($d == 0) {
                    $x = (-$b + sqrt($d)) / (2 * $a);
                    echo "<p><strong>D = 0 → один корень:</strong></p>";
                    echo "<p>x = " . round($x, 4) . "</p>";
                } else {
                    echo "<p><strong>D < 0 → нет действительных корней.</strong></p>";
                }
            }
            echo "</div>";
        }
    ?>
</body>
</html>