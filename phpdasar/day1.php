<?php

echo "program ganjil_genap" . PHP_EOL . PHP_EOL;

$number = 1;

if($number % 2 == 0){
    echo "genap";
}else{
    echo "ganjil";
}


//Pseudocode
/* 
Program HitungLuasSegitiga

Deklarasi
Variabel a, t tipe data >>> Int
Variabel hasil >>> Float

Algoritma
Nilai masuk(a, t)
hasil = 1/2 * a * t
Nilai keluar("Luas Segitiga: ", hasil)
*/

echo  PHP_EOL . PHP_EOL;
echo "Program : Hitung Luas Segitiga" . PHP_EOL . PHP_EOL;

$a = 6;
$t = 20;
$hasil =(float)(1 / 2 * $a * $t);

 /*
 Catatan 
 Output : echo (semua tipe data), print(string)
 Debugging : var_dump, print_r
 */

echo "Luas Segitiga: $hasil" . PHP_EOL;
var_dump($hasil);


echo  PHP_EOL . PHP_EOL;
echo "Program : Menghitung Volume Balok" . PHP_EOL;

$p = 82;
$l = 46;
$t = 18;
$hasil = (string) ($p * $l * $t);

echo "Panjang = $p, Lebar = $l, Tinggi = $t, Volume = $hasil" . PHP_EOL;
var_dump($hasil);
?>