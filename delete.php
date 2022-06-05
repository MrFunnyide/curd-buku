<?php
include 'koneksi.php';

//POST DATA
if ($_POST){
    $isbn = $_POST['isbn'];

    //INSERT DATA
    $stmt = $connection->prepare("DELETE FROM buku WHERE isbn = '$isbn'");
    $stmt->execute();

    //Beri Response
    $response['message'] = "Data Berhasil di Hapus";

    //Jadikan data dalam bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);

    //print json
    echo $json;

} else {
    $response['message'] = "Delete data Gagal";
    //Jadikan data dalam bentuk JSON
    $json = json_encode($response, JSON_PRETTY_PRINT);

    //print json
    echo $json;
}