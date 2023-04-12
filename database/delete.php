<?php
session_start();
include ("conect.php");
if(isset($_POST['delet-contact'])){
    $contact_id = $_POST['delet-contact'];

    try{
        $sql = "DELET FROM contacts WHERE id=:cont_id";
        $query = $con->prepare($sql);
        $data = [
            ':cont_id' => $contact_id
        ];
        $query_execute = $query->execute($data);
        if($query_execute){
            $_SESSION['mesaage'] = 'Deleted Successfully';
            header('Location: index.php');
            exit(0);
        }
        else{
            $_SESSION['message'] = "Not Deleted";
            header('Location: index.php');
            exit(0);
        }
    } catch(PDOException $e){
        echo $e->getMessage();
    }
}


?>