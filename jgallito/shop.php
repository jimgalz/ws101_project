<?php 
include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <style>
    body{
        background-img: url("./assets/img/blog.jpg");
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
    }.btn{
        background-color: #f44336;
        color: white;
        padding: 1px 10px;
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
    <div style="margin-top:3px;">
        <center><img src="./assets/img/Gallito-design-china-name.png" style="width: 150px;height: auto;"></center>
  </div>
  <?php
    $query = mysqli_query($conn,"SELECT * FROM tbl_shop");
    while($row = mysqli_fetch_assoc($query)){
    ?>
    <table style="width: 100%;border-spacing: 15px;">
                  <div>
                       <tr>                   
                          <td>
                            <span><img src="<?php echo $row['img_url'];?>" alt="" style="height: 200px;width: 200px;"></span><br>
                            <label>Product Name: </label><span><?php echo $row['prod_name'];?></span><br>
                            <label>PRICE: P </label><span><?php echo $row['price'];?></span>
                            <div><button>BUY ME</button></div></td>
                          <!-- <th><img src="./assets/img/Yamaha_Sniper150mxi_L_1.jpg"  width="200" height="200"> <div>SNIPER 150 FI</div><div>PRICE: Php 98,000</div ><button class="btn"><div>BUY ME</div></button></th>
                          <th><img src="./assets/img/tfx-matte-red.jpg"  width="200" height="200" > <div>TFX 150</div><div>PRICE: Php 148,000</div><button class="btn"><div>BUY ME</div></button></th>
                          <th><img src="./assets/img/Yamaha_Mio_Aerox155_L_1.jpg"  width="200" height="200" > <div>YAMAHA MIO AEROX 155</div><div>PRICE: Php 102,900</div><button class="btn"><div>BUY ME</div></button></th>
                          <th><img src="./assets/img/rs-150-red-white.jpg"  width="200" height="200"> <div>RS 150</div><div>PRICE: Php 99,800</div><button class="btn"><div>BUY ME</div></button></th>
                          <th><img src="./assets/img/CRF-150L.jpg"  width="200" height="200" > <div>CRF 150L</div><div>PRICE: Php 110,000</div><button class="btn"><div>BUY ME</div></button></th> -->
                       </tr>
                  </div>
            </table>
            <!-- <table style="width: 100%;border-spacing: 15px;">
                    <div>
                         <tr style="align-content: center;border: 2px solid;top: 50%;left:50%;">                     
                            <th><img src="./assets/img/Honda_CBR150R_2016_L_1.jpg"  width="200" height="200" > <div>CBR 150R</div> <div>PRICE: Php 145,000</div><button class="btn"><div>BUY ME</div></button></th>
                            <th><img src="./assets/img/g01_c01_all_1.jpg"  width="200" height="200"> <div>GSX 150R</div><div>PRICE: Php 140,000</div><button class="btn"><div>BUY ME</div></button></th>
                            <th><img src="./assets/img/suzuki.jpg"  width="200" height="200" > <div>GSX 150S</div><div>PRICE: Php 110,000</div><button class="btn"><div>BUY ME</div></button></th>
                            <th><img src="./assets/img/yamaha-nmax-autos-maxabout.jpg"  width="200" height="200"> <div>NMAX 155</div><div>PRICE: Php 95,900</div><button class="btn"><div>BUY ME</div></button></th>
                            <th><img src="./assets/img/29965053_1637771083009998_7989628713845129216_n-370x370.jpg"  width="200" height="200"> <div>MIO 125i</div><div>PRICE: Php 71,800</div><button class="btn"><div>BUY ME</div></button></th>
                            <th><img src="./assets/img/click-150i-new-red.jpg"  width="200" height="200"> <div>HONDA CLICK 150i</div><div>PRICE: Php 96,000</div><button class="btn"><div>BUY ME</div></button></th>
                         </tr>
                    </div>
              </table> -->
              <?php
    
}
?>
    </main>
    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
               <center> All Rights Reserved 2019 © WS101</center>
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