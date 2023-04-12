<?php

$username = 'root';
$servername = 'localhost';
$passwod = '';
$database = 'contact_app';

try{
    $con = new PDO("mysql:host=$servername;dbname=$database", $username, $passwod);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "connected successfully";
}catch(PDOException $e){
    echo "connection failed".$e->getMessage();
}
// try{
//     $con = mysqli_connect("localhost", "root", "", "contact_app");
// }catch(ex)
?>