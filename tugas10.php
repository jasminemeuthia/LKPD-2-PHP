<?php
function hitungKategoriUsia($dataUsia) {
    $jumlahAnakAnak = 0;
    $jumlahDewasa = 0;
//Menggunakan foreach untuk mengiterasi setiap usia di dalam array.
    foreach ($dataUsia as $usia) {
        if ($usia < 17) {
            $jumlahAnakAnak++;
        } else {
            $jumlahDewasa++;
        }
    }
//output
    echo "List Usia: " . implode(", ", $dataUsia) . "<br>";
    echo "Jumlah Kategori Dewasa: $jumlahDewasa<br>";
    echo "Jumlah Kategori Anak-Anak: $jumlahAnakAnak<br>";
}

// Contoh penggunaan
$dataUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
hitungKategoriUsia($dataUsia);
?>
