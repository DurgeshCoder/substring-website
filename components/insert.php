<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) 
                        VALUES (:firstname, :lastname, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);

// insert a row
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$stmt->execute();
echo "New record insert successfully"

?>

<a href="viewdata.php">ok</a>