<?php

include "includes/signup.inc.php";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sign up</title>
</head>
<!-- <body class="bg-image" style="background-image: url('img/bg2.avif'); height:100vh; width:100%; background-repeat:no-repeat;"> -->
  <body style="background-color: #82c3e9;">
    <div class="container d-flex align-items-center justify-content-center ">
    <div class="col-md-6 mt-5 center border rounded shadow-lg p-5 bg-white">
        <form action="includes/signup.inc.php" method="post">
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Name</label>
          <input type="text" class="form-control validate" name="name">
          
        </div>
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">LastName</label>
          <input type="text" class="form-control validate" name="lname">
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">email</label>
          <input type="email"  class="form-control validate" name="email">
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Phone</label>
          <input type="text"  class="form-control validate" name="phone">
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Company</label>
          <!-- <input type="text"  class="form-control validate" name="company"> -->
          <select name="company" id="company" class="form-control">
                                            <option selected value="0">Select Company</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Address</label>
          <input type="text"  class="form-control validate" name="address">
          
        </div>
        
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">password</label><i class="fa-sharp fa-light fa-lock-keyhole"></i>
          <input type="password" class="form-control validate" name="pass">
          
        </div>
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Repeat password</label><i class="fa-sharp fa-light fa-lock-keyhole"></i>
          <input type="password" class="form-control validate" name="repass">
          
        </div>

        <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" style="width:100%; height:100%;" name="submitSign" type="submit">Sign up</button>
      </div>
        </form>
    </div>
    </div>
</body>
</html>