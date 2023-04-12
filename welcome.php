<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <button class="btn btn-outline-secondary p-2">Login</button>
                        <button class="btn btn-outline-primary p-2">Register</button> 
                    </div>
                        </ul>
                    </li>   
              </div>
        </div>
    </nav>
    <!-- end of header -->

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
</body>
</html>