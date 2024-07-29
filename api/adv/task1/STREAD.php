<?php

require 'config.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $sql="SELECT * FROM students ";
   if(mysqli_query($conn, $sql) > 0) {
    
    $res = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);
    $data = [
        'status' => 200,
        'message' => 'DONE',
        'data' => $res
    ];
    header("HTTP/1.0 200 done ");
    echo json_encode($data);

   }
 
   else {
    $data = [
        'status' => 404,
        'message' => 'NO DATA',
    ];
    header("HTTP/1.0 404 NO DATA");
    echo json_encode($data);
}
    
    }

 else {
    $data = [
        'status' => 405,
        'message' => 'method not allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}





$conn->close();
?>
