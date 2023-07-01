<?php
include_once "dbh.classes.php";
class logIn extends Dbh{
    protected function getUser($phone, $pwd){
       // $stmt = $this->connect()->prepare("INSERT INTO `users`(`password`, `phone`, `name`, `lname`, `email`, `company`, `address`) VALUES (?,?,?,?,?,?,?)");
        $stmt = $this->connect()->prepare("SELECT password FROM users WHERE phone=? or email=?");

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($phone,$pwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount()){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $hashedpwd);

        if($checkPwd == false){
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true){
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE user_id=? or  phone=? or email=?");

            if(!$stmt->execute(array($phone , $phone,$pwd))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount()){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $user =$stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["username"] = $user[0]['name'];
        }
        $stmt = null;
    }

}