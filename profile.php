<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/form.css">
    <title>Contact Profile</title>
</head>
<body class="bg-light">
    <!-- header -->
    <nav class="navbar bg-white navbar-expand-lg navbar-light border border-bottom border-light custom-border">
        <div class="container d-flex">
            <a class="navbar-brand text-danger ">CONTACT APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <!-- navbar collapse -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto p-2 flex-grow-1">
                    <li class="navbar-item p-2">
                        <a href="#" class="text-secondary text-decoration-none pr-2">Companies</a>
                    </li>
                    <li class="navbar-item active p-2">
                        <a href="#" class="text-dark text-decoration-none">Contacts</a>
                    </li>
                </ul>
                <ul class="navbar-nav p-2">
                    <div>
                        <button class="btn btn-outline-secondary p-2">Login</button>
                        <button class="btn btn-outline-primary p-2">Register</button> 
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            John Doe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                            
                          </ul>
                        </ul>
                    </li>   
              </div>
        </div>
    </nav>
    <!-- end of header -->
    <!-- main form -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-auto">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                      Setting
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-primary text-white">Profile</li>
                      <li class="list-group-item">Account</li>
                      <li class="list-group-item">Import & Export</li>
                    </ul>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white"><h4>Edit Profile</h4></div>
                    <div class="card-body row">
                        <form class="col-8">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">First Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Last Name</label>
                              <input type="text" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputCompany1" class="form-label">Company</label>
                                <input type="text" class="form-control">
                              </div>

                              <div class="mb-3">
                                <label for="bioInput" class="form-label">Bio</label>
                                <textarea name="bio" id="bioInput" cols="15" rows="5" class="form-control"></textarea>
                              </div>
                            <button type="submit" class="btn btn-success">Update Profile</button>
                          </form>
                          <!-- profile picture -->
                          <div class="col">
                            <h6 class="text-center">Profile picture</h6>
                            <div class="d-flex justify-content-center mb-4">
                                
                                <img src="img/p2.png" class="rounded-circle" alt="example placeholder" style="width: 150px;" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-primary btn-rounded">
                                    <label class="form-label text-white m-1" for="customFile2">Select image</label>
                                    <input type="file" class="form-control d-none" id="customFile2" />
                                </div>
                            </div>
                        </div>
                        <!-- end of profile pic -->
                    </div>
                </div>
            </div>
            <!-- end of main card -->
            
        </div>
    </div>
    <!-- end of main form -->
</body>
</html>