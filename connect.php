<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_form1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$medical = $_POST['medical_issues'];
$goal = $_POST['goal'];

// Insert query
$sql = "INSERT INTO contacts (name, email, age, gender, city, medical_issues, goal)
        VALUES ('$name', '$email', '$age', '$gender', '$city', '$medical', '$goal')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
