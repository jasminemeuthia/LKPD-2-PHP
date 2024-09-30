<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Jumlah Karakter Nama</title>
</head>
<body>

    <h2>Bandingkan Jumlah Karakter Nama</h2>

    <form method="POST">
        <div class="form-group">
            <label for="name1">Nama Pertama:</label>
            <input type="text" id="name1" name="name1" required>
        </div>
        <div class="form-group">
            <label for="name2">Nama Kedua:</label>
            <input type="text" id="name2" name="name2" required>
        </div>
        <button type="submit">Bandingkan</button>
    </form>

    <?php

    //Nama yang dimasukkan diambil menggunakan $_POST, dan fungsi trim() digunakan untuk menghilangkan spasi di awal dan akhir.

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name1 = trim($_POST['name1']);
        $name2 = trim($_POST['name2']);

    //Fungsi strlen() menghitung jumlah karakter pada setiap nama.
        $length1 = strlen($name1);
        $length2 = strlen($name2);
    //embandingkan panjang kedua nama
        if ($length1 > $length2) {
            $selisih = $length1 - $length2;
            echo "<div class='result'><span class='underline'>$name1</span> memiliki jumlah karakter lebih banyak dari <span class='underline'>$name2</span> : selisih $selisih karakter</div>";
        } elseif ($length2 > $length1) {
            $selisih = $length2 - $length1;
            echo "<div class='result'><span class='underline'>$name2</span> memiliki jumlah karakter lebih banyak dari <span class='underline'>$name1</span> : selisih $selisih karakter</div>";
        } else {
            echo "<div class='result'>Kedua nama memiliki jumlah karakter yang sama.</div>";
        }
    }
    ?>

</body>
</html>
