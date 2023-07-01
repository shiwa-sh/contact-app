<?php
// session_start();
// // echo $_SESSION['phone'];
//     if(isset($_SESSION['phone'])){
//       echo $_SESSION['phone'];
//         $query = "SELECT * FROM users WHERE phone =".$_SESSION['phone'].";";
//         $stm = $con->prepare($query);
//         $stm->execute();
//         $user = $stm->FETCH_ASSOC(PDO::FETCH_ASSOC);
//         echo $user['name'];
//     }
//     if(isset($_POST['logout'])){
//       session_destroy();
//     }
session_start();
include "includes/login.inc.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/welcome.css">
    <title>Welcome</title>
</head>
<body>
    <!-- header -->
    <nav class="navbar bg-light navbar-expand-lg navbar-light border border-bottom border-light custom-border">
        <div class="container d-flex">
            <a class="navbar-brand text-danger ">CONTACT APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <!-- navbar collapse -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto p-2 flex-grow-1">
                    
                </ul>
                <ul class="navbar-nav p-2">
                    <div>
                      <?php
                      if(isset($_SESSION['username'])){ 
                        ?>
                        <li><a href="#"></a><?php echo $_SESSION['username'];?></li>
                        <li><a href="includes/logout.inc.php" class="btn btn-outline-secondary p-2">logout</a></li>
                        <!-- <form action="" method="post">
                          <button class="btn btn-outline-secondary p-2" name="logout">LogOut</button>
                        </form> -->
                        <?php
                      }else{
                      ?>
                      <button class="btn btn-outline-secondary p-2"  data-bs-toggle="modal" data-bs-target="#signinpage" id="login">Sign in <i class="fa fa-user-plus ml-3"></i></button>
                      <a class="btn btn-outline-primary p-2" href="signup.php">Sign up <i class="fa fa-sign-in-alt ml-3"></i></a>
                      <?php
                      }
                      ?>
                      
                      
                    </div>
                        </ul>
                    </li>   
              </div>
        </div>
    </nav>
    <!-- end of header -->

    <!-- login form -->
    <div class="modal fade" id="signinpage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="" method="post">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text"  class="form-control validate" name="phone">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your Phone</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" class="form-control validate" name="pass">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" style="width:100%; height:100%;" name="submitSign" type="submit">Sign In</button>
      </div>
      </form>
    </div>
  </div>
</div>


    <!-- end of login form -->

        <!-- Sigup form -->
<!-- <div class="modal fade" id="signupPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form action="signup.inc.php" method="post">
      <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass" >Your Name</label>
          <input type="text" class="form-control validate" name="name">
          
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your LastName</label>
          <input type="text" class="form-control validate" name="lname">
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          <input type="email"  class="form-control validate" name="email">
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your Phone</label>
          <input type="text"  class="form-control validate" name="phone">
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your Company</label>
          <input type="text"  class="form-control validate" name="company">
          
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your Address</label>
          <input type="text"  class="form-control validate" name="address">
          
        </div>
        
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          <input type="password" class="form-control validate" name="pass">
          
        </div>
        </form>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" style="width:100%; height:100%;" name="submitSign" type="submit">Sign up</button>
      </div>
    </div>
  </div>
</div>
 -->

    <!-- end of sign up form -->
    <!-- main content -->

    
    <div class="container-fluid">
            <div class="pt-5 pb-5">
                <div class="d-flex justify-content-center"><h1>Contact App</h1></div>
                <div class="d-flex justify-content-center pt-2">
                    <p style="text-align: center;">Contact App gives you everything you need to organize your contacts<br> easily.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="">
                        <a href="" class="btn btn-primary">Sign Up</a>
                        <a href="" class="btn btn-outline-secondary">Sign In</a>
                    </form>
                </div>
                
            </div>
        </div>
        <!-- first part of main -->

        <div class="bg-light mt-5">
            <div class="container">
                <div class="row">
                    <div class="col p-5">
                        <h2>Data Protection</h2>
                        <div>In the event of contact deletion or corruption, keep your contacts secure and unharmed across all of your connected accounts.</div>
                    </div>

                    <div class="col p-5">
                        <h2>Notes & Tags</h2>
                        <div>Group, search, and filter your contacts using notes and tags.</div>
                    </div>

                    <div class="col p-5">
                        <h2>Birthday Reminders</h2>
                        <div>Weekly notifications are sent to you, including birthday reminders.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of second part -->
        <div class="container pt-5 pb-5">
            <div class="d-flex justify-content-center pb-5"><h2>Easy to try. Fair pricing to upgrade.</h2></div>
            <div class="card-container row">

                <div class="card mb-4 shadow-sm px-0 text-center m-auto" style="width: 18rem;">
                    <h5 class="card-header">Free</h5>
                    <div class="card-body">
                      <h5 class="card-title">$0 <span class="text-secondary">/ mo</span></h5>
                      <p class="card-text">1,000 Contacts <br> Sync 1 Acconts<br> Basic Feature</p>
                      <a href="#" class="btn btn-outline-primary btn-lg btn-block">Sign up for free</a>
                    </div>
                  </div>
                  <!-- end of card -->
                  <div class="card mb-4 shadow-sm px-0 text-center m-auto" style="width: 18rem;">
                    <h5 class="card-header">Pro</h5>
                    <div class="card-body">
                      <h5 class="card-title">$9 <span class="text-secondary">/ mo</span></h5>
                      <p class="card-text">25,000 Contacts <br> Sync 5 Acconts<br> Pro Feature</p>
                      <a href="#" class="btn btn-primary btn-lg btn-block">Get started</a>
                    </div>
                  </div>
                  <!-- end of card -->
                  <div class="card mb-4 shadow-sm  px-0 text-center m-auto" style="width: 18rem;">
                    <h5 class="card-header">Enterprise</h5>
                    <div class="card-body">
                      <h5 class="card-title">$15 <span class="text-secondary">/ mo</span></h5>
                      <p class="card-text">50,000 Contacts <br> Sync 7 Acconts<br> Advanced Feature</p>
                      <a href="#" class="btn btn-primary btn-lg btn-block">Contct us</a>
                    </div>
                  </div>
                  <!-- end of card -->
            </div>
        </div>
    </div>
    <!-- end of main content -->

<?php
include('layouts/footer.php');
?>

<script src="script/welcome.js"></script>
</body>
</html>