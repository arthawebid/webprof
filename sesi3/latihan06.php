<?php
    $mhs = array(
        array("Ardika","2233445512","Denpasar"),
        array("Wahyu Hidayat","1212311223","Magelang"),
        array("Samsul","3212345621","Mataram"),
        array("Zizi","4432114536","Manado"),
    );
    header("Content-Type: application/json");
    echo json_encode($mhs);