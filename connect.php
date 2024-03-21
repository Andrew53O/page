<?php

$email = $_POST["lemail"];
$password = $_POST["lpass"];
$conn = new mysqli('localhost', 'root', 'cindyclstaa1', 'loginpage');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO login (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);
    if ($stmt->execute()) {
        echo "Login data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}

?>