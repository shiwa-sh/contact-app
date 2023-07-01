<?php
//include_once 'signup.classes.php';
require_once("signup.classes.php");
class signupContr extends signUp{
    private $name;
    private $lname;
    private $email;
    private $phone;
    private $company;
    private $pass;
    private $repass;
    private $address;

    public function __construct($name, $lname, $email, $phone, $company, $pass,$repass, $address)
    {
        $this->name = $name;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->pass = $pass;
        $this->repass = $repass;
        $this->company = $company;
        $this->address = $address;
        
    }

    public function signupUser(){
        // if($this->emptyInput() == false){
        //     // echo empty input
        //     header("location: ../welcome.php?error=emptyinput");
        //     exit();
        // }
        // if(!$this->emptyInput()){
        //     header("location: ../welcome.php?error=".$this->emptyInput());
            
        //     exit();  
        // }
        if($this->invalidName() == false){
            // echo invalid name
            header("location: ../welcome.php?error=name");
            exit();
        }
        if($this->invalideEmail() == false){
            // echo invalid email
            header("location: ../welcome.php?error=emil");
            exit();
        }
        if($this->pwdMatch() == false){
            header("location: ../welcome.php?error=passwordmatch");
        }

        $this->setUser($this->phone, $this->email, $this->pass, $this->name,$this->lname, $this->address,$this->company);
    }
    private function emptyInput(){
        // $result = null;
        // if(empty($this->name) || empty($this->lname) || empty($this->email) || empty($this->phone)
        // || empty($this->company) || empty($this->pass) || empty($this->address)){
        //     $result = false;
        // } else{
        //     $result = true;
        // }
        // return $result;
        $result = [];
        $val = [$this->name,$this->lname,$this->email,$this->phone,$this->company,$this->pass,$this->repass,$this->address];
        foreach($val as $v){
            if(empty($v)){
                $result[] = $v;
            }
        }
        print_r($result);
        return $result;
    }

    private function invalidName(){
        $result = true;
        if(!preg_match("/^[a-zA-Z]*$/", $this->name)){
            $result = false;
        }
        elseif(!preg_match("/^[a-zA-Z]*$/", $this->lname)){
            $result = false;
        }
        return $result;
    }
    private function pwdMatch(){
        $result = false;
        if ($this->pass != $this->repass){
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    private function invalideEmail(){
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result= true;
        }
        return $result;
    }

}