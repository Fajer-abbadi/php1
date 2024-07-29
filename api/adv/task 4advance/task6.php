<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');
require './config.php'; 
if ($_SERVER['REQUEST_METHOD'] == "PUT") {
    $input = file_get_contents('php://input');
    $result = json_decode($input, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['error' => 'Invalid JSON: ' . json_last_error_msg()]);
        exit;
    }

    $id = isset($result['id']) ? $result['id'] : "";
    $subjectId = isset($result['subjectId']) ? $result['subjectId'] : "";
    $examDate = isset($result['examDate']) ? $result['examDate'] : "";
    $maxScore = isset($result['maxScore']) ? $result['maxScore'] : "";

    if (empty($id) || empty($subjectId) || empty($examDate) || empty($maxScore)) {
        echo json_encode(['error' => 'Missing required fields']);
        exit;
    }

    $sql = "UPDATE exams SET subject_id = ?, exam_date = ?, max_score = ? WHERE exam_id = ?";
    
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo json_encode(['error' => 'Prepare failed: ' . $conn->error]);
        exit;
    }

    $stmt->bind_param('sssi', $subjectId, $examDate, $maxScore, $id);

    if ($stmt->execute()) {
        $data = [
            'subjectId' => $subjectId,
            'examDate' => $examDate,
            'maxScore' => $maxScore,
            'message' => 'Data updated successfully'
        ];
    } else {
        $data = ['error' => 'Failed to update data: ' . $stmt->error];
    }

    $stmt->close();
    $conn->close();

    echo json_encode($data, JSON_PRETTY_PRINT);
} else {
    $data = [
        'error' => 'Method Not Allowed',
        'status' => false
    ];
    echo json_encode($data, JSON_PRETTY_PRINT);
}
?>
