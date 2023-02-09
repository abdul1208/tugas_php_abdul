<?php 
echo "<center><h3> TUGAS FUNCTION PHP RUMUS BANGUN DATAR </h3></center>";
echo "<hr>";

echo "Rumus luas Persegi = (L = s x s)";
function luas_persegi ($sisi) {
    $L = $sisi * $sisi ;
    echo "<br>";
    echo "misal sisi = 9 cm";
    echo "<br>";
    echo "$sisi cm x $sisi = $L";
    echo "<br>";
}
    luas_persegi (9);
    echo "<hr>";

echo "Rumus luas Segitiga = (L = 1/2 x a x t)";
function luas_segitiga ($x, $a , $t) {
    $L = $x * $a * $t;
    echo "<br>";
    echo "misal a=7cm, t=13 cm";
    echo "<br>";
    echo "maka $x x $a x $t = $L cm persegi";
    echo "<br>";
}
    luas_segitiga (1/2, 7, 13);
    echo "<hr>";

echo "Rumus luas Belah Ketupat (L = 1/2 x d1 x d2)";
function luas_bk ($x, $d1, $d2) {
    $L = $x * $d1 * $d2;
    echo "<br>";
    echo "misal d1=8 cm, d2=9 cm maka:";
    echo "<br>";
    echo "L = $x * $d1 * $d2 = $L cm persegi";
}
    luas_bk (1/2, 8, 9);
    echo "<hr>";

echo "Rumus luas Lingakaran (L = 22/7 x r x r)";
function luas_lingkaran ($x, $r) {
    $L = $x * $r * $r;
    echo "<br>";
    echo "misal r=12cm maka:";
    echo "<br>";
    echo "L = $x * $r ** = $L cm persegi";
}
    luas_lingkaran (22/7, 12);
    echo "<hr>";

echo "Rumus luas Trapesium (L = sisi atas (sa) + sisi bawah (sb) /2 x t)";
function luas_trapesium ($sa, $sb, $t, $x ) {
    $L = $sa + $sb / $x * $t;
    echo "<br>";
    echo "misal sa=10cm, sb=13cm, t=8cm maka:";
    echo "<br>";
    echo "L = ($sa + $sb) / $x * $t = $L cm persegi";
}
    luas_trapesium (10, 13, 1/2, 8);
    echo "<hr>";


echo "<br>";
echo "<br>";

echo "<center><h3> TUGAS FUNCTION PHP RUMUS BANGUN RUANG </h3></center>";
echo "<hr>";

echo "Rumus volume Kubus = Rusuk x rusuk x rusuk ( V = r x r x r )";
function Volume_kubus ($r) {
    $V = $r * $r * $r;
    echo "<br>";
    echo "misal r=5 cm maka:";
    echo "<br>";
    echo "V = $r *** = $V cm kubik";
} 
    Volume_kubus (5);
    echo "<hr>";

echo "Rumus volume Balok = Luas alas x tinggi (V = p x l x t)";
function Volume_balok ($p, $l, $t) {
    $V = $p * $l * $t;
    echo "<br>";
    echo "misal p=8 cm, l= 5cm , t= 6cm maka:";
    echo "<br>";
    echo "V = $p * $l * $t= $V cm kubik";
} 
    Volume_balok (8, 5, 6);
    echo "<hr>";

echo "Rumus volume Limas = 1/3 x Luas alas x tinggi (V = 1/3 La x t)";
function Volume_limas ($La, $t, $x, ) {
    $V = $x * $La *$t;
    echo "<br>";
    echo "misal La=16cm , t= 6cm maka:";
    echo "<br>";
    echo "V = $x * $La * $t= $V cm kubik";
}
    Volume_limas (1/3, 16, 6);
    echo "<hr>";


echo "Rumus volume Tabung = 22/7 x Jari-jari x tinggi (V = 22/7 x r x r x t)";
function Volume_tabung ($x, $r, $t) {
    $V = $x * $r * $r * $t;
    echo "<br>";
    echo "misal r=14cm , t= 20cm maka:";
    echo "<br>";
    echo "V = $x * $r ** $t= $V cm kubik";
}
    Volume_tabung (14,20, 22/7, 20);
    echo "<hr>";

echo "Rumus volume Bola = 4/3 x phi x jari-jari pangkat tiga (V = 4/3 x 22/7 x r x r x r)";
function Volume_bola ($x, $y, $r,  ) {
    $V = $x * $y * $r * $r * $r;
    echo "<br>";
    echo "misal r=10cm , maka:";
    echo "<br>";
    echo "V = $x * $y * $r *** = $V cm kubik";
}
    Volume_bola (22/7, 4/3, 10);
    echo "<hr>";

 ?>

