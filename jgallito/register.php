<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}else {
}
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <style>
        body{
            background-image: url("./assets/img/blog.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }#p2{
            color: white;
        }#wq{
            float: right; 
            margin-top: 10px;
            background-color: transparent;        
            margin-right: 10px;
        }
        .q1{
            color: while;
        } #s1{
            color: red;
        }
    </style>
</head>

<body>
<header>
        <nav>
            <div class="nav-wrapper green lighten-1">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                        <li><a href="index.php"><i class="material-icons">home</i></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop</a></li>   
                </ul>
                <a class='dropdown-trigger btn' href='login.php' data-target='dropdown1' id="wq">Logout</a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="#!">three</a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                  </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="login.php">lgout</a></li>
        </ul>
    </header>
    <a href="welcome.php" type='btn' name='edit' class='waves-effect waves-light btn'><i class="material-icons">arrow_back</i></a><br><br>
    <div class="container">
            
            <center><h1 id="p2">WELCOME</h1><h3 id="p2">to Registration</h3><center>
    </div>
    <br>
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        
                        <form action="" method="post">
                            <p>
                                <label>Username:</label>
                                <input  type="text" id="user" name="uname" class="q1">
                            </p>
                            <p>
                                <label>Password:</label>
                                <input  type="password" id="passwd" name="pwd" class="q1">
                            </p>
                            <p>
                                <button type="submit" name="insert" class="waves-effect waves-light btn">Register</button>
                            </p>
                        </form>
                        <?php 
                        if (isset($_POST['insert'])) {
                            $uname = mysqli_real_escape_string($conn,$_POST['uname']);
                            $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
                            $query = mysqli_query($conn,"INSERT INTO tbl_user (username,passwd) VALUE ('$uname','$pwd')");
                            if (!$query) {
                                echo "<p>Failed registry!</p>";
                            }else {
                                echo "<p>Successfully registered</p>";
                            }
                        }
                        ?>
                         <script>
          function validateform() {
            var un = document.getElementById('uname').value;
            var psw = document.getElementById('pwd').value;
            if (un == "user" && psw == "user"){
               window.location = "index.html";
              alert("Welcome User!");
              return true;
            }else if (un == <?PHP echo $uname ?> && psw == <?PHP echo $pwd ?>){
               window.location = "index.html";
              alert("Welcome Admin!");
              return true;
              }else{
              alert("Unauthorized Access! \nInvalid Account");
              return false;
          }
        }
          </script>
                    </div>
                </div>    
            </div>
        </div>
    </div>
   <br>
    <br><br><br><br>
    <br>
    <br>
    
    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved 2019 © WS101
                <?php
                    if ($conn->connect_error) {
                        die(" Not connected to". $conn->connect_error);
                    }else {
                        echo " Connected to ". $db ;
                    }
                ?>
            </div>
        </div>
    </footer>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script src="./assets/js/scrip.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    // M.toast({html: 'I am a toast!'})
    </script>
</body>
</html>

