<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMHS"; 
        $sql = "CREATE TABLE $tbel(
            
        )";
        $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo "Pembuatan tabel " . $tbel . " Sukses";
        }else{
            echo "Pembuatan tabel " . $tbel . " Gagal";
        }   
    }else{
        echo "Koneksi ke Mysql Gagal";
    }