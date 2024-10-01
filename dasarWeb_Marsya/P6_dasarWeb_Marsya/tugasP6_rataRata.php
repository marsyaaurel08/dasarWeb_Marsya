<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="../P5_dasarWeb_Marsya/praktik_jquery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function() {
                $("#kotak2").slideToggle("slow");
            });
        });
    </script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            font-size: 18px;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
            text-align: left;
        }
        #kotak2, #flip {
            padding: 10px;
            background-color: lightskyblue;
            border: solid 2px black;
            border-radius: 5px;
        }   
        #kotak2 {
            text-align: left;
            display: none;
        }
        #flip {
            font-weight: bold;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div id="flip">Klik untuk Melihat Data Siswa</div>
    <div id="kotak2"> 
        <h1>Data Siswa</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
            $dataSiswa = array(
                array("Marsya", 19, "2H", "Malang"),
                array("Aurel", 18, "1G", "Surabaya"),
                array("Sefira", 20, "3E", "Riau"),
                array("Marimar", 19, "2A", "Bandung")
            );

            $totalUmur = 0; 
            
            for ($i = 0; $i < count($dataSiswa); $i++) {
                echo "<tr>";
                echo "<td>" . $dataSiswa[$i][0] . "</td>";
                echo "<td>" . $dataSiswa[$i][1] . "</td>";
                echo "<td>" . $dataSiswa[$i][2] . "</td>";
                echo "<td>" . $dataSiswa[$i][3] . "</td>";
                echo "</tr>";
                
                
                $totalUmur += $dataSiswa[$i][1];
            }

            // Menghitung rata-rata umur
            $rataUmur = $totalUmur / count($dataSiswa);
            ?>
        </table>

        
        <h2>Rata-rata Umur Siswa: <?php echo $rataUmur;?> tahun</h2>
    </div>

</body>
</html>
