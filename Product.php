<?php

session_start();
$_SESSION['name'] =$row['a_username'];
$_SESSION['email'] =$row['a_email'];

$PName =$_POST['PName'];
$PGender =$_POST['PGender'];
$PColor =$_POST['PColor'];
$Pimage =$_POST['Pimage'];
$Pdetails =$_POST['Pdetails'];



?>




<!DOCTYPE html>
<html lang="en">
  <head>

<link id="admineStyle" href="AdmineStyle.css" rel="stylesheet"/>

<meta charset="utf-8" />
    <title>

    </title>
    <body>
  </head>

  <!----------------------- Start Top NavBar Menu ----------------------------------->

<div id="main" class="topbar">
  <ul>
    <div class="dropdown">
    <li>    
      <a href=""><button class="dropbtn"><img src="img/user.png" width="25" height="25"><i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#"><img src="img/logout.png" width="25" height="25">Signout </a>
        <a href="#"><img src="img/editing.png" width="25" height="25">Edite</a>
      </div>
    </div>
      </a></li>
      <div class="dropdown">
    <li><a href=""><button  class="dropbtn"><img src="img/world.png"  width="25" height="25"><i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"><img src="img/united-kingdom.png" width="25" height="25">English(UK)</a>
      <a href="#"><img src="img/united-states.png" width="25" height="25">English(USA)</a>
    </div>
  </div> </a></li>
    
    <li><a><button class="openbtn" onclick="openNav()"><img src="img/menu.png" width="25" height="25"></button></a></li>
   
  </ul>
</div>


 
<!-------------------------End Top NavBar Menu-------------------------------------------->





  <!----------------------------Start Side NavBar Menu ------------------------------------>
 

  <div id="mySidebar" class="sidebar">
    <a href="" class="closebtn" onclick="closeNav()"><img src="img/close.png" width="25" height="25"></a>
    <img src="img/logo.png" class="logo"  width="75%" height="75" >
    <br>
    <hr class="horizontal light mt-0 mb-2">
    <img src="img/dashboard.png"  width="25" height="25" style="float:left"> 
   <a href="Admine.html" style="text-decoration: none ;"><i class="fa fa-fw fa-home" style="float: right;"></i> Dashboard</a>
    <br>
    <img src="img/shoe-shop.png" width="25px" height="25" style="float:left">  
    <a href="Avalibilty.html" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i>Avaliblity</a>
    <br>
    <img src="img/cv.png" width="25px" height="25" style="float:left">  
    <a href="Product.html" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Add Products</a>
    <br>
    <img src="img/add-user.png" width="25px" height="25" style="float:left">  
    <a href="" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Profile </a>
    <br>
      <h6>Account Mangment</h6>
    <img src="img/logout.png" width="25px" height="25" style="float:left">  
    <a href="" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Sing out</a>
    <br>
    <img src="img/logout.png" width="25px" height="25" style="float:left">  
    <a href="" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Editor</a>
    <br>
    <img src="img/logout.png" width="25px" height="25" style="float:left">  
    <a href="" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Sing out</a>
    <br>
    <img src="img/logout.png" width="25px" height="25" style="float:left"> 
    <a href="" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Sing out</a>
    <br>
    </div>


    

   <!----------------------------------------------- End Side NavBar Menu ----------------------------------------------------------->








<!---------------------------------------------- Start Butoton Script ------------------------------------------------------------------------>
   <script>

    function openNav() {
      document.getElementById("mySidebar").style.width = "180px";


    }
    
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
    
    }
    </script>
<!----------------------------------------------  End Butoton Script ------------------------------------------------------------------------>






<!---------------------------------------------------  Product Form  -------------------------------------------------------------------------------------->
<form action="info.php" method="post">

    <div class="Content">
    <div class="product-content">
    <div class="PContent">
            <label for="PName">Product-Name:</label>
            <input type="text" id="Product-Name" name="PName" minlength="5" required placeholder="Enter Name"
            oninvalid="this.setCustomValidity('Enter Product Name Here')" oninput="this.setCustomValidity('')"/>

             <br>

            <P>Product-Gender:</P>

            <input type="radio" id="Male" name="PGender" value="Male" required>
            <label for="Male">Male</label><br>
            <input type="radio" id="Female" name="PGender" value="Female" required>
            <label for="Female">Female</label><br>
            <input type="radio" id="Kids" name="PGender" value="Kids" required>
            <label for="Kids">Kids</label><br>


            <p>Product-Color:</p>
            <div class="search_categories" >
            <div class="select" >
            <select class="search_categories" id="color" name="PColor" required
            oninvalid="this.setCustomValidity('Pick Product Color Here')" oninput="this.setCustomValidity('')">
            <option value="0">Select Color:</option>
            <option value="1">Red</option>
            <option value="2">Blue</option>
            <option value="3">Green</option>
            <option value="4">Yellow</option>
            <option value="5">Pink</option>
            <option value="6">White</option>
            <option value="7">Black</option>
            <option value="8">Brown</option>
            <option value="9">Orenge</option>
            </select>
          </div>
        </div>
  <br>

  <label for="PColor">Product-image:</label>
  <input class="custom-file-input" type="file" id="Product-image" name="Pimage" onchange="loadFile(event)" accept="img/png,img/jpg" required 
  oninvalid="this.setCustomValidity('Please Upload image')" oninput="this.setCustomValidity('')">
  <img href= "Team_Project/img"id="display-img"></img>
  <br>
  <label for="Pdetails">Product-details:</label>

  <textarea id="Product-details" name="Pdetails" placeholder="Write Details Of Product"  rows="4" cols="50" minlength="10" required 
  oninvalid="this.setCustomValidity('Enter Product details Here')" oninput="this.setCustomValidity('')"></textarea>

  <input type="Submit" value="Submit">
    </div>
    </div>
    </div>
</form>


<!---------------------------------------------------  Product Form  -------------------------------------------------------------------------------------->






<!---------------------------------------------- Start FileUpload Script ------------------------------------------------------------------------>
<script>

/* should preview img to the web site img folder  */
var loadFile = function(event) {
    var output = document.getElementById('display-img');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };


</script>
<!----------------------------------------------  End FileUpload Script ------------------------------------------------------------------------>


  </body>
    </html>