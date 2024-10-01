<!DOCTYPE html>
<html>
    <head>
        <body>
            <h1>Data Mahasiswa array multidimensi</h1>
            <?php
            $dataMhs = [
                'Nama' => [
                    ['Nama' => 'marsya'],
                    ['Nama' => 'aurel'],
                ],
                'Nim' => [
                    ['Nim' => 2341720011],
                    ['Nim' => 1122334455],
                ],
                'Jurusan' => [
                    ['Jurusan' => 'teknik informasi'],
                    ['Jurusan' => 'teknik mesin'],
                ],
                'Email' => [
                    ['Email' => 'sefiramarsya@gmail.com'],
                    ['Email' => 'aureliasefira@gmail.com'],
                ]
            ];
            
            $data = [];
            foreach ($dataMhs['Nama'] as $key => $value) {
                echo "<li>Nama: " . $value['Nama'] . "<br>";
                echo "<li>NIM: " . $dataMhs['Nim'][$key]['Nim'] . "<br>";
                echo "<li>Jurusan: " . $dataMhs['Jurusan'][$key]['Jurusan'] . "<br>";
                echo "<li>Email: " . $dataMhs['Email'][$key]['Email'] . "<br><br>";
            }

            ?>
        </body>
    </head>
</html>