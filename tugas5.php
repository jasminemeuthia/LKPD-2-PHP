<?php
// Definisikan dua array bilangan
$array1 = [77, 55, 90, 80, 65, 89];
$array2 = [55, 90, 12, 77, 86];

// Kelompokkan bilangan yang ada di kedua variabel
$bilanganSama = array_intersect($array1, $array2);

// Kelompokkan bilangan yang tidak ada di kedua variabel (bilangan yang hanya ada di satu array)
$bilanganBerbeda = array_merge(
    array_diff($array1, $array2),
    array_diff($array2, $array1)
);

// Tampilkan hasil
echo "Bilangan yang ada di kedua variabel: " . implode(", ", $bilanganSama) . "<br>";
echo "Bilangan yang tidak ada di kedua variabel: " . implode(", ", $bilanganBerbeda) . "<br>";
?>
