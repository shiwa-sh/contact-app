<?php

if(isset($_POST['submitSign'])){
   // Grabing the data
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $password = $_POST['pass'];
    $repass = $_POST['repass'];
    $address = $_POST['address'];

    // Instantiate signupContr class
    include_once "../classes/signup-contr.classes.php";
    include_once "../classes/signup.classes.php";

    $signup = new signupContr($name, $lname, $email, $phone, $company, $pass,$repass,$address);
    // Running error handler and user signup

    // Going back to front page
    $signup->signupUser();
    header('location: ../welcome.php?eror=none');

}   