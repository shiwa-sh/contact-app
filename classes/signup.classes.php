<?php
//include_once "dbh.classes.php";
require_once("dbh.classes.php");
class signUp extends Dbh{
    protected function setUser($phone, $email, $pwd, $name,$lname, $address,$company){
        $stmt = $this->connect()->prepare("INSERT INTO `users`(`password`, `phone`, `name`, `lname`, `email`, `company`, `address`) VALUES (?,?,?,?,?,?,?)");

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($hashedpwd,$phone,$name,$lname,$address,$company, $email))){
            $stmt = null;
            header("location: ../welcome.php?error=stmtfailed");
            exit();
        }

        // $resultCheck = false;
        // if($stmt->rowCount() > 0){
        //     $resultCheck = false;
        // } else {
        //     $resultCheck = true;
        // }

        //return $resultCheck;
        $stmt = null;
    }
    protected function checkUser($phone, $email){
        $stmt = $this->connect()->prepare('SELECT phone FROM users WHERE phone = ? OR email = ?;');

        if(!$stmt->execute(array($phone, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}