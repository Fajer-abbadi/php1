<?php
require './config.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : "";

    if ($id) {
        $sql = "SELECT ss.student_id, students.name AS student_name, subjects.name AS subject_name
                FROM ss
                INNER JOIN students ON students.id = ss.student_id
                INNER JOIN subjects ON subjects.subject_id = ss.subject_id
                WHERE ss.student_id = '$id'";

        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $students = [];
                while ($row = $result->fetch_assoc()) {
                    $students[] = $row;
                }
                echo json_encode($students);
            } else {
                echo json_encode(['message' => 'No subjects found for this student']);
            }
        } else {
            echo json_encode(['error' => 'Query failed: ' . $conn->error]);
        }
    } else {
        echo json_encode(['error' => 'Invalid student ID']);
    }
} else {
    $data = [
        'error' => 'Method Not Allowed',
        'status' => false
    ];
    echo json_encode($data);
}
?>
