<?php

include 'connection.php';

$user = $_POST['usernameLog'];
$pass = $_POST['passwordLog'];
$stmt = $conn->prepare("SELECT Naam, Wachtwoord FROM c WHERE Naam='$user'");
$stmt->execute();

$result = $stmt->fetch();

if(isset($result)){
    echo 'klopt';
}
else{
    echo 'niet';

}
?>
