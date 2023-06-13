<?php 

if($_SERVER['REQUEST_METHOD']   == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'test 1') or die("Connection Failed:" .mysqli_connect_error());
if(isset($_POST['name']) && isset($_POST['age'])){
    $name= $_POST['name'];
    $age= $_POST['age'];

    $sql= "INSERT INTO `users` (`name`, `age`) VALUES ('$name', '$age')";

    $query = mysqli_query($conn, $sql);
    if($query) 
    {
        echo 'Entry Successfull';
    }
    else{
        echo 'Error Occurred';
    }
}

}
?>

