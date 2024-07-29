<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

// Handle preflight (OPTIONS) request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(204); // No Content
    exit;
}

require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name']) && isset($data['class']) && isset($data['dateOfBirth']) && isset($data['address']) && isset($data['contactInformation'])) {
        $name = $data['name'];
        $class = $data['class'];
        $date_of_birth = $data['dateOfBirth'];
        $address = $data['address'];
        $contact = $data['contactInformation'];

        $sql = "UPDATE student SET name=?, class=?, dateOfBirth=?, address=?,contactInformation=? WHERE studentId=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $class, $date_of_birth, $address, $contact);

        if ($stmt->execute()) {
            echo json_encode(['status' => 200, 'message' => 'The updated data was sent']);
        } else {
            echo json_encode(['status' => 500, 'error' => 'Error: ' . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(['status' => 400, 'error' => 'Invalid input']);
    }
} else {
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode(['status' => 405, 'message' => 'Method Not Allowed']);
}

$conn->close();
