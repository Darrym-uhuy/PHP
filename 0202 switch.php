<?php
$menu = "/asal jadi";
switch ($menu) {
case "/":
    echo "anda berada di halaman utama";
    break;
    case "/tentang":
        echo "anda berada di halaman tentang";
        break;
        case "/produk":
            echo "anda berada di halaman produk";
            break;
            case "/kontak":
                echo "anda berada di halaman kontak";
                break;
                default:
                    echo "halaman $menu tidak ditemukan";
                    break;
                }