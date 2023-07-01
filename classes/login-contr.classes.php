<?php

class loginContr extends logIn{
    
    private $phone;
   // private $email;
    private $pass;
    

    public function __construct( $phone, $pass)
    {
        
       // $this->email = $email;
        $this->phone = $phone;
        $this->pass = $pass;
       
        
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            // echo empty input
            header("location: ../welcome.php?error=emptyinput");
            exit();
        }
   

        $this->getUser($this->phone, $this->pass);
    }
    private function emptyInput(){
        $result = false;
        if(empty($this->phone)||  empty($this->pass) ){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

   

}