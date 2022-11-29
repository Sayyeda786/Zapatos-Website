<?php
include 'config.php';
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
        <a href="adminlogout.php"><img src="img/logout.png" width="25" height="25">Signout </a>
        <a href="managment.html"><img src="img/editing.png" width="25" height="25">Edit</a>
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
    <a href="Orders.html" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i>Orders</a>
    <br>
    <img src="img/cv.png" width="25px" height="25" style="float:left">  
    <a href="" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Profile</a>
    <br>
   
      <h6>Account Mangment</h6>
    <img src="img/logout.png" width="25px" height="25" style="float:left">  
    <a href="adminlogout.php" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Sign out</a>
    <br>
    <img src="img/logout.png" width="25px" height="25" style="float:left">  
    <a href="managment.html" style="text-decoration: none ;"><i class="fa fa-fw fa-wrench" style="float: rigth;"></i> Edit product</a>
    <br>

    </div>




  <!---------------------------- End Side NavBar Menu ------------------------------------>




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




<!------------------------------------------------   Main Body   ------------------------------------------------------------------------->

<div id="avail-body" class="table-body">
    <h1>Products</h1>
    <h2>Mens</h2>
    <table id="mens-table">
        <tr>
            <th>Article No.</th>
            <th>Name</th>
            <th>Type</th>
            <th>Colour</th>
            <th>Cost</th>
            <th>Description</th>
        </tr>
<?php
$sql = "SELECT * from men_items";
$result = $conn -> query($sql);
  if ($result ->num_rows >0){
    while($row = $result-> fetch_assoc()){
      echo "<tr>
      <td>" .$row["article_no"] . " </td>
      <td>" .$row["product_name"] . " </td>
      <td>" .$row["type"] . " </td>
      <td>" .$row["colour"] . " </td>
      <td>" .$row["cost"] . "</td>
      <td>" .$row["description"] . " </td>
      <td>
            <a target='_blank' class='button edit-btn'> <input type='button' class='edit' onclick='openForm()' value='Edit'>
            <a target='_blank' class='button del-btn'> <input type='button' class='delete' onclick='confirmation()' value='Delete'></a>
      </td>
      </tr>";
          }
        }
        else{
          echo "No products found";
        }
        ?>
    </table>

    <h2>Womens</h2>
    <table id="womens-table">
        <tr>
            <th>Name</th>
            <th>Article No.</th>
            <th>Type</th>
            <th>Colour</th>
            <th>Cost</th>
            <th></th>
        </tr>

        <!--THESE ARE PLACEHOLDERS, PLEASE REMOVE FOR BACKEND IMPLEMENTATION-->
        <!-- Whoevers doing the backend for this, use these as just a template for when you make it actually reflect the database -->
        <tr>
            <td>Foo Bar</td>
            <td>0</td>
            <td>Womens</td>
            <td>Black</td>
            <td>69.00</td>
            <td>
              <a target="_blank" class="button edit-btn"> <input type="button" class="edit" onclick="openForm()" value="Edit">
                <a target="_blank" class="button del-btn"> <input type="button" class="delete" onclick="confirmation()" value="Delete"></a>
               </td>
        </tr>
        <tr>
            <td>Testy Test</td>
            <td>1</td>
            <td>Womens</td>
            <td>White</td>
            <td>42.00</td>
            <td>
              <a target="_blank" class="button edit-btn"> <input type="button" class="edit" onclick="openForm()" value="Edit">
                <a target="_blank" class="button del-btn"> <input type="button" class="delete" onclick="confirmation()" value="Delete"></a>
            </td>
        </tr>
        <!-- End of Examples -->
    </table>

    <h2>Kids</h2>
    <table id="kids-table">
        <tr>
            <th>Name</th>
            <th>Article No.</th>
            <th>Type</th>
            <th>Colour</th>
            <th>Cost</th>
            <th></th>
        </tr>

        <!--THESE ARE PLACEHOLDERS, PLEASE REMOVE FOR BACKEND IMPLEMENTATION-->
        <!-- Whoevers doing the backend for this, use these as just a template for when you make it actually reflect the database -->
        <tr>
            <td>Foo Bar</td>
            <td>0</td>
            <td>Kids</td>
            <td>Black</td>
            <td>69.00</td>
            <td>
                <a target="_blank" class="button edit-btn"> <input type="button" class="edit" onclick="openForm()" value="Edit">
                  <a target="_blank" class="button del-btn"> <input type="button" class="delete" onclick="confirmation()" value="Delete"></a>
                </td>
        </tr>
        <tr>
            <td>Testy Test</td>
            <td>1</td>
            <td>Kids</td>
            <td>White</td>
            <td>42.00</td>
            <td>
              <a target="_blank" class="button edit-btn"> <input type="button" class="edit" onclick="openForm()" value="Edit">
                <a target="_blank" class="button del-btn"> <input type="button" class="delete" onclick="confirmation()" value="Delete"></a>
            </td>
        </tr>
        <!-- End of Examples -->
    </table>
</div>

<!----------------------------------------------Popup for edit----------------------------------------------------------->
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h4>Edite</h4>

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

            <label for="PColor">Product-Color:</label>
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
  <label for="currency-field">Enter Amount:</label>
    
  <input type="currency" name="currency-field" id="currency-field"   data-type="currency" required="required" placeholder="£1,000,000.00">
    <br>
    <label for="artical-number">Artical Number:</label>
<input type="text" name="artical-number" id="artical-number" required placeholder="Artical-number" 
oninvalid="this.setCustomValidity('Please wrigth artical-number')" oninput="this.setCustomValidity('')">
<br>

  <label for="PColor">Product-image:</label>
  <input class="custom-file-input" type="file" id="Product-image" name="Pimage" onchange="loadFile(event)" accept="img/png,img/jpg" required 
  oninvalid="this.setCustomValidity('Please Upload image')" oninput="this.setCustomValidity('')">
  <img href= "Team_Project/img"id="display-img"></img>
  <br>

  <label for="Pdetails">Product-details:</label>

  <textarea id="Product-details" name="Pdetails" placeholder="Write Details Of Product"  rows="4" cols="50" minlength="10" required 
  oninvalid="this.setCustomValidity('Enter Product details Here')" oninput="this.setCustomValidity('')"></textarea>
  <p id="count_result">Total chracters : 0 </p>


    <button type="submit" class="btn">Update</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<!----------------------------------------------Popup for edit----------------------------------------------------------->

<!------------------------------------------------   Main Body   ------------------------------------------------------------------------->

<script>
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";

}
function confirmation(){

  var result = confirm("Are you sure you want to delete ?")
}


</script>
</body>
</html>