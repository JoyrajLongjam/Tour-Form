<?php
    $insert = false;
   if(isset($_POST['name'])){
       // Set connection variables
       $server = "localhost";
       $username = "root";
       $password = "";
   
       // Create a database connection
       $con = mysqli_connect($server, $username, $password);
   
       // Check for connection success
       if(!$con){
           die("connection to this database failed due to" . mysqli_connect_error());
       }
       // echo "Success connecting to the db";
   
       // Collect post variables
       $name = $_POST['name'];
       $gender = $_POST['gender'];
       $age = $_POST['age'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $desc = $_POST['desc'];
       $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name',
        '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
        echo $sql;
        if($con->query($sql) == true){
        echo "Successfully inserted";
    }
        $con->close(); 
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Trip Form to Keibul Lamjao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="a.jpg"class="imgg" width=100%  alt="">
    <div class="class1">
        <h3>FORM</h3>
        <p>Enter your details</p>
        <p class="sub">Thank You</p>
        <form action="sasa.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="name" placeholder="Enter your Age">
        <input type="text" name="gender" id="name" placeholder="Enter your Gender">
        <input type="text" name="year" id="name" placeholder="Enter your year">
        <input type="text" name="email" id="name" placeholder="Enter your email">
        <input type="text" name="phone" id="name" placeholder="Enter your phone number">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Any thing you want to mention">
        </textarea>
        <button class="bt">Submit Form</button>
    </form>
    </div>
    <script src="i.js"></script>
</body>
</html>

