<?php
$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88]
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81]
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81]
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88]
    ]
];

//Perulangan foreach digunakan untuk mengiterasi setiap siswa di dalam array $students.
//Pada setiap iterasi, nama siswa disimpan di variabel $nama, dan nilai-nilai siswa disimpan di $nilai.

//array_sum($nilai) / count($nilai) digunakan untuk menghitung rata-rata nilai.
//Hasilnya dibulatkan hingga dua angka desimal menggunakan round().

foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];
    $rataRata = array_sum($nilai) / count($nilai);
    echo "Rata-rata nilai $nama: " . round($rataRata, 2) . "<br>";
}
?>
