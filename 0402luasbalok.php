<?php
function hitungluasBalok(float $panjang, float $lebar){
    $luasBalok = $panjang * $lebar;

    return $luasBalok;

}
//buat volumevbalok

function hitungvolumeBalok(float $panjang, float $lebar, float $tinggi){
    $volumeBalok = $panjang * $lebar * $tinggi;

    return $volumeBalok;
}