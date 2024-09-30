<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Kompensasi Pegawai</title>
</head>
<body>
    <form method="post" action="">
        <label for="startTime">Waktu Mulai Kerja:</label>
        <input type="time" id="startTime" name="startTime" required>
        <br>
        <label for="endTime">Waktu Pulang Kerja:</label>
        <input type="time" id="endTime" name="endTime" required>
        <br>
        <button type="submit">Hitung Kompensasi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];

        // Konversi waktu menjadi timestamp untuk perhitungan
        $startTimestamp = strtotime($startTime);
        $endTimestamp = strtotime($endTime);

        // Jika waktu pulang lebih awal dari waktu mulai, anggap bekerja hingga tengah malam dan lanjut ke pagi
        if ($endTimestamp < $startTimestamp) {
            $endTimestamp += 24 * 60 * 60;
        }

        // Hitung lama jam kerja
        $totalHours = ($endTimestamp - $startTimestamp) / 3600;

        // Hitung jumlah lebih jam kerja
        $overtimeHours = max(0, $totalHours - 8);

        // Hitung kompensasi
        $compensation = 0;
        if ($overtimeHours > 0) {
            $compensation += 50000; // 1 jam pertama
            if ($overtimeHours > 1) {
                $compensation += ($overtimeHours - 1) * 25000;
            }
        }

        // Output hasil
        echo "<div class='result'>";
        echo "<p>Lama Jam Kerja: " . round($totalHours, 2) . " jam</p>";
        echo "<p>Jumlah Lebih Jam Kerja: " . round($overtimeHours, 2) . " jam</p>";
        echo "<p>Jumlah Kompensasi: Rp " . number_format($compensation, 0, ',', '.') . "</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
