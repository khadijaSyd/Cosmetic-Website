<?php
    @include 'config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="nav.css">
    <script src="https://kit.fontawesome.com/f051a17616.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-black bg-black">
    <a class="navbar-brand" href="#">
        <img src="images/logo.jpeg" width="160" height="90" onclick="document.location='index.php'"
        class="d-inline-block align-top text-white">
        <span class="text-white" >Username: <?php echo $_SESSION['user_name'] ?></span>
        <a  href="logout.php" style="color: white; text-decoration: none;  margin-left: -1118px; font-size:18px;" onclick="return confirm('are your sure you want to logout?')" class="delete-btn" >LOGOUT</a>
        <div class="nav-icons">
            <li><a href="wishlist.php"><i class="fa-solid fa-heart"></i><br><span class="nav-text">Like</span></a></li>
            <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count ($_SESSION['cart']);
                    }
            ?>
            <li><a href="mycart.php"><i class="fa-solid fa-cart-shopping"><?php echo $count;?></i></i><br><span class="nav-text">Cart </span></a></li>
            <li><a href="login.php"><i class="fa fa-user"></i><br><span class="nav-text">Profile</span></a></li>    
        </div>       
    </a>
    </nav>
    <div class="container">
       <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY WISHLIST</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Sr No.</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Remove</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if(isset($_SESSION['wishlist']))
                            {
                                foreach($_SESSION['wishlist'] as $key => $value)
                                {
                                    $sr=$key+1;                                    
                                    echo"
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[product_name]</td>
                                            <td>$value[product_price]<input type='hidden' class='iprice' 
                                            value='$value[product_price]'></td>
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_like' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='product_name' value='$value[product_name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>