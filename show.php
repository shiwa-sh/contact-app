<?php
require_once 'database/conect.php';
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM contacts WHERE user_id=$user_id;";
    $query = $con->prepare($sql);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/form.css">
    <title>Contact Info</title>
</head>
<body class="bg-light">
    <?php include ('layouts/header.php');?>
    <!-- Content Informatio -->
    <div class="container ">
        <div class="pt-5">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="form-header text-white p-4" style="background-color: #435d7d;"><strong>Contact Details</strong></div>
                    <div class="container bg-white">
                    <?php
                    if($res){
                        
                    ?>
                    <!-- name -->
                <div class="row p-3">
                    <div class="col-4">First Name</div>
                    <div class="col-8 text-secondary"><?php echo $res[0]['name'];?></div>
                </div>
                <!-- last name -->
                <div class="row p-3">
                    <div class="col-4">Last Name</div>
                    <div class="col-8 text-secondary"><?php echo $res[0]['lname'];?></div>
                </div>
                <!-- email -->
                <div class="row p-3">
                    <div class="col-4">Email</div>
                    <div class="col-8 text-secondary"><?php echo $res[0]['email'];?></div>
                </div>
                <!-- phone -->
                <div class="row p-3">
                    <div class="col">Phone</div>
                    <div class="col-8 text-secondary">+<?php echo $res[0]['phone'];?></div>
                </div>
                <!-- addresss -->
                <div class="row p-3">
                    <div class="col">Address</div>
                    <div class="col-8 text-secondary"><?php echo $res[0]['address'];?></div>
                </div>
                <!-- company -->
                <div class="row p-3">
                    <div class="col">Company</div>
                    <div class="col-8 text-secondary"><?php echo $res[0]['company'];?></div>
                </div>
                <hr>
                <div class="btn-container d-flex justify-content-center">
                    <form action="">
                        <button name="edit" class="btn btn-primary">Edit</button>
                        <!-- <a href="#" class="btn btn-outline-danger">Delete</a> -->
                        <a href="#" class="btn btn-outline-secondary">Cancle</a>
                    </form>
                </div>
            <?php
                    }
            ?>
            </div>
            </div>
        </div>
    </div>
        
    </div>
    <!-- end of Content Information -->
</body>
</html>