<?php
    include 'config.php';

    session_start();
    error_reporting(0);

    if(isset($_POST['addItem'])){

        $type = $_POST['type'];
        $size = $_POST['size'];
        $quantity= $_POST['quantity'];
        $cost = 99.00*$quantity;
        $temp_item= $_POST['article'];

        $sql = mysqli_query($conn,"INSERT INTO temp_cart(article,temp_size,temp_quantity,temp_cost,temp_type) VALUES ('$temp_item','$size','$quantity','$cost','$type')");
        
        if($sql){    
            echo "<script>alert('ITEM(S) ADDED SUCCESSFULLY TO THE CART')</script>";
            if($type == "male"){
            header('Location:men.php');}
            elseif($type == "female"){
            header('Location:women.php');}
            elseif($type == "kids"){
            header('Location:kids.php');}
        }

        else{
            echo "error in mysql query";
        }

        
    }

    if(isset($_POST['empty'])){
        $sql = mysqli_query($conn,"TRUNACTE temp_cart");
        }
    
?>