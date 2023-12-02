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
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Sr No.</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sr=$key+1;                                    
                                    echo"
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[product_name]</td>
                                            <td>₹$value[product_price]<input type='hidden' class='iprice' 
                                            value='$value[product_price]'></td>
                                            <td>                                                    
                                                <form action='manage_cart.php' method='POST'>
                                                    <input class='text-center iquantity' name='Mod_Quantity'  onchange='this.form.submit();'  type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='product_name' value='$value[product_name]'>
                                                    <input type='submit' name='update_cart' value='update' class='btn btn-sm btn-outline-danger'></td>
                                                </form>
                                            
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
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
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total: </h4>
                    <h5 class="float-right" id="gtotal" ></h5>
                    <br>
                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {
                    ?>
                    <form action="purchase.php" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"required >
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        var gt=0;//grand total
        var iprice=document.getElementsByClassName('iprice');//Item price
        var iquantity=document.getElementsByClassName('iquantity');//individual quantity
        var itotal=document.getElementsByClassName('itotal');//individual total
        var gtotal=document.getElementById('gtotal');//grand total input feild
        function subTotal()
        {
            gt=0;//reset to 0
            for(i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);//updated with pp & pquantity
                gt=gt+(iprice[i].value)*(iquantity[i].value);//increments by iprice & iquantity
            }
            gtotal.innerText=gt;//updated with gt
        }

        subTotal();
    </script>
</body>
</html>