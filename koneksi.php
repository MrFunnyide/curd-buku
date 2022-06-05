<?php
$dbserver = 'localhost';
$dbname = 'kuliahweb';
$dbuser = 'root';
$dbpass = '';
$dbn = 'mysql:host='.$dbserver.';dbname='.$dbname;

$connection = null;
try {
     $connection = new PDO($dbn, $dbuser, $dbpass);
     // echo "Koneksi Berhasil";
} catch (PDOException $e) {
     echo "Koneksi Gagal : ".$exception->getMessage();
}
?>