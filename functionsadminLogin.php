<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "gatepass system updated";

$conn = new mysqli($servername, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login_account'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']); 

    if ($email == '' || $password == '') {
        $res = [
            'status' => 422,
            'message' => 'Please fill in all fields!'
        ];
        echo json_encode($res);
        return;
    }

    $stmt = $conn->prepare("SELECT email, password FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $passwordFromDB = $row['password']; // Plain text password from the database

        if ($password === $passwordFromDB) { // Compare plain text passwords
            $_SESSION['email'] = $email;
            $res = [
                'status' => 200,
                'message' => 'Login Successful'
            ];
            echo json_encode($res);
        } else {
            $res = [
                'status' => 401,
                'message' => 'Incorrect Password'
            ];
            echo json_encode($res);
        }
    } else {
        $res = [
            'status' => 404,
            'message' => 'Account not found'
        ];
        echo json_encode($res);
    }

    $stmt->close();
    $conn->close();
}
?>
