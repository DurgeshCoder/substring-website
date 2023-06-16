<?php

include "../helper/database.php";

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO  studentdetail (name,  email, subject, message) 
                        VALUES (:name, :email, :subject, :message)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':subject', $subject);
$stmt->bindParam(':message', $message);

// insert a row
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$stmt->execute();
echo "Your message has been sent. Thank you!"

?>

