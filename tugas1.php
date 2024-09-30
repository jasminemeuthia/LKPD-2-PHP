<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periksa Angka dalam Teks</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="inputText" placeholder="Masukkan teks...">
        <button type="submit">Periksa</button>
    </form>

    <?php 
    //Mengecek apakah metode pengiriman formulir adalah POST.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Mengambil data yang dimasukkan pengguna dari kolom teks dengan nama inputText.
        $inputText = $_POST['inputText'];

        echo "<p class='result'>Teks: $inputText</p>";

        // preg match all = Cari angka dalam teks
        preg_match_all('/\d/', $inputText, $matches);

        if (!empty($matches[0])) {
            $numbers = implode(', ', $matches[0]);
            echo "<p class='result'>Teks mengandung angka: $numbers</p>";
        } else {
            echo "<p class='result'>Teks tidak mengandung angka</p>";
        }
    }
    ?>
</body>
</html>

