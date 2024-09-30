<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian Terbalik</title>
</head>
<body>
    <table>
        <?php
        //Perulangan dimulai dari angka 10 dan menurun hingga 1 ($i--).
        for ($i = 10; $i >= 1; $i--) {
           // 1 x $i (hasil disimpan di $firstMultiplication)
           // 2 x $i (hasil disimpan di $secondMultiplication)
            $firstMultiplication = "1 x $i = " . (1 * $i);
            $secondMultiplication = "2 x $i = " . (2 * $i);
            echo "<tr>";
            echo "<td>$firstMultiplication</td>";
            echo "<td class='divider'></td>";
            echo "<td>$secondMultiplication</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
