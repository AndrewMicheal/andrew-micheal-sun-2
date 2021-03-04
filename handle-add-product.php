<?php
    require_once('prices_info.php');
    if (isset($_POST['submit'])) {
       $erros = [];
       $productName = $_POST['name'];
       $productDesc = $_POST['desc'];
       $productPrice = $_POST['price'];
    
       if (empty($productName)) {
           array_push($erros , "Name is required");
       } elseif (strlen($productName) < 5 && strlen($productName) > 255) {
           array_push($erros , "min charater 5 and max character 255");
       } elseif (!is_string($productName)) {
           array_push($erros , "Product name must be string");
       }

       if(!is_string($productDesc)) {
             array_push($erros , "Product name must be string");
       }

       if(empty($productPrice)) {
            array_push($erros , "product price is required");
       } elseif (!is_numeric($productPrice)) {
            array_push($erros , "product price must be number");
       }

       if (count($erros) > 0) {
            for ($i = 0; $i < count($erros); $i++) {
                echo $erros[$i]."<br>";   
            }
       } else {
           if (empty($productDesc)) {
               echo "Name : $productName <br> Price : $productPrice<br>";
               priceAfterDiscount($productPrice);
               echo "After Discount : ".getPriceWithDiscount();
           } else {
                echo "Name : $productName <br> Desc : $productDesc <br> Price : $productPrice<br>";
                priceAfterDiscount($productPrice);
                echo "After Discount : ".getPriceWithDiscount();
           }
       }
    } else {
        // redirect home page
        header("Location: http://localhost/A2/3.php");
    }
?>