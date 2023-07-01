<?php

class Dbh {
    protected function connect(){
      try {
        $username = 'root';
        $servername = 'localhost';
        $passwod = '';
        $database = 'contact_app';
        $dbh = new PDO("mysql:host=$servername;dbname=$database", $username, $passwod);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
      } catch (PDOException $e) {
        echo "connection failed".$e->getMessage();
        die();
      }  
    }
}