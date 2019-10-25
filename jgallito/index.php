<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
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
    <center>
  <b><h1 style="font-style:Courier;">HOME PAGE</h1></b>
  <p style="font-size:180%;background-color:powderblue;margin-top:60px;">Life brings us as many joyful moments as it does downfalls, <br>and although there are days we wish there was a manual to follow, <br> it simply wouldn’t be the same without the spontaneity. The journey of life may not become easier as we grow older,<br> but we do seem to understand it better as our perspectives evolve.<br> Whether you’re embarking on a new adventure right out of school or you want to explore different paths in your personal life, <br>it’s never too late to change what the future looks like.</p></center>
</main>
    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                <center>All Rights Reserved to JIMBOY GALLITO as of 2019 © WS101</center>
            </div>
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