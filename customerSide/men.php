<!DOCTYPE html>
<html lang="en">

<head>
    <title>Men</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleSheet.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</head>

<body>

   
     <!---HTML code for the top bar--->
     <div class="header">
        <div class="logo">
            <img src="c-img\logo.png" width="200" height="100froo" alt="logo">
        </div>
        <div class="topNav">
            <ul>
            <?php
                    include 'config.php';
                    error_reporting(0);
                    session_start();
                    if (isset($_SESSION['c-username'])) :?>
                        <li><a href="c-dashboard.php"><i class="fa fa-user" style="font-size:22px"><?php echo $_SESSION['c-username']?></i></a></li>
                        <li><a href="loginSession.php"><i class="fas fa-sig-nout" style="font-size:22px">Signout</i></a></li>
                <?php 
                    else :?>
                        <li><label for="click" class="click-me">Sign in</label></li>
                        <li><a href="c-register.php">Register</a></li>
                <?php endif?>
                <li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a></li>
            </ul>
        </div>
    </div>
    
    <!----Sign in popup---->
    <div class="center">
        <input type="checkbox" id="click">
        <div class="content">
            <div class="text">
                SIGN IN TO ZAPATOS...
            </div>
            <label for="click" id="times">x</label>
            <form action='loginSession.php' method='post'>
                <label for="username"><i class="fas fa-envelope"></i> Email</label>
                <input type="text" placeholder="Email" id="user-email" name='u-email' required/>

                <label for="password"><i class="fas fa-key"></i> Password</label>
                <input type="password" placeholder="Password" id="user-password" name='u-pass' required/>
                <button name='login'>Sign In</button>
                <h4><a href='c-register.php'>Don't have an account?</a></h4>
            </form>
        </div>
    </div>

    <!---HTML code for the nav bar--->
    <div class="navbar">
        <ul>
            <li><a href="home.php" >Home</a></li>
            <li><a href="men.php" class="active">Men</a></li>
            <li><a href="women.php">Women</a></li>
            <li><a href="kids.php">Kids</a></li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact us</a></li>
        </ul>
    </div>

    <!---Banner--->
    <div class="banner">
        <div class="discount">
            <h1>ZAPATOS XMAS SALE</h1>
            <h2>20% OFF</h2>
        </div>
    </div>



    <!---NOT NEEDED, Just pushing the page down for an example until other pages are developed--->


    <main>
     <section class="product_list">
      <h1>Shoes 4 Men</h1>
        <div class="product_container">

        
      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-1";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h3>£<?php echo $row['cost']?></h3></div>
       <div class="article_no"><h3><?php echo $row['article_no']?></h3></div>
       <div><a href="mShoes_details.php?ID=m-1"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-2";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-2"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-3";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-3"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-4";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-4"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-5";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-5"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-6";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-6"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-7";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-7"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-8";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-8"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-9";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-9"><button class="view_product">View Product</button></a></div>
      </div>

      <div class="card">
        <?php
            include 'config.php';
            $temp_article_no = "m-10";
            $sql = "SELECT * FROM men_items where article_no='$temp_article_no'";
            $result= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);?>
       <div class="image"><img src="c-img/men-shoes/<?php echo $row['photo']?>"></div>
       <div class="title"><?php echo $row['product_name']?></div>
       <div class="price"><h4>£<?php echo $row['cost']?></h4></div>
       <div class="article_no"><h5><?php echo $row['article_no']?></h5></div>
       <div><a href="mShoes_details.php?ID=m-10"><button class="view_product">View Product</button></a></div>
      </div>
    </div>
    </div>

    </div>
    
    


    </div>

    </div>

</section>














    </main>

    <!---HTML code for the entire footer--->
    <footer>
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-columntop">
                    <h1>HAVE ANY QUESTIONS?</h1>
                    <p>Feel free to contact us as your feedback is valuable to us.</p>
                    <a href="contact-us.php"><button type="button">Contact Us</button></a>
                </div>
            </div>
            <div class="footer-main">
                <div class="footer-column">
                    <h3 class="heading">QUICK LINKS</h3>
                    <a href="home.php" class="footer-link">Home</a>
                    <a href="about-us.php" class="footer-link">About</a>
                    <a href="men.php" class="footer-link">Shop Men</a>
                    <a href="women.php" class="footer-link">Shop Women</a>
                    <a href="kids.php" class="footer-link">Shop Kids</a>
                    <a href="contact-us.php" class="footer-link">Contact</a>
                </div>
                <div class="footer-column">
                    <h3 class="heading">EXTRA LINKS</h3>
                    <a href="#" class="footer-link">Login</a>
                    <a href="c-register.php" class="footer-link">Register</a>
                    <a href="cart.php" class="footer-link">Basket</a>
                    <a href="c-dashboard.php" class="footer-link">Orders</a>
                </div>
                <div class="footer-column">
                    <h3 class="heading">CONTACT INFO</h3>
                    <!--<img src="phone.png" alt="Phone icon">-->
                    <a href="#" class="footer-link">
                        <span class="material-icons md-18">phone</span>+1 23 456-7890</a>
                    <a href="#" class="footer-link">
                        <span class="material-icons md-18">phone</span>+111-222-3333</a>
                    <a href="#" class="footer-link">
                        <span class="material-icons md-18">email</span>Zapatos@outlook.com</a>
                    <a href="#" class="footer-link">
                        <span class="material-icons md-18">room</span>Birmingham, England</a>
                </div>
                <div class="footer-column">
                    <h3 class="heading">FOLLOW US</h3>
                    <a href="https://www.facebook.com/" class="footer-link">Facebook
                        <a href="https://www.twitter.com/" class="footer-link">Twitter</a>
                        <a href="https://www.instagram.com/" class="footer-link">Instagram</a>
                        <a href="https://www.linkedin.com/" class="footer-link">LinkedIn</a>
                </div>
            </div>
    </footer>

</body>
</html>