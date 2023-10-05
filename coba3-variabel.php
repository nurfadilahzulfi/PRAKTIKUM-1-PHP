<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba 3 variabel</title>
</head>
<body>
    <?php
        $jalan = "Medan - B.Aceh";
        $noRumah = 29;
        $blok = "4C";
        $jumlahPenghuni = 3;
        
        echo "Hasil Variabel jalan + variabel noRumah Adalah ";
        echo $alamat = $jalan . $noRumah;
        echo "<br>";

        echo "Hasil Variabel variabel noRumah + variabel jumlahPenghuni adalah ";
        echo $hasil = $noRumah + $jumlahPenghuni;
        echo "<br>";

        echo "Hasil variabel variabel blok + variabel noRUmah adalah ";
        echo $hasil = $blok . $noRumah;
        echo "<br>"; 
    ?>
</body>
</html>