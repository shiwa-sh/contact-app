<?php
require_once 'database/conect.php';
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM contacts WHERE user_id=$user_id;";
    $query = $con->prepare($sql);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);

  print_r($res[0]['address']);
}
if(isset($_POST['edit'])){


  $data = [
    ($_POST['first_name'])?$_POST['first_name']:$res[0]['name'],
    ($_POST['last_name'])?$_POST['last_name']:$res[0]['lname'],
     ($_POST['email'])?$_POST['email']:$res[0]['email'],
    ($_POST['phone'])?$_POST['phone']:$res[0]['phone'],
    ($_POST['address'])?$_POST['address']:$res[0]['address'],
    ($_POST['company'])?$_POST['company']:$res[0]['company'],
    $res[0]['user_id'],
];
 // print_r($data);
  //$edit_sql = "UPDATE contacts SET name=:name ,lname=:lname, email=:email, phone:=phone ,address=:address, company=:company WHERE user_id=:user_id";
  $edit_sql = "UPDATE contacts SET name=? ,lname=?, email=?, phone=? ,address=?, company=? WHERE user_id=?";
  $stmt = $con->prepare($edit_sql)->execute($data);
}
?>
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
    <div class="container mt-5 ">
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white"><h4>Edit Profile</h4></div>
                    <div class="card-body row">
                        <form class="col-8" method="POST">
                            <?php
                            if($res){
                            ?>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">First Name</label>
                              <input type="text" class="form-control" aria-describedby="emailHelp" name="first_name" placeholder="<?php echo $res[0]['name'];?>">
                              
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Last Name</label>
                              <input type="text" class="form-control" name="last_name" placeholder="<?php echo $res[0]['lname'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputCompany1" class="form-label">Company</label>
                                <input type="text" class="form-control" name="company" placeholder="<?php echo $res[0]['company'];?>">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputCompany1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="<?php echo $res[0]['email'];?>">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputCompany1" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="<?php echo $res[0]['phone'];?>">
                              </div>

                              <div class="mb-3">
                                <label for="bioInput" class="form-label">Address</label>
                                <textarea id="bioInput" cols="15"  name="address" rows="5" class="form-control" placeholder="<?php echo $res[0]['address'];?>"></textarea>
                              </div>
                            <button type="submit" name="edit" class="btn btn-success">Update Profile</button>
                          </form>
                          <!-- profile picture -->
                          <form action="upload.php" method="post" enctype="multipart/form-data">
                          <div class="col">
                            <h6 class="text-center">Profile picture</h6>
                            <div class="d-flex justify-content-center mb-4">
                                
                                <img src="img/p2.png" class="rounded-circle" alt="example placeholder" style="width: 150px;" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-primary btn-rounded">
                                    <label class="form-label text-white m-1" for="customFile2">Select image</label>
                                    <input type="file" class="form-control d-none" name="imgfile" />
                                </div>
                            </div>
                        </div>
                          </form>
                        <!-- end of profile pic -->
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- end of main card -->
            
        </div>
    </div>
    <!-- end of main form -->
</body>
</html>