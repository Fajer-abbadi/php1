<?php
require './config.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = isset($_GET['id']) ? intval($_GET['id']) : "";

    if (empty($id)) {
        echo json_encode(['error' => 'Missing required fields']);
        exit;
    }

    $sql = "SELECT ss.student_id, students.name AS student_name, ss.subject_id, subjects.name AS subject_name, exams.exam_id
            FROM ss
            INNER JOIN students ON ss.student_id = students.id
            INNER JOIN subjects ON subjects.subject_id = ss.subject_id
            INNER JOIN exams ON ss.subject_id = exams.subject_id
            WHERE ss.student_id = ?";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo json_encode(['error' => 'Prepare failed: ' . $conn->error]);
        exit;
    }

    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        echo json_encode(['error' => 'Failed to fetch data: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    $data = [
        'error' => 'Method Not Allowed',
        'status' => false
    ];
    echo json_encode($data, JSON_PRETTY_PRINT);
}
?>
