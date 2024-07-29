<?php
require '../inc/dbcon.php';
require 'function.php';

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['exam_id'])) {
        // The intval() function returns the integer value of a variable.
        $examId = intval($_GET['exam_id']);
        $sql = "SELECT * FROM exams WHERE exam_id  = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $examId);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $exam = $result->fetch_assoc();
                sendJSONResponse(200, $exam);
            } else {
                sendJSONResponse(404, ['message' => 'exam not found']);
            }
        } else {
            sendJSONResponse(500, ['message' => 'Database query failed']);
        }

        $stmt->close();
    } else {
        sendJSONResponse(400, ['message' => 'exam ID is required']);
    }
} else {
    sendJSONResponse(405, ['message' => 'Method Not Allowed']);
}

$conn->close();
