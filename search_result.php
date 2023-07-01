<?php
require_once('database/conect.php');
if(isset($_POST['save'])){
    if(!empty($_POST['search'])){
      $searchParam = $_POST['search'];
      $stmt = $con->prepare("SELECT * FROM `contacts` WHERE name LIKE '%$searchParam%'; ");
      $stmt->execute();
      $searched_contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
     

    } else {
      $searchErr = "Please enter the information";
    }
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
    
    <link rel="stylesheet" href="style/style.css">
    <title>Contact App</title>
</head>
<?php
include('layouts/header.php');

?>
<body class="bg-light">

    <main class="bg-light">
        <div class="container border rounded mt-5 p-0 bg-white">
            <div class="main-heade text-white p-3 d-flex" style="background-color: #435d7d;">
                <h2 class="p-2 flex-grow-1">All Contacts</h2>
                
            </div>
            <!-- end of main header -->
            <div class="content bg-white p-4">
                <div class="row search p-4 border-bottom">
                    

                    <table class="table table-striped table-hover" id="contactTable">
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
                    <?php
                    $counter = 1;
                    if(!$searched_contacts){
                        echo "no matched data was found";
                    }else{
                        foreach($searched_contacts as $s){
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $counter ?>
                        </th>
                        <td>
                            <?php echo $s['name']; ?>
                        </td>
                        <td>
                            <?php echo $s['lname']; ?>
                        </td>
                        <td>
                            <?php echo $s['email']; ?>
                        </td>
                        <td>
                           <?php echo $s['phone']; ?>
                        </td>
                        <td>
                            <?php echo $s['company']; ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-info btn-sm " style="border-radius: 50px;"><i class="bi bi-eye"></i></a>
                            <!-- href="index.php?<?php //echo $rs['phone']?>" -->
                            <a class="btn btn-outline-secondary btn-sm"  style="border-radius: 50px;"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-outline-danger btn-sm" style="border-radius: 60px;" type="submit" name="delet-contact" href="index.php?id=<?php echo $s['phone'];?>"><i class="bi bi-x-lg"></i></a>
                        </td>
                      </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                  </table>
                <!-- end of main table content -->
            </div>

            </div>
        <!-- end of main container -->
    </main>

    
</body>
</html>