<?php
include 'header.php';

session_start();

require_once ('component.php');
require_once('CreateDb.php');

// create instance of Createdb class
$database = new CreateDb("Productdb", "facetb");

?>
<!DOCTYPE html>
<html lang='eng'>
<head>
    <meta charset="'UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lips - K.A.T Cosmetics</title>
    <link rel="stylesheet" href="category.css">
    <script src="https://kit.fontawesome.com/f051a17616.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="containerCategory">
        <?php
            $result = $database->getData();
            while($row = mysqli_fetch_assoc($result)){
                component($row['product_name'],$row['product_price'],$row['product_image']);
            }
        ?>
    </div>
    <?php include 'footer.php'; ?>    
</body>
</html>