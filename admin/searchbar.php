<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>search</title>
<!-- <link rel = "stylesheet" type="text/css" href="/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script defer src="javascript/script.js"></script>     
</head>
<style>
table, th, td {
	border: 1px solid black;
	width: 50%;
}
table {
  border-collapse: collapse;
}

th {
  height: 25px;
background-color: #d5b9a3 
}
td {
  text-align: left;
}
th, td {
  padding: 15px;
}

</style>
<body>



     <?php
    include 'config.php';
    if (isset($_POST['submit'])){
        
    $str = $_POST["search"];
    $query = "SELECT * FROM `men_items` WHERE `product_name` LIKE '%$str%'";     
       
    if($result = mysqli_query($conn, $query)) {

          if(mysqli_num_rows($result) == 0) {

            echo "<p>No results matches to your query.</p>";
            echo "</div>";

          } else {
            //echo "</div>";
            //echo "<ul class='profile-results'>";

            while($row = mysqli_fetch_assoc($result)) {
  
        ?>
        <br><br>
        <table>
            <tr>
                <th><em> Name</th>
  
            </tr>
            <tr>
                <td><h4><?php echo $row["product_name"] ?></h4><a href="men_details.html"><button class="view_product">View Product</button></a><br></td>
                </td></div>
                
            </tr>
        </table>
        <!-- //<a href="CVdetails.php?id=<?= $row['id'] ?>"> View Details </a> <br><br> -->
    <?php
    }

    }
}
    }
    ?>

</body>
</html>