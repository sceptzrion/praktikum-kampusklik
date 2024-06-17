<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penghitung BMI</title>
</head>
<body>
    <h1>Aplikasi Penghitung BMI</h1>
    <form method="POST" action="">
            <label for="tinggi">Berat Badan (kg) : </label>
            <input type="number" placeholder="" name="berat">
            <br><br>
            <label for="tinggi">Tinggi Badan (cm) : </label>
            <input type="number" placeholder="" name="tinggi">
            <br><br>
            <input type="submit" value="Hitung BMI">
    </form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tinggi = $_POST['tinggi'];
        $berat = $_POST['berat'];

        $tinggi_total = $tinggi/100;
        $bmi = $berat / ($tinggi_total * $tinggi_total);
        
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Berat Badan: $berat <br>";
        echo "Tinggi Badan: $tinggi <br>";
        echo "BMI: ", round($bmi, 2), "<br>";
        echo "Kategori BMI: ";

        if ($bmi < 17){
            echo "Sangat Kurus";
        }else if ($bmi <= 18.5){
            echo "Kurus";
        }else if ($bmi <= 25.0){
            echo "Normal";
        }else if ($bmi <= 27.5){
            echo "Gemuk (Overweight)";
        }else if ($bmi > 27.5){
            echo "Gemuk (Obesitas)";
        }
    }
?>
</body>
</html>