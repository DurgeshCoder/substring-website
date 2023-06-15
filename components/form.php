<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <!-- important links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container text-center">
        <h1>Register here</h1>
        <!-- <form action="connect.php">
            <div class="row">
                <div class="col-lg-12  my-4">

                <input type="text" class="form-group" placeholder="name" id="name" required>
                </div>
                <div class="col-lg-12">

          <input type="text" class="form-group" placeholder="age" id="age" required>
       </div>
       <div class="col-lg-12 my-4">

<button class="btn btn-primary" type="submit" id="submit" >Submit</button>
</div>
            </div>
          
         
        </form> -->
        <form action="insert.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Subject: <input type="text" name="subject"><br>
message: <input type="text" name="message"><br>
<input type="submit">
</form>
    </div>
</body>
</html>


<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test 1";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   $name= $_POST['name'];
//   $age= $_POST['age'];

//   $sql = "INSERT INTO users (name, age)
//   VALUES ('$name', '$age', )";
//   echo $sql;
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "New record created successfully";
// } catch(PDOException $e) {
//   echo "<br>" . $e->getMessage();
// }

// $conn = null;
?>