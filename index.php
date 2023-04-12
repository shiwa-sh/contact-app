<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Contact App</title>
</head>
<body class="bg-light">

    <main class="bg-light">
        <div class="container border rounded mt-5 p-0 bg-white">
            <div class="main-heade text-white p-3 d-flex" style="background-color: #435d7d;">
                <h2 class="p-2 flex-grow-1">All Contacts</h2>
                <button class="btn btn-success pt-0 pb-0" id="addNewBtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                  </svg><span class="p-2 ">Add New</span></button>
            </div>
            <!-- end of main header -->
            <div class="content bg-white p-4">
                <div class="row search p-4 border-bottom">
                    <div class="col select-company">
                            <select name="company" id="company" class="form-select">
                                <option selected>All Companies</option>
                                <option value="1">company One</option>
                                <option value="1">company Two</option>
                                <option value="1">company Three</option>
                            </select>
                    </div>
                    <!-- end of first col -->
                    <div class="col search-com">
                        <!-- <input type="search" name="search-company" id="search-company" placeholder="Search..." class="p-1 border"> -->
                        <div class="input-group ps-5">
                            <div id="navbar-search-autocomplete" class="form-outline">
                              <input type="search" id="form1" class="form-control" placeholder="Search..."/>
                            </div>
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-repeat"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-search"></i>
                            </button>
                          </div>
                          <!-- end of input-group -->
                    </div>
                    <!-- end of second col -->
                </div>
                <!-- end of serch row -->

                <!-- main table content -->
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Comapny</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php include ('layouts/header.php');
                          require_once('database/conect.php');
                          // delete data from database
                          //$delParam = $_GET['phone'];
                          // if(isset($_GET['phone'])){
                          //   $del = "DELETE FROM `contacts` WHERE `phone`";
                          // $con ->exec($del);
                          // echo "data" . $_GET['phone']."deleted successfully";
                          // }
                          

                          // fetch data from database
                          $sql = "SELECT * FROM contacts";
                          $query = $con -> prepare($sql);
                          //$query -> bindParam()
                          $query->execute();
                          $res = $query -> fetchAll(PDO::FETCH_OBJ);
                          // if ($query -> rowCount()>0){
                        
                            foreach($res as $rs){

                        ?>
                        <th scope="row">
                        <?php echo $rs->id; ?>
                        </th>
                        <td>
                          <?php echo $rs->name; ?>
                        </td>
                        <td>
                        <?php echo $rs->lname; ?>
                        </td>
                        <td>
                        <?php echo $rs->email; ?>
                        </td>
                        <td>
                        <?php echo $rs->phone; ?>
                        </td>
                        <td>
                        <?php echo $rs->company; ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-info btn-sm " style="border-radius: 50px;"><i class="bi bi-eye"></i></a>
                            <!-- href="index.php?<?php //echo $rs['phone']?>" -->
                            <a class="btn btn-outline-secondary btn-sm"  style="border-radius: 50px;"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-outline-danger btn-sm" style="border-radius: 60px;" type="submit" name="delet-contact" href="index.php?id=<?php echo $rs->id;?>"><i class="bi bi-x-lg"></i></a>
                        </td>
                      </tr>
                      <tr>
                       <?php
                       
                       }
                       ?>
                      <?php
                      $delParam = $_GET['id'];
                      if(isset($_GET['id'])){
                        $sql = "DELETE FROM `contacts` WHERE id=".$delParam.";";
                        $con ->exec($sql);
                      //echo "data " . $_GET['id']." deleted successfully";
                      }
                      
                      ?>
  
                    </tbody>
                  </table>
                <!-- end of main table content -->
            </div>
            <nav aria-label="Page navigation example" class=" d-flex justify-content-center">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link text-secondary" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
        </div>
        <!-- end of main container -->
    </main>

    <script src="script/index.js"></script>
</body>
</html>