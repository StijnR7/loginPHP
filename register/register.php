<?php

include 'connection.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO c (Naam, Wachtwoord)
VALUES ('$user', '$pass') ";

$conn->exec($sql);
?>
