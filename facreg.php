<?php
function FacRegisterFun()
{
    $msg="";
    if(isset($_GET['Name'])){
        $msg="Please Enter First Name";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }

    if(isset($_GET['ID'])){
        $msg="Please Enter ID";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }

    if(isset($_GET['email'])){
        $msg="Please Enter Email";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['password'])){
        $msg="Please Enter Password";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';

    }
    if(isset($_GET['characters'])){
        $msg="Please Enter Valid Characters in Your Name";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['InValidEmail'])){
        $msg="Please Enter Valid Email";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['UserExits'])){
        $msg="Your Account Already Exits";
        echo '<div class="alert alert-danger text-center">'.$msg.'</div>';
    }
    if(isset($_GET['success'])){
        $msg="Successfully Registered!";
        echo '<div class="alert alert-success text-center">'.$msg.'
        <a href="faculty-login.php">Login Now</a> </div>';        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery/jquery.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="sstyle.css">
    <title>Student Faculty Portal</title>
    
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php"><img class="d-inline-block align-top" src="images/vitlogo.png" alt="VIT Vellore" style="height:75px; width:180px;"></a>
    <h3>Student Faculty Academic Portal</h3>




        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbar-list-4">
                            <ul class="navbar-nav" style="margin-left:350px;">
                                    <!-- Navbar dropdown -->
                            <li class="nav-item dropdown" >
                              <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-expanded="false"
                              >
                                I'm Student
                              </a>
                              <!-- Dropdown menu -->
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="register.php">Register</a></li>
                    
                              </ul>
                            </li>
                             <!-- Navbar dropdown -->
                             <li class="nav-item dropdown" >
                              <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-expanded="false"
                              >
                                I'm Faculty
                              </a>
                              <!-- Dropdown menu -->
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="faculty-login.php">Login</a></li>
                                <li><a class="dropdown-item" href="faculty-register.php">Register</a></li>
                    
                              </ul>
                            </li>
      </ul>

    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->





<div class="container">
    <div class="row mb-5">
        <div class="col-lg-6 m-auto">
            <div class="mt-5">
                <img src="images/flogin.png" alt="Faculty Register" width="150" height="150" class="d-flex m-auto">
            </div>
            <div class="card">
                <div class="card-title bg-dark rounded-top">
                    <h3 class="text-center text-white py-3">Faculty Registration</h3>
                </div>
                <div class="card-body">
                <?php
                  FacRegisterFun();
                  ?>
                <form action="faculty-registerphp.php" method=post enctype="multipart/form-data">
                  <input type="text" placeholder="Name" name="Name" class="form-control mb-2">
                  <input type="text" placeholder="ID" name="id" class="form-control mb-2">
                  <input type="email" placeholder="Email" name="email" class="form-control mb-2">
                  <input type="password" placeholder="password" name="password" class="form-control mb-3" >
                  <a href="faclogin.html"><button class="btn btn-success" name="register">Register</button></a>
                </form >
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>