<?php
    
    echo "Index massa tubuh (IMT)/Body Mass Index (BMI)";
    echo "<br>";
    echo "Rumus BMI=wight in kg(w) / height in meter quadrate (h)";
    echo "<br>";
    $name = "andi";
    $w = 76;
    $h = pow(1.60,2);
    $bmi = $w / $h;
    
    if (($bmi >= 18.5) && ($bmi <=25)) {
        $info = "Sedang";
    }
    elseif (($bmi >= 25) && ($bmi <30)) {
        $info ="Gemuk";
    }
    elseif (($bmi >= 30) && ($bmi <35)) {
        $info ="Obesitas Kelas 1";
    }
    elseif (($bmi >= 35) && ($bmi <40)) {
        $info ="Obesitas Kelas 2";
    }
    elseif ($bmi >= 40) {
        $info ="Obesitas Kelas 3";
    }
    elseif (($bmi >= 5) && ($bmi <18.5)) {
        $info ="Kuruss";
    }
    else {
    $info ="error";
    }
    echo "Halo $name,"; 
    echo "<br>";
    echo "Nilai BMI kamu adalah: $bmi";
    echo "<br>";
    echo "anda termasuk $info";
    
?>       