<?php
@include 'config.php';
session_start();

if(mysqli_connect_error()){
    echo"<script>
            alert('Cannot Connect to database');
            window.location.href='mycart.php';
        </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))//checks if form was submitted through add to cart button
    {
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";//insert data usin assoc array
        if(mysqli_query($conn,$query1))
        {
            $Order_Id=mysqli_insert_id($conn);//returns a.i id
            $query2="INSERT INTO `cart`(`Order_Id`, `product_name`, `product_price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($conn,$query2);//prepares prepared stmt
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id, $product_name, $product_price, $quantity);//binds 
                foreach($_SESSION['cart'] as $key => $values)                                        //prepared stmt
                {
                    $product_name=$values['product_name'];//values r assigned to respective variable
                    $product_price=$values['product_price'];
                    $quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);//executes
                }
                unset($_SESSION['cart']);//resets the session variable
                echo"<script>
                    alert('Order Placed!');
                    window.location.href='mycart.php';
                </script>";
            }
            else
            {
                echo"<script>
                    alert('SQL prepare query Error');
                    window.location.href='mycart.php';
                </script>";
            }
        }
        else
        {
            echo"<script>
                    alert('SQL Error');
                    window.location.href='mycart.php';
                </script>";
        }
    }
}
?>