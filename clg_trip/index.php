
<?php
$insert=false;
if (isset($_POST['name'])){

}
   $server="localhost";
   $username="root";
   $password="";
   $con=mysqli_connect($server,$username,$password);
   if(!$con){
    die("connection to this datsbase failed due to".mysqli_connect_error());
   }
   echo "successfully connect to the db";
   $name=$_POST['name'];
   $gender=$_POST['gender'];
   $age=$_POST['age'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $desc=$_POST['desc'];
   $sql="INSERT INTO `trip'.'tripp` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
   echo $sql;
   if ($con->query($sql)==true){
      echo "successfully inserted";
   }
   else{
      echo "ERROR : $sql <br> $con->error";
   }
   $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class ="bg" src="hetc.jpg" alt="HETC Hooghly">
    <div class="container">
        <h1>Welcome HETC US trip form</h1>
        <p>Enter your details this form to confirm your parcipation in the trip</p>
        
        
        <!--if($insert== true){
            echo<p class="submitMsg">Thanks for submitting your form.We are happy to see you joining us for the us trip. </p>
        }
        ?>-->
        
        <form action="index.php" method="post">
            <input type="text" name="name"id="name" placeholder="Enter your name">
            <input type="number" name="age"id="age" placeholder="Enter your age">
            <input type="text" name="gender"id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone"id="phone" placeholder="Enter your number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
    <!--INSERT INTO `tripp` (`Sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testname', '21', 'female', 'abc@gmail.com', '1234567891', 'this is a good trip', current_timestamp());-->
    <footer>
        <p>&COPY;All right reserved</p>
    </footer>
</body>
</html>