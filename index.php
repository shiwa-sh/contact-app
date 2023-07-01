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
<?php
include('layouts/header.php');

?>
<body class="bg-light">

    <main class="bg-light">
        <div class="container border rounded mt-5 p-0 bg-white col-md-8">
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
                      <form action="search_result.php" method="post">
                            <select name="company" id="company" class="form-select">
                                <option value="" disabled selected>All Companies</option>
                                <option value="one">company One</option>
                                <option value="two">company Two</option>
                                <option value="three">company Three</option>
                            </select>
                            </form>
                    </div>
                    <!-- end of first col -->
                    <div class="col search-com">
                        <!-- <input type="search" name="search-company" id="search-company" placeholder="Search..." class="p-1 border"> -->
                        <form action="search_result.php" method="post" target="_blank">
                        <div class="input-group ps-5">
                            <div id="navbar-search-autocomplete" class="form-outline">
                              <input type="search" name="search" id="search" class="form-control" placeholder="Search name" />
                            </div>
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-repeat"></i>
                                </button>
                                <button type="submit" name="save" class="btn btn-outline-secondary">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="form-group">
                            <!-- <span class="error" style="color:red;"> <?php echo $searchErr;?></span> -->
                            </div>
                        </form>
                            
                          </div>
                          <!-- end of input-group -->
                    </div>
                    <!-- end of second col -->
                </div>
                <!-- end of serch row -->

                <!-- main table content -->
                <table class="table table-striped table-hover" id="contactTable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Comapny</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                          require_once('database/conect.php');
                          if(isset($_GET['page'])){
                            $page_number = $_GET['page'];
                          }else{
                            $page_number = 1;
                          }
                          
                          $limit = 10;
                          $initial_page = ($page_number-1)*$limit;
                          $counter=(($page_number-1)*10)+1;
                          // delete data from database
                          $delParam = isset($_GET['id']) ? $_GET['id'] : '';
                          if(isset($_GET['id'])){
                          $sql = "DELETE FROM `contacts` WHERE user_id=$delParam;";
                          $con ->exec($sql);
                          echo "<script> alet('data deleted successfully')</script>";
                        // search data from database
                        }
                        
                        
                        
                      
                          
                          
                          // fetch data from database
                          $sql = "SELECT * FROM contacts ORDER BY name LIMIT $initial_page, $limit";
                          $query = $con -> prepare($sql);
                          //$query -> bindParam()
                          $query->execute();
                          $res = $query -> fetchAll(PDO::FETCH_OBJ);
                          // if ($query -> rowCount()>0){
                            
                            if(!$res){
                              echo '<tr> No Data Found <tr>';
                            } else{
                            foreach($res as $rs){

                        ?>
                        <tr>
                        <th scope="row">
                            <?php echo $counter ?>
                        </th>
                        <td>
                            <?php echo $rs->name; ?>
                        </td>
                        <td>
                            <?php echo $rs->lname; ?>
                        </td>
                        
                        <td>
                           <?php echo $rs->phone; ?>
                        </td>
                        <td>
                            <?php echo $rs->company; ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-info btn-sm " style="border-radius: 50px;" href="show.php?user_id=<?php echo $rs->user_id;?>"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-outline-secondary btn-sm"  style="border-radius: 50px;" href="profile.php?user_id=<?php echo $rs->user_id;?>"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-outline-danger btn-sm" style="border-radius: 60px;" type="submit" name="delet-contact" href="index.php?id=<?php echo $rs->user_id;?>"><i class="bi bi-x-lg"></i></a>
                        </td>
                      </tr>
                      
                       <?php
                       $counter += 1;
                       }
                      }
                       ?>
                      
  
                    </tbody>
                  </table>
                <!-- end of main table content -->
            </div>
            <?php
            $sql = "SELECT COUNT(*) FROM contacts";
            $count = $con->query($sql);
            $page_counter = $count->fetchColumn();
            

            $numberOfpages  = ceil($page_counter/$limit);
            if($page_number>=1){
            ?>
            <nav aria-label="Page navigation example" class=" d-flex justify-content-center">
                <ul class="pagination">
                  
                  <li class="page-item"><a class="page-link text-secondary" href="index.php?page=<?php echo $page_number-1?>">Previous</a></li>
                  <?php
                  }
                  for($i=1;$i<=$numberOfpages;++$i){
                    if($i==$page_number){

                  ?>
                  <li class="page-item active"><a class="page-link" href="index.php?page=<?php echo $i?>"><?php echo $i;?></a></li>
                  <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                  <?php
                }
                else{
                ?>
                  <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $i?>"><?php echo $i;?></a></li>
                  <?php
                }
              }
              if($page_number<$page_counter){
                  ?>
                  <li class="page-item active"><a class="page-link" href="index.php?page=<?php echo $page_number+1?>">Next</a></li>
                  <?php
              }
                  ?>
                </ul>
              </nav>
        </div>
        <!-- end of main container -->
    </main>

    <script src="script/index.js" type="text/javascript"></script>
</body>
</html>