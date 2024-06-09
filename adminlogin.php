<?php
    include "./Includes/dbcon.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logo/attnlg.jpg" rel="icon">
    <title>AMS - Admin Login</title>
    <!-- Adding css styling-->
    <link rel="stylesheet" href="index.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="img/logo/attnlg.jpg" width="50px" height="50px" /><a class="navbar-brand px-3" href="#">AMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a aria-current="page" href="./index.php">Back Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./adminlogin.php">Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="./teacherlogin.php" target="_blank">Class Teacher Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <section class="admin-form">
        <div class="container py-5">
            <div class="row g-4 py-5">
                <div class="col-md-7">
                    <div class="card">
                        <img src="./img/a3.avif" class="card-img-top" alt="Image Not Found">
                    </div>

                </div>
                <div class="col md-5">
                    <div class="card h-100 w-100">
                        <h1 class="text-center mt-5">Admin Login</h1>
                        <hr class="ml-3 mr-3">
                        <?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
          $query = "SELECT * FROM tbladmin WHERE emailAddress = '$username' AND password = '$password'";
          $rs = $conn->query($query);
          $num = $rs->num_rows;
          $rows = $rs->fetch_assoc();
    
          if($num > 0){
    
            $_SESSION['userId'] = $rows['Id'];
            $_SESSION['firstName'] = $rows['firstName'];
            $_SESSION['lastName'] = $rows['lastName'];
            $_SESSION['emailAddress'] = $rows['emailAddress'];
    
            echo "<script type = \"text/javascript\">
            window.location = (\"Admin/index.php\")
            </script>";
          }
    
          else{
    
            echo"<div class='alert alert-danger alert-dismissible fade show ml-3 mr-3 text-danger' role='alert' >
            <p>Invalid Username/Password!</p>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
             
    
          }
        }
    
    ?>
                        <form class="user m-3" action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control mt-3" required name="username"
                                    id="exampleInputEmail" placeholder="Enter Email Address" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required class="form-control mt-3"
                                    id="exampleInputPassword" placeholder="Enter Password" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block mt-5" value="Login"
                                    name="login" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php
    include './Admin/Includes/footer.php';
?>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>