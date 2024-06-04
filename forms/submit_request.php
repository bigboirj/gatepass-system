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
    $reason =  $_POST['reason'];
    $actioned_by =  $_POST['action_by'];
    $parent_name = $_POST['parent_name'];
    $parent_number = $_POST['parent_number'];
    $destination = $_POST['destination'];
    $travel_date = $_POST['travel_date'];
    if (!empty($student_id) && !empty($parent_name) && !empty($parent_number) &&
        !empty($destination) && !empty($travel_date)) {
        $stmt = $conn->prepare("INSERT INTO requests (`student_id`, `destination`, `travel_date`, `status`, `request_date`, `parent_name`, `parent_number`, `request_no``) VALUES ( ? , ? , ? , ? , ? , ? , ? , ? ");

        
        if (!$stmt) {
            echo json_encode(['error' => "Prepare failed: " . $conn->error]);
            exit;
        }
        
        // Bind the parameters
        // $stmt->bind_param("sssss", $student_id,  $parent_name, $parent_number, $destination, $travel_date);
        
        if ($stmt->execute([$student_id, $destination, $travel_date, $status, $request_date, $parent_name, $parent_number, $request_no, $reason, $actioned_by])) {
            echo json_encode(['success' => "Gatepass request submitted successfully"]);
        } else {
            echo json_encode(['error' => "Execute failed: " . $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['error' => "Please fill in all required fields"]);
    }
}
$conn->close();
?>