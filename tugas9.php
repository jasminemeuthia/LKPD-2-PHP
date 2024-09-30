<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Pecahan Rupiah</title>
</head>
<body>

<div class="container">
    <h2>Hitung Pecahan Rupiah</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="jumlah">Masukkan Jumlah Uang (Rp):</label>
            <input type="number" id="jumlah" name="jumlah" min="1" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Hitung">
        </div>
    </form>

    <?php
    //$jumlah: Diambil dari input pengguna dan dikonversi ke tipe integer menggunakan intval().
    //$pecahan: Array berisi nilai pecahan uang Rupiah (dari Rp100.000 hingga Rp100).
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jumlah = intval($_POST['jumlah']);
        //jumlah pecahan uang
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
        $hasil = [];

        
        foreach ($pecahan as $uang) {
        /*foreach adalah perulangan yang digunakan untuk mengiterasi (mengulang) 
        elemen-elemen dari suatu array atau objek dengan cara yang sederhana dan efisien.*/
            if ($jumlah >= $uang) {
                $lembar = floor($jumlah / $uang);
                $hasil[$uang] = $lembar;
                $jumlah -= $lembar * $uang;
            }
        }

        //untuk hasil/output

        echo "<div class='result'>";
        echo "<p>Uang: Rp. " . number_format($_POST['jumlah'], 0, ',', '.') . "</p>";
        echo "<p>Lembar Rupiah:</p>";
        foreach ($hasil as $uang => $lembar) {
            echo "<p>Rp. " . number_format($uang, 0, ',', '.') . " : " . $lembar . "</p>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
