<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian 5</title>
</head>
<body>
    <div class="result">
        <?php
        $i = 1;
        while (true) {
            $result = $i * 5;

            // Periksa apakah hasil perkalian mengandung angka 0
            if (strpos((string)$result, '0') !== false) {
                $i++;
                continue;
            }

            echo "5 x $i = $result<br>";

            // Hentikan jika hasilnya mencapai atau lebih dari 50
            if ($result >= 50) {
                break;
            }

            $i++;
        }
        ?>
    </div>
</body>
</html>