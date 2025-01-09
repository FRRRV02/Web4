<?php
include 'config/database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
mysqli_query($conn, $query);

header("Location: kontak.php?success=1");
?>