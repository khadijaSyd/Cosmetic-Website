<?php
@include 'config.php';
session_start();



if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['Add_To_Cart']))//checks if form was submitted through add to cart button
        { 
           if(isset($_SESSION['cart']))//verifys that the cart session variable is already set if yes anter the loop
            { 
                $myitems=array_column($_SESSION['cart' ], 'product_name');//extracts the added items
                if(in_array($_POST['product_name'], $myitems))//checks if product is already added
                {
                    echo"<script>
                        alert('Item Already Added');
                        window.location.href='Lips.php';
                    </script>";
                }
                else
                {
                    $count=count ($_SESSION['cart']);//gets the count of items in cart and assigns to $count
                    $_SESSION['cart' ][$count] = array('product_name' => $_POST['product_name'], 'product_price'=>$_POST['product_price' ], 'Quantity' =>1);//access the data
                    echo"<script>
                        alert('Item added');
                        window.location.href='Lips.php';
                    </script>";  
                }   
            }
            else  
            {    
                $_SESSION['cart' ][0] = array('product_name' => $_POST['product_name'], 'product_price'=>$_POST['product_price' ], 'Quantity' =>1); //create session variable if not already & sets the items 
                echo"<script>
                    alert('Item Added');
                    window.location.href='Lips.php';
                </script>";
            }
        }
        if(isset($_POST['Remove_Item']))
        {
            foreach($_SESSION['cart'] as $key => $value)//iterates to every cart item as a pair....key as value
            {
                if ($value['product_name']==$_POST['product_name'])//checks current item matches product submitted
                {
                    unset($_SESSION['cart' ][$key]); //removes item at specific key
                    $_SESSION['cart']=array_values ($_SESSION['cart']); //reindex the cart & ensures no gaps
                    echo"<script>
                        alert('Item Removed');
                        window.location.href='mycart.php';
                    </script>";
                }
            }
        }
        if(isset($_POST['Mod_Quantity']))
        {
            foreach($_SESSION['cart'] as $key => $value)
            {
                if($value['product_name']==$_POST['product_name'])
                {
                    $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];//Updates Quantity values in Cart
                    echo"<script>
                        window.location.href='mycart.php';
                    </script>";
                }
            }
        }
        if(isset($_POST['update_cart']))
        {
            $update_quantity = $_POST['Quantity'];
            $update_id = $_POST['Order_Id'];
            mysqli_query($conn, "UPDATE `cart` SET Quantity = '$update_quantity' WHERE Order_Id = '$update_id'") or die(mysqli_error($conn));
            echo "<script>
                    alert('Cart quantity updated successfully!');
                    window.location.href='mycart.php';
                </script>";
            
        }
        if(isset($_POST['like']))//checks if form was submitted through like button
        {
            if(isset($_SESSION['wishlist']))//verifys cart session variable is already set if yes anter the loop
            {
                $mylikes=array_column($_SESSION['wishlist'], 'product_name');//extracts the added items
                if(in_array($_POST['product_name'], $mylikes))//checks if product is already added
                {
                    echo"<script>
                        alert('Item Already Added in wishlist');
                        window.location.href='Lips.php';
                    </script>";
                }
                else
                {
                    $likescount=count($_SESSION['wishlist']);//gets items count wishlist and assigns to $likescount
                    $_SESSION['wishlist' ][$likescount] = array('product_name' => $_POST['product_name'], 'product_price'=>$_POST['product_price']);//access the data
                    $likequery="INSERT INTO `wishlist`(`product_name`, `product_price`) VALUES (?,?)";
                    $stmt=mysqli_prepare($conn,$likequery);//prepares query
                    if($stmt)
                    {
                        mysqli_stmt_bind_param($stmt,"si", $product_name, $product_price,);//binds query
                        foreach($_SESSION['wishlist'] as $key => $values)
                        {
                            $product_name=$values['product_name'];//values r assigned to respective variable
                            $product_price=$values['product_price'];
                            mysqli_stmt_execute($stmt);//execute stmt
                        }
                        echo"<script>
                            alert('Item added to wishlist!!');
                            window.location.href='Lips.php';
                        </script>";
                    }
                    else
                    {
                        echo"<script>
                            alert('SQL prepare query Error');
                            window.location.href='index.php';
                        </script>";
                    }  
                }   
            }
            else
            {    
                $_SESSION['wishlist'][0] = array('product_name' => $_POST['product_name'], 'product_price'=>$_POST['product_price']);    
                $likequery="INSERT INTO `wishlist`(`product_name`, `product_price`) VALUES ('product_name','product_price')";
                if(mysqli_query($conn,$likequery))
                {
                    echo"<script>
                        alert('Item added to wishlist!');
                            window.location.href='Lips.php';
                    </script>";
                }
            }
            
            
        }
        if(isset($_POST['Remove_like']))
        {
            foreach($_SESSION['wishlist'] as $key => $value)//iterates to every cart item as a pair....key as value
            {
                if ($value['product_name']==$_POST['product_name'])//checks current item matches product submitted
                {
                    unset($_SESSION['wishlist' ][$key]);//removes item at specific key
                    $_SESSION['wishlist']=array_values ($_SESSION['wishlist']);//reindex the cart & ensures no gaps
                    echo"<script>
                        alert('Item Removed');
                        window.location.href='wishlist.php';
                    </script>";
                }
            }
        }

    }
    