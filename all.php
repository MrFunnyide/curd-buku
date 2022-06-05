<?php
include 'koneksi.php';
// @var $connection 
// prepare query
$query = "SELECT * FROM  buku";
$statment = $connection->query($query);
$statment-> setFetchMode(PDO::FETCH_ASSOC);

// jalankan query
$result = $statment->fetchAll();
// ouput json
header('Content-Type: application/json');
echo json_encode($result);
?>