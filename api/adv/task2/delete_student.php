<?php
require 'db.php';

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method:DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    if (isset($_GET['studentId'])) {
        // The intval() function returns the integer value of a variable.
        $studentId = intval($_GET['studentId']);

        $stmt = $conn->prepare("DELETE FROM student WHERE studentId = ?");
        $stmt->bind_param("i", $studentId);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 0) {
                sendJSONResponse(200, "done");
            } else {
                sendJSONResponse(404, ['message' => 'student not found']);
            }
        } else {
            sendJSONResponse(500, ['message' => 'Database query failed']);
        }

        $stmt->close();
    } else {
        sendJSONResponse(400, ['message' => 'student ID is required']);
    }
} else {
    sendJSONResponse(405, ['message' => 'Method Not Allowed']);
}

$conn->close();
