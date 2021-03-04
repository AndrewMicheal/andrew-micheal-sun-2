<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "handle-add-product.php" method = "POST">
        <input type = "text" placeholder = "product name" name = "name">
        <br><br>
        <textarea rows="5" cols="35" placeholder = "product description" name = "desc"></textarea>
        <br><br>
        <input type = "text" placeholder = "product price" name = "price">
        <br><br>
        <input type = "submit" name = "submit" value = "submit"/>
    </form>
</body>
</html>