<?php
    $nilaiSiswa = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ];

    $totalNilai = 0;
    $nilaiDiatasRataRata = [];

    // Menjumlahkan total nilai siswa
    foreach ($nilaiSiswa as $nilai) {
        $totalNilai += $nilai[1]; 
    }

    // Menghitung rata-rata nilai
    $rataRata = $totalNilai / count($nilaiSiswa);

    // Mencari siswa yang nilainya di atas rata-rata
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai[1] >= $rataRata) {
            $nilaiDiatasRataRata[] = $nilai;
        }
    }

    echo "Nilai Siswa dalam Ujian Matematika:<br><br>";
    foreach ($nilaiSiswa as $nilai) {
        echo "{$nilai[0]}: {$nilai[1]}<br>";
    }

    echo "<br>Rata-Rata Nilai: {$rataRata}<br><br>";

    echo "Daftar nilai siswa yang di atas rata-rata:<br>";
    foreach ($nilaiDiatasRataRata as $nilai) {
        echo "{$nilai[0]}: {$nilai[1]}<br>";
    }
?>
