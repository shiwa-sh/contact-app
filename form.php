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
    <title>Contact Form</title>
</head>
<body class="bg-light">
<?php 
    include ('layouts/header.php');
    require_once("database/conect.php");
    if(isset($_POST["submit"])){
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $emial = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $company = $_REQUEST['company'];
        $address = $_REQUEST['address'];

        $query = "INSERT INTO `contacts`(`name`, `lname`, `email`, `phone`, `address`, `company`) VALUES 
        (:first_name,:last_name,:email,:phone,:address,:company)";

        $result = $con->prepare($query);
        $exec = $result->execute(array(
            ":first_name"=>$first_name,
            ":last_name"=>$last_name,
            ":email"=>$emial,
            ":phone"=>$phone,
            ":address"=>$address,
            ":company"=>$company
        ));
        if($exec){
        echo "<script> alert('data inserted successfuly')</script>";
        }
        else{
            echo "<script> alert('data  not inserted into database')</script>";
            
        }
        
    }


?>

    <!-- main content -->
    <div class="container">
        <div class="pt-5">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="form-header text-white p-4" style="background-color: #435d7d;"><strong>Add New Contact</strong></div>
                    <!-- form inputs -->
                    <div class="container bg-white">
                        <form action="" method="POST">
                            <div class="mb-3 pt-3">
                                <!-- first name -->
                                <div class="row p-3">
                                    <div class="col-4">First Name</div>
                                    <div class="col-8"><input type="text" name="first_name" id="name" class="form-control is-invalid">
                                    <div class="invalid-feedback">Please choose a username</div>
                                    </div>
                                </div>
                                <!-- last name -->
                                <div class="row p-3">
                                    <div class="col-4">Last Name</div>
                                    <div class="col-8"><input type="text" name="last_name" id="lname" class="form-control"></div>
                                </div>
                                <!-- email -->
                                <div class="row p-3">
                                    <div class="col-4">Email</div>
                                    <div class="col-8"><input type="email" name="email" id="email" class="form-control"></div>
                                </div>
                                <!-- phone -->
                                <div class="row p-3">
                                    <div class="col-4">Phone</div>
                                    <div class="col-8"><input type="text" name="phone" id="phone" class="form-control"></div>
                                </div>
                                <!-- address -->
                                <div class="row p-3">
                                    <div class="col-4">Address</div>
                                    <div class="col-8">
                                        <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <!-- company -->
                                <div class="row p-3">
                                    <div class="col-4">Company</div>
                                    <div class="col-8">
                                        <select name="company" id="company" class="form-control">
                                            <option selected value="0">Select Company</option>
                                            <option value="1">Company One</option>
                                            <option value="2">Company Two</option>
                                            <option value="3">Company Three</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <!-- submit button -->
                                <div class="d-flex justify-content-center">
                                    <input class="btn btn-info text-white m-3" type="submit" value="submit" name="submit"></input>
                                    <input class="btn btn-outline-secondary m-3" type="submit" value="Cancle" name="cancle"></input>
                                </div>
                                <!-- end of submit buttons -->
                            </div>
                        </form>
                    </div>
                    <!-- end of form inputs -->
            </div>
            
        </div>
    </div>
    <!-- end of main content -->
</body>
</html>