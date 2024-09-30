<?php
//menghitung angka
function hitungAngka($data, $cari) {
    $jumlah = 0;
    
    //Menggunakan foreach untuk mengiterasi setiap elemen dalam array $data.
    
    foreach($data as $angka) {
        if($angka == $cari) {
            $jumlah++;
        }
    }
    
    return $jumlah;
}

// Contoh penggunaan
$data = [100, 90, 23, 44, 100, 99, 82];
$cari = 100;

$hasil = hitungAngka($data, $cari);
echo "Jumlah angka $cari = $hasil";

?>
