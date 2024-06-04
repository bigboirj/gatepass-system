<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "gatepass system updated";

$conn = new mysqli($servername, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');
    $student_id = $_POST['student_id'];
    $parent_name = $_POST['parent_name'];
    $parent_number = $_POST['parent_number'];
    $destination = $_POST['destination'];
    $date = $_POST['travel_date'];

    if (!empty($student_id) && !empty($parent_name) && !empty($parent_number) && !empty($destination) && !empty($date)) {
        $stmt = $conn->prepare("INSERT INTO gatepass_requests (student_id, cname, email, batch, parent_name, parent_number, destination, travel_date) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt) {
            echo json_encode(['error' => "Prepare failed: " . $conn->error]);
            exit;
        }
        $stmt->bind_param("sssss", $student_id, $parent_name, $parent_number, $destination, $travel_date);
        if ($stmt->execute()) {
            echo json_encode(['success' => "Gatepass request submitted successfully"]);
        } else {
            echo json_encode(['error' => "Execute failed: " . $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['error' => "Please fill in all required fields"]);
    }
    $conn->close();
    exit;
}
?>