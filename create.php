<?php 

include "config.php";



  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

    	header('Location: read.php');

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST" >

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname" required="">

    <br>

    Last name:<br>

    <input type="text" name="lastname" required="">

    <br>

    Email:<br>

    <input type="email" name="email" required="">

    <br>

    Password:<br>

    <input type="password" name="password" required="">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>

