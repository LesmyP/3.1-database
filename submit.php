<?php
// replace for actual credentials database plesk
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$description = $_POST["description"];
$email = $_POST["email"];
$link = $_POST["link"];

$sql = "INSERT INTO data (name, description, email, link) VALUES ('$name', '$description', '$email', '$link')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
