<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "gatepass system updated";

$conn = new mysqli($servername, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_id = $_POST['student_id'];

$query = "SELECT cname, email, batch FROM user WHERE student_ID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cname = $row['cname'];
    $email = $row['email'];
    $batch = $row['batch'];
    echo json_encode(array('cname' => $cname, 'email' => $email, 'batch' => $batch));
} else {
    echo json_encode(array('error' => 'Student ID not found'));
}

$stmt->close();
$conn->close();
?>
