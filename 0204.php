<?php
/* aturan soal
85-100:A(Sangat baik)
70-84:(Baik)
60-69:(Cukup)
50-59:(Kurang)
0-49:(Sangat Kurang)
************/
$nilai=87;
;
if ($nilai >=81 AND $nilai <=100) {
    echo "Nilai anda $nilai,mendapat grade <b>A</b> predikat <b>(Sangat baik)</b>";
}elseif ($nilai >=70 AND $nilai < 85){
    echo "nilai anda $nilai,mendapat grade <b>B</b> predikat <b>(Baik)</b>";
}elseif($nilai >=60 AND $nilai < 70){
    echo "nilai anda $nilai,mendapat grade <b>C</b> predikat <b>(Cukup)</b>";
}elseif($nilai >=50 AND $nilai < 60){
    echo "nilai anda $nilai,mendapat grade <b>D</b> predikat <b>(Kurang)</b>";
}elseif($nilai >=0 AND $nilai < 50){
    echo "nilai anda $nilai,mendapat grade <b>E</b> predikat <b>(Tidak Lulus)</b>";
} else {
    echo "Tidak ada kategori untuk nilai $nilai";
}