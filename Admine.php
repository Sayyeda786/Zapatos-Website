<?php
include 'config.php';
 session_start();

if (!isset($_SESSION['name'])){
  header("location: admin-sign.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

<link id="admineStyle" href="AdmineStyle.css" rel="stylesheet"/>

<meta charset="utf-8" />
    <title>Admin Dashboard
    </title>
    <body>
    <h1> Welcome <?php echo $_SESSION['name'] ?></h1><br> 
  </head>

  <!----------------------- Start Top NavBar Menu ----------------------------------->

<div id="main" class="topbar">
  <ul>
    <div class="dropdown">
    <li>    
      <a href=""><button class="dropbtn"><img src="img/user.png" width="25" height="25"><i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="adminlogout.php"><img src="img/logout.png" width="25" height="25">Signout </a>
        <a href="managment.html"><img src="img/editing.png" width="25" height="25">Edit profile</a>
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
    <img src="img/logo.png" class="logo"  width="85%" height="85" >
    <br>
    <hr class="horizontal light mt-0 mb-2">
    <img src="img/dashboard.png"  width="25" height="25" style="float:left"> 
   <a href="Admine.php" style="text-decoration: none ;"><i class="fa fa-fw fa-home" style="float: right;"></i> Dashboard</a>
    <br>
    <img src="img/add-user.png" width="25px" height="25" style="float:left">  
    <a href="Avalibilty.php" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Availability </a>
    <br>
    <img src="img/shoe-shop.png" width="25px" height="25" style="float:left">  
    <a href="Product.php" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i>Add Products</a>
    <br>
    <img src="img/orders-icon.png" width="25px" height="25" style="float:left">  
    <a href="Orders.php" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i>Orders</a>
    <br>
    <img src="img/cv.png" width="25px" height="25" style="float:left">  
    <a href="managment.html" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Profile</a>
    <br>
   
      <h6>Account Mangment</h6>
    <img src="img/logout.png" width="25px" height="25" style="float:left">  
    <a href="adminlogout.php" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Sign out</a>
    <br>
    <img src="img/logout.png" width="25px" height="25" style="float:left">  
    <a href="managment.html" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Edit profile</a>
    <br>
    </div>


    

   <!----------------------------------------------- End Side NavBar Menu ----------------------------------------------------------->



<!---------------------------------------------------  Dashboard   -------------------------------------------------------------------------------------->

<div  class="row">
  <div class="column">

    <div class="card">
      <h2>Target customer goal for month</h2><br>
      <h1> 40 </h1>
    </div>
  </div>
  <div class="column">
    <div class="card">..</div>
  </div>
  <div class="column">
    <div class="card">
      <table>
        <thead>
          <h2> List of customers</h2>
          <tr>
            <th scope="col" >User id</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <?php
        $sql = "SELECT * from customers";
        $result = $conn -> query($sql);

        if ($result ->num_rows >0){
          while($row = $result-> fetch_assoc()){
            echo "<tr>
            <td>" . $row["c_id"] ."</td>
            <td>" . $row["c_email"] . "</td>
            </tr>";
          }
        }
        else{
          echo "No customers found";
        }
        ?>
        <tbody>
        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h2>Shoe trends currently:</h2>
      <p> Converse </p>
      <p> Vans </p>
      <p> Crocs </p>
      <p> Nikes </p>
    </div>
  </div>
  <div class="column">
    <div class="card">  <h4>Pie Chart For product interactivity</h4>
      <div class="chart"></div></div>
  </div>



  </div>

</div>







<!---------------------------------------------------  Dashboard   -------------------------------------------------------------------------------------->






<!----------------------------------------------  Butoton Script ------------------------------------------------------------------------>
   <script>

    function openNav() {
      document.getElementById("mySidebar").style.width = "180px";


    }
    
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
    
    }
    </script>
<!----------------------------------------------   Butoton Script ------------------------------------------------------------------------>



<!---------------------------------------------- Start FileUpload Script ------------------------------------------------------------------------>
<script>

  const  img_input = document.querySelector("#img_input");
  var uploaded_img = ""

  img_input.addEventListener("Change", function(){
      const reader = new FileReader();
      reader.addEventListener("load",()=>{
        uploaded_img = reader.result;
        document.querySelector("#display-img").style.backgroundImage = ` url(${uploaded_img})`;

      });
      reader.readAsDataURL(this.files[0])
  });
</script>
<!----------------------------------------------  End FileUpload Script ------------------------------------------------------------------------>


  </body>
    </html>