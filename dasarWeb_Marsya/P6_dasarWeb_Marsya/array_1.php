<!DOCTYPE html>
<html>
    <head>
        <body>
            <h2>Array Terindeks</h2>
            <?php
            $Listdosen=["Elok Nur Hamdana","Unggul Pamenang","Bagas Nugraha"];

            foreach ($Listdosen as $dosen) {
                echo $dosen  . "<br>";
            }

            echo "<br>"."<br>";
            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";

            ?>
        </body>
    </head>
</html>