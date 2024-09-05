<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "contact_form_db";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, gender, age, message) VALUES ('$name', '$email', '$gender', '$age', '$message')";

    if ($koneksi->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
