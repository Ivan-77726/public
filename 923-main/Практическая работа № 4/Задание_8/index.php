<?php
// Исходный массив из раздаточного материала
$track = array(
    array('id_track' => '1', 'name' => 'back in the saddle', 'note' => '', 'id_album' => '10'),
    array('id_track' => '2', 'name' => 'last child', 'note' => '', 'id_album' => '10'),
    array('id_track' => '3', 'name' => 'rats in the cellar', 'note' => '', 'id_album' => '10'),
    array('id_track' => '4', 'name' => 'combination', 'note' => '', 'id_album' => '10'),
    array('id_track' => '5', 'name' => 'sick as a dog', 'note' => '', 'id_album' => '10'),
    array('id_track' => '6', 'name' => 'come together', 'note' => '', 'id_album' => '10'),
    array('id_track' => '7', 'name' => 'get the lead out', 'note' => '', 'id_album' => '10'),
    array('id_track' => '8', 'name' => 'lick and a promise', 'note' => '', 'id_album' => '10'),
    array('id_track' => '9', 'name' => 'home tonight', 'note' => '', 'id_album' => '10'),
    array('id_track' => '10', 'name' => 'come together', 'note' => '', 'id_album' => '4'),
    array('id_track' => '11', 'name' => 'something', 'note' => '', 'id_album' => '4'),
    array('id_track' => '12', 'name' => "maxwell's silver hammer", 'note' => '', 'id_album' => '4'),
    array('id_track' => '13', 'name' => 'oh! darling', 'note' => '', 'id_album' => '4'),
    array('id_track' => '14', 'name' => "octopus's garden", 'note' => '', 'id_album' => '4'),
    array('id_track' => '15', 'name' => "i want you (she's so heavy)", 'note' => '', 'id_album' => '4'),
    array('id_track' => '16', 'name' => 'here comes the sun', 'note' => '', 'id_album' => '4'),
    array('id_track' => '17', 'name' => 'because', 'note' => '', 'id_album' => '4'),
    array('id_track' => '18', 'name' => 'you never give me your money', 'note' => '', 'id_album' => '4'),
    array('id_track' => '19', 'name' => 'sun king', 'note' => '', 'id_album' => '4'),
    array('id_track' => '20', 'name' => 'mean mr mustard', 'note' => '', 'id_album' => '4'),
    array('id_track' => '21', 'name' => 'polythene pam', 'note' => '', 'id_album' => '4'),
    array('id_track' => '22', 'name' => 'shine on you crazy diamond (part one)', 'note' => '', 'id_album' => '2'),
    array('id_track' => '23', 'name' => 'welcome to the machine', 'note' => '', 'id_album' => '2')
);

$count = count($track);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 8</title>
    <style>
        table { border-collapse: collapse; margin-bottom: 20px; width: 50%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h3 { margin-top: 30px; }
    </style>
</head>
<body>

    <!-- 1. Цикл do-while (Маркированный список) -->
    <h3>1. Цикл do-while (маркированный список)</h3>
    <?php if ($count > 0): ?>
        <ul>
        <?php
        $i = 0;
        do {
            echo "<li>({$track[$i]['id_track']}) {$track[$i]['name']}</li>";
            $i++;
        } while ($i < $count);
        ?>
        </ul>
    <?php endif; ?>


    <!-- 2. Цикл for (Нумерованный список) -->
    <h3>2. Цикл for (нумерованный список)</h3>
    <ol>
    <?php
    for ($i = 0; $i < $count; $i++) {
        echo "<li>: ({$track[$i]['id_track']}) {$track[$i]['name']} (id альбома: {$track[$i]['id_album']})</li>";
    }
    ?>
    </ol>


    <!-- 3. Цикл foreach (Табличное представление) -->
    <h3>3. Цикл foreach (табличное представление)</h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Трек</th>
                <th>Примечание</th>
                <th>Id-альбома</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($track as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id_track']) ?></td>
                <td><?= htmlspecialchars($item['name']) ?></td>
                <td><?= htmlspecialchars($item['note']) ?></td>
                <td><?= htmlspecialchars($item['id_album']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <!-- 4. Цикл while (Табличное представление) -->
    <h3>4. Цикл while (табличное представление)</h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Трек</th>
                <th>Примечание</th>
                <th>Id-альбома</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        while ($i < $count) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($track[$i]['id_track']) . "</td>";
            echo "<td>" . htmlspecialchars($track[$i]['name']) . "</td>";
            echo "<td>" . htmlspecialchars($track[$i]['note']) . "</td>";
            echo "<td>" . htmlspecialchars($track[$i]['id_album']) . "</td>";
            echo "</tr>";
            $i++;
        }
        ?>
        </tbody>
    </table>

</body>
</html>
