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
    $id= intval($_GET['id']);

   $sql="SELECT * FROM students WHERE id=? ";
   $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $result= $stmt-> get_result();
            $student = $result->fetch_assoc();
         echo json_encode( $student);
    
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
