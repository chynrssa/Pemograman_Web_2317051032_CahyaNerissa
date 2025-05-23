<?php 
    $host = "localhost"; 
    $user = "root"; 
    $pass = ""; 
    $db = "kuis2_pemwebr_cahyanerissa_2317051032";

    $conn = mysqli_connect($host, $user, $pass, $db); 
        if (!$conn) { 
        die("Koneksi gagal: " . mysqli_connect_error()); 
        } 
?>