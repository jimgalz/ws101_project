<?php 
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="./assets/styles.css" rel="stylesheet" type="text/css">
    <title>Blog</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <script src=".assets/js/jquery.min.js"></script>
    <script>
function commentSubmit(){
    if(form1.name.value == '' && form1.comments.value == ''){ 
        alert('Enter message!');
        return;
    }
    var name = form1.name.value;
    var comments = form1.comments.value;
    var xmlhttp = new XMLHttpRequest(); 
    
    xmlhttp.onreadystatechange = function(){ 
        if(xmlhttp.readyState==4&&xmlhttp.status==200){
            document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; 
        }
    }
    xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); 
    xmlhttp.send();
}

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
    });
    
</script>
    <style>
    body{
        background-image: url("./assets/img/blog.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }#p3{
        color: white;

    }#s3{
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
      <center><h3 style="color:darkblue;margin-top:100px;">The Elephant Rope</h6></center>
    <p style="text-align:center;color:blue;font-size:15px;font-weight: bolder;margin-top:120px;background-color:powderblue;">                                                                                   

    There was a passing the elephants, he suddenly stopped, confused by the fact that these huge creatures were being held by only a small rope tied to their front leg.  No chains, no

  cages.  It was obvious that the elephants could, at anytime, break away from their bonds but for some reason, they did not.  He saw a trainer nearby and asked why these animals just

  stood there and made no attempt to get away.  “Well,” trainer said, “when they are very young and much smaller we use the same size rope to tie them and, at that age, it’s enough to

  hold them.  As they grow up, they are conditioned to believe they cannot break away.  They believe the rope can still hold them, so they never try to break free.”  The man was amazed.
                                  
    These animals could at any time break free from their bonds but because they believed they couldn’t, they were stuck right where they were.  Like the elephants, how many of us go
 
  through life hanging onto a belief that we cannot do something, simply because we failed at it once before?  Failure is part of learning; we should never give up the struggle in life.

                </p>
    </main>

    <div style="background-color:#FFF;width:50%;padding:10px;margin:20px;margin-left:auto;margin-right:auto;">
    <div class="page_content">
    	Comment
    </div>	
        <div id="comment_input">
            <form name="form1">
        	    <span style="color:black;"><input type="text" name="name" placeholder="Name..."/></span><br><br>
                <textarea name="comments"  style="color:black;" placeholder="Leave Comments Here..." style="width:610px; height:100px;"></textarea><br><br>
                <a href="#" onClick="commentSubmit()" class="button">Submit</a><br>
            </form>
        </div>
        <div id="comment_logs">
    	    comments...
        </div>
    </div>

    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
              <center>  All Rights Reserved 2019 © WS101 </center>
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