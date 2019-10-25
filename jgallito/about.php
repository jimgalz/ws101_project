<?php
    include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <style>
    body{
        background-image: url("./assets/img/blog.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }#s4{
        color: white;

    }#s2{
        color: white;
        text-align: center;
    }#wq{
        float: right; 
        margin-top: 10px;
        background-color: transparent;        
        margin-right: 10px;
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
                <a class='dropdown-trigger btn' href='login.php' data-target='dropdown1' id="wq">Login</a>
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
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>
    <main>
        <?php
            $query = mysqli_query($conn,"SELECT * FROM tbl_about");
            while($row = mysqli_fetch_assoc($query)){
        ?>
        <center><img src="<?php echo $row['img'];?>" width="300" height="410" style="margin-top:15px;border-radius:5px;"></center><hr>
        <div  style="color:blue;font-size:150%;margin-left:400px;margin-right:400px;background-color:rgba(255, 255, 255, 0.5);">
        FULL NAME: <?php echo $row['fullname'];?><br>
        ADDRESS: <?php echo $row['address'];?><br>
        DATE OF BIRTH: <?php echo $row['d_birth'];?><br>
        PLACE OF BIRTH: <?php echo $row['p_birth'];?><br>
        AGE: <?php echo $row['age'];?><br>
        GENDER: <?php echo $row['gender'];?><br>
        LANGUAGE: <?php echo $row['language'];?><br>
        FATHER'S NAME: <?php echo $row['father_name'];?><br>
        OCCUPATION: <?php echo $row['f_occupation'];?><br>
        MOTHER'S MAIDEN NAME: <?php echo $row['mother_name'];?><br>
        OCCUPATION: <?php echo $row['m_occupation'];?>                
        </div>
        <?php
            }
        ?>
    </main>

    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
               <center> All Rights Reserved 2019 © WS101</center>
            </div>        
    </footer>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
</body>
</html>