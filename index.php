<?php
$insert = false;
if(isset($_POST['name'])){
   
    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    // echo "Success connecting to the db"

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo$sql;
    // ->Object operator

    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg3.jpg" alt="TIPS">
    <div class="container">
        <h1>Welcome to TIPS,Dwarka</h1>
        <h2>Mussorie Trip Form</h2>
        <h5>Enter your details to confirm your participation in the trip</h5>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'><b>Thanks for submitting your form.
        We are happy to see you joining us for the Mussorie trip.</b></p>";
        }
        ?>
        // <!-- //2 methods of forms :get n post 
        //post: is secure ,we can send passwords etc
        //get:all the sent data is visible in url  -->
      
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->

        </form>

    </div>
    <script src="index.js"></script>
    
    
</body>
</html>





















