<!DOCTYPE html>
<html>
    <head>
        <body>
            <h1>Data Siswa</h1>
            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: left;
                }

                th {
                    background-color: white;
                }
                
            </style>
        </head>

            <?php
            $dataSiswa = [
                'Nama' => [
                    ['Nama' => 'Marsya'],
                    ['Nama' => 'Aurel'],
                    ['Nama' => 'Sefira'],
                    ['Nama' => 'Marimar'],
                ],
                'Umur' => [
                    ['Umur' => 19],
                    ['Umur' => 18],
                    ['Umur' => 20],
                    ['Umur' => 19],
                ],
                'Kelas' => [
                    ['Kelas' => '2H'],
                    ['Kelas' => '1G'],
                    ['Kelas' => '3E'],
                    ['Kelas' => '2A'],
                ],
                'Alamat' => [
                    ['Alamat' => 'Malang'],
                    ['Alamat' => 'Surabaya'],
                    ['Alamat' => 'Riau'],
                    ['Alamat' => 'Bandung'],
                ]
            ];
            // menghitung jumlah siswa
            $jumlahSiswa = count($dataSiswa['Nama']);

            //menjumlahkan semua umur
            $totalUmur = 0;
            foreach ($dataSiswa['Umur'] as $umur) {
            $totalUmur += $umur['Umur'];
            }

            echo "<table>";
            echo "<tr><th>Nama</th><th>Umur</th><th>Kelas</th><th>Alamat</th></tr>";
            for ($i = 0; $i < $jumlahSiswa; $i++) {
                echo "<tr>";
                echo "<td>" . $dataSiswa['Nama'][$i]['Nama'] . "</td>";
                echo "<td>" . $dataSiswa['Umur'][$i]['Umur'] . "</td>";
                echo "<td>" . $dataSiswa['Kelas'][$i]['Kelas'] . "</td>";
                echo "<td>" . $dataSiswa['Alamat'][$i]['Alamat'] . "</td>";
                echo "</tr>";
            }
            //menghitung rata-rata usia
            $rataRataUmur = $totalUmur / $jumlahSiswa;
            echo "Rata-rata Umur Siswa: ". $rataRataUmur;
            ?>
        </body>
    </head>
</html>