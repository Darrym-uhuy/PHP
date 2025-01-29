<?php
  #IF 9 PILIHAN
# 81-100 A Bobot 4
# 78-80,99 A- Bobot 3,7
# 75-77,99 B+ Bobot 3,3
# 70-74,99 B Bobot 3
# 65-69,99 B- Bobot 2,7
# 60-64,99 C+ Bobot 2,3
# 55-59,99 C Bobot 2
# 40-54,99 D Bobot 1
# 0-39,99 E Bobot 0
$nilai = 81.8;
    echo "<h2>batas atas dan bawah</h2>";
    if ($nilai >= 81 AND $nilai <= 100) {
        echo "nilai anda $nilai Akreditasi anda <b>A</b> Bobot anda 4";
    }elseif ($nilai >= 78 AND $nilai < 80.99) {
        echo " nilai anda $nilai Akreditasi anda <b>A-</b> Bobot anda 3,7";
    }elseif ($nilai >= 75 AND $nilai < 77.99) {
        echo " nilai anda $nilai  Akreditasi anda <b>B+</b> Bobot anda 3,7";
    }elseif ($nilai >= 70 AND $nilai < 74.99) {
        echo " nilai anda $nilai Akreditasi anda <b>B</b> Bobot anda 3,7";
    }elseif ($nilai >= 65 AND $nilai < 69.99) {
        echo " nilai anda $nilai Akreditasi anda <b>B-</b> Bobot anda 3,7";
    }elseif ($nilai >= 60 AND $nilai < 64.99) {
        echo " nilai anda $nilai Akreditasi anda <b>C+</b> Bobot anda 3,7";
    }elseif ($nilai >= 55 AND $nilai < 59.99) {
        echo " nilai anda $nilai Akreditasi anda <b>C</b> Bobot anda 3,7";
    }elseif ($nilai >= 40 AND $nilai < 54.99) {
        echo " nilai anda $nilai Akreditasi anda <b>D</b> Bobot anda 3,7";
    }elseif ($nilai >= 0 AND $nilai < 39.99) {
        echo " nilai anda $nilai Akreditasi anda <b>E</b> Bobot anda 3,7";
    }