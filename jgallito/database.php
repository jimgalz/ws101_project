<?php 
session_start();
include 'dbconfig.php';
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <link rel="stylesheet" href="../css/materializecss.min.css">
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
            color: white;
        }
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
                <a class='dropdown-trigger btn' href='logout.php' data-target='dropdown1' id="wq">Logout</a>
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
            <li><a href="login.php">Logout</a></li>
        </ul>
    </header>
    <a href="welcome.php" type='btn' name='edit' class='waves-effect waves-light btn'><i class="material-icons">arrow_back</i></a>
    <center><h1 class="q1">Table of Registered Users</h1>
    <table class="container" class="responsive-table" class="highlight">
    <th class='q1'></th>
    <th class='q1'>Username</th>
    <th class='q1'>Password</th>
    <th class='q1'>Options</th>
    
    <?php $result = mysqli_query($conn,"SELECT * FROM tbl_user") ;
    while ($row = mysqli_fetch_assoc($result))  {
        echo "<tr><td class='q1'></td>"."<td>".$row['username']."</td>"."<td>".$row['passwd']."</td>"."<td>
        <button data-id=".$row['id']." data-uname=".$row['username']." data-passwd=".$row['passwd']." name='dit' class='btnUp waves-effect orange waves-light btn modal-trigger' href='#editmodal'><i class='material-icons'>edit</i></button> 
        <button data-id=".$row['id']." data-uname=".$row['username']." class='btn-del waves-effect red waves-light btn modal-trigger' href='#delmodal'><i class='material-icons'>delete</i></button>";
    }
    ?>
    </table></center><br>
    <div style="text-align:right;margin-right:50px;color:red;">
    <?php
        include 'del.php';
        include 'update.php';
    ?>
    </div>
    <br><br>
    <div id="editmodal" class="modal ">
            <div class="modal-content center">
                <h4>EDIT USER ACCOUNT</h4>
                <div class="row">
                    <form  method="post">
                        <div class="container "><br><br>
                            <div class="input-field col s1">
                                <input type="text" class="id" id="disabled" name="id" hidden="">
                            </div>
                            <div class="input-field col s4">    
                                <input id="username" name="uname" type="text" class="validate">
                            </div>
                            <div class="input-field col s4">
                                <input id="passwd" type="text" name="passwd" class="validate">
                            </div>     
                            <div class="input-field col s2">
                            <button type="submit" name="edit" class="modal-close waves-effect waves-green btn-flat">update</button><br>
                            </div>     
                        </div>
                    </form>
                </div>   
            </div>
        </div>

        <div id="delmodal" class="modal">
            <div class="modal-=content" style="color:white;">
                <div class="container"><br>
                    <p class="center">Delete this user?</p>
                    <form action="" method="post">
                    <input type="text" id="del" name="del" hidden="">
                    <center>
                            <button type="submit" class="waves-effect waves-teal btn-flat" name="delyes" style="color:white;">Delete</button> | <button type="submit" class="waves-effect waves-teal btn-flat" name="delno" style="color:white;">Cancel</button><br>
                    </center> 
                    </form>
                   
                </div>  
            </div>
        </div>

<br><br><br><br>
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
        var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
            });
            let btnedit = document.querySelectorAll(".btnUp");
            let btndel = document.querySelectorAll(".btn-del");
            for(var q=0;q<btndel.length;q++){
                btndel[q].addEventListener('click',del);
            }
            for(var i=0;i<btnedit.length;i++){
                btnedit[i].addEventListener('click',up);
            }
            function up(e){
                let id =document.querySelector('.id');
                let uname = document.querySelector("#username");
                let pwd = document.querySelector("#passwd");
                id.value = this.dataset.id
                uname.value = this.dataset.uname;
                pwd.value = this.dataset.passwd;
                console.log(this.dataset.id);
                console.log(this.dataset.uname);
                console.log(this.dataset.passwd);
            }   
            function del(e) {
                let del = document.querySelector("#del");
                del.value= this.dataset.id;
                console.log(this.dataset.id);
            }
      </script> 
</body>
</html>
<?php 
    if (isset($_POST['username'])) {
        $uname=mysqli_real_escape_string($conn,$_POST['uname']);
        $pwd=mysqli_real_escape_string($conn,$_POST['passwd']);
        $query = mysqli_query($conn,"UPDATE `tbl_user` SET username = '$uname', passwd = '$pwd', fname ='$fname', lname ='$lname' WHERE id = '$id' ");
        if (!$query) {
            echo 'Updated faild!!';
        }else {
            echo 'Updated succesfully!!';
        }
    }
?>