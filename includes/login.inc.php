<?php

if(isset($_POST['submitSign'])){
   // Grabing the data
  
    $phone = $_POST['phone'];

  
    $password = $_POST['pass'];
   

    // Instantiate signupContr class
    include_once "../classes/login-contr.classes.php";
    include_once "../classes/login.classes.php";

    $signup = new loginContr( $phone, $pass);
    // Running error handler and user signup

    // Going back to front page
    $signup->loginUser();
    header('location: ../welcome.php?eror=none');

}  