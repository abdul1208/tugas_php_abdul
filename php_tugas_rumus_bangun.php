<?php 

echo "<center><h3> TUGAS RUMUS BANGUN DATAR </h3></center>";
echo "<hr>";

echo "Rumus luas Persegi L = sisi x sisi";
echo "<br>";
echo "misal sisi (s)=4 cm maka:";
echo "<br>";
$s = 4;
$l = $s * $s;
echo "L = $s ** = $l cm persegi";
echo "<hr>";

echo "Rumus luas Segitiga {1/2 x a x t}";
echo "<br>";
echo "misal a=4 cm, t=7 cm maka:";
echo "<br>";
$a = 4;
$t = 7;
$x = 1/2;
$l = $x * $a * $t;
echo "L = $x * $a * $t = $l cm persegi";
echo "<hr>";

echo "Rumus luas Belah Ketupat {1/2 x d1 x d2}";
echo "<br>";
echo "misal d1=8 cm, d2=9 cm maka:";
echo "<br>";
$d1 = 8;
$d2 = 9;
$x = 1/2;
$l = $x * $d1 * $d2;
echo "L = $x * $d1 * $d2 = $l cm persegi";
echo "<hr>";

echo "Rumus luas Lingakaran {22/7 x r x r}";
echo "<br>";
echo "jika r=12cm maka:";
echo "<br>";
$r = 12;
$x = 22/7;
$l = $x * $r * $r;
echo "L = $x * $r ** = $l cm persegi";
echo "<hr>";

echo "Rumus luas trapesium {L = sisi atas (sa) + sisi bawah (sb) /2 x t}";
echo "<br>";
echo "jika sa=10cm, sb=13cm, t=8cm maka:";
echo "<br>";
$sa = 10;
$sb = 13;
$t = 8;
$x = 2;
$l = $sa + $sb / $x * $t;
echo "L = ($sa + $sb) / $x * $t = $l cm persegi";
echo "<hr>";

echo  "<br>"

 ?>



<?php
echo "<center><h3> TUGAS RUMUS BANGUN RUANG</h3></center>";
echo "<hr>";

echo "Rumus volume kubus = Rusuk x rusuk x rusuk ( V = r x r x r )";
echo "<br>";
echo "misal r=5 cm maka:";
echo "<br>";
$r = 5;
$v = $r * $r *$r;
echo "V = $r *** = $v cm kubik";
echo "<hr>";

echo "Rumus volume balok = Luas alas x tinggi (V = p x l x t)";
echo "<br>";
echo "misal p=8 cm, l= 5cm , t= 6cm maka:";
echo "<br>";
$p = 8;
$l = 5;
$t = 6;
$v = $p * $l *$t;
echo "V = $p * $l * $t= $v cm kubik";
echo "<hr>";

echo "Rumus volume Limas = 1/3 x Luas alas x tinggi (V = 1/3 La x t)";
echo "<br>";
echo "misal La=16cm , t= 6cm maka:";
echo "<br>";
$La = 16;
$t = 6;
$x = 1/3;
$v = $x * $La *$t;
echo "V = $x * $La * $t= $v cm kubik";
echo "<hr>";

echo "Rumus volume tabung = 22/7 x Jari-jari x tinggi (V = 22/7 x r x r x t)";
echo "<br>";
echo "misal r=14cm , t= 20cm maka:";
echo "<br>";
$r = 14;
$t = 20;
$x = 22/7;
$v = $x * $r * $r *$t;
echo "V = $x * $r ** $t= $v cm kubik";
echo "<hr>";

echo "Rumus volume bola = 4/3 x phi x jari-jari pangkat tiga (V = 4/3 x 22/7 x r x r xr)";
echo "<br>";
echo "misal r=10cm , maka:";
echo "<br>";
$r = 10;
$y = 4/3;
$x = 22/7;
$v = $x * $y * $r * $r * $r;
echo "V = $x * $y * $r *** = $v cm kubik";
echo "<hr>";

?>