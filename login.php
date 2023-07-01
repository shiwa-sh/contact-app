<?php
require_once('database/conect.php');
session_start();
//if($_SERVER["REQUEST_METHOD"] == "POST"){
  try{
    echo 'script is working';
  if(isset($_POST['signIn'])){
    
    if(empty($_POST['phone']) || empty($_POST['pass'])){
      $message = '<label>All fields are requierd</label>';
    }else{
      $query = "SELECT * FROM users WHERE phone = :phone AND password = :pass";
      $statement = $con->prepare($query);
      $statement->execute(
        array(
          'phone' => $_POST['phone'],
          'password' => $_POST['pass']
        )
      );
      $count = $statement->rowCount();
      if($count > 0){
        $_SESSION['phone'] = $_POST['phone'];
        header("location:welcome.php");
      }else{
        $message = '<label>Wrong Data</label>'; 
      }
    }
  }
}
catch(PDOException $err){
  $message = $err->getMessage();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/login.css">
    <title>Document</title>
</head>
<body class="bg-light">
<div class="row align-items-center " style="height: 100vh;">>
    <div  class="mx-auto col-10 col-md-8 col-lg-4 shadow-lg p-5 rounded">
        <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
        aria-controls="pills-login" aria-selected="true">Login</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
        aria-controls="pills-register" aria-selected="false">Register</a>
    </li>
  </ul>
  <!-- Pills navs -->
  
  <!-- Pills content -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      <form method="post" action="welcome.php">
      <?php
                if (isset($_SESSION["errorMessage"])) {
                    ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
        <div class="text-center mb-3">
          <p>Sign in with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
  
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
  
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
  
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
  
        <p class="text-center">or:</p>
  
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input name="phone" type="text" id="loginName" class="form-control" placeholder="phone number"/>
          <!-- <label class="form-label" for="loginName"></label> -->
        </div>
  
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input name="pass" type="password" id="loginPassword" class="form-control" placeholder="Password"/>
          <!-- <label class="form-label" for="loginPassword"></label> -->
        </div>
  
  
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="signIn">Sign in</button>
  
        <!-- Register buttons -->

  <!-- Pills content -->
    </div>
</div>

</body>
</html>