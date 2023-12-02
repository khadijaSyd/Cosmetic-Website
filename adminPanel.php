<?php
@include 'config.php';
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['admin_name'])){
    header("location: adminPanel.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
        }
        div.header{
           color: #f0f0f0;
           font-family: poppins;
           display: flex;
           flex-direction: row;
           align-items: center;
           justify-content: space-between;
           padding: 0 60px;
           background-color: #1c1c1e;
        }
        div.header button{
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    
    <div class="header">
        <h1> ADMIN PANEL -<?php echo $_SESSION['admin_name'] ?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <button type="submit" name="logout">LOG OUT</button>
        </form>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center table-dark table-striped-columns">
                    <thead>
                        <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Address</th>
                        <th scope="col">Pay Mode</th>
                        <th scope="col">Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM `order_manager`";
                            $user_result=mysqli_query($conn,$query);
                            while($user_fetch=mysqli_fetch_assoc($user_result))
                            {
                                echo"
                                    <tr>
                                        <td>$user_fetch[Order_Id]</th>
                                        <td>$user_fetch[Full_Name]</th>
                                        <td>$user_fetch[Phone_No]</th>
                                        <td>$user_fetch[Address]</th>
                                        <td>$user_fetch[Pay_Mode]</th>
                                        <td>
                                            <table class='table text-center table-dark table-striped-columns'>
                                                <thead>
                                                    <tr>
                                                        <th scope='col'>Product Name</th>
                                                        <th scope='col'>Price</th>
                                                        <th scope='col'>Quantity</th>                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                    ";
                                                $order_query="SELECT * FROM `cart` WHERE `Order_Id`= 
                                                '$user_fetch[Order_Id]'";
                                                $order_result=mysqli_query($conn, $order_query);
                                                while($order_fetch=mysqli_fetch_assoc($order_result))
                                                {
                                                    echo"
                                                        <tr>
                                                            <td>$order_fetch[product_name]</td>
                                                            <td>$order_fetch[product_price]</td>
                                                            <td>$order_fetch[Quantity]</td>
                                                        </tr>
                                                        ";
                                                }   
                                echo"
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                ";

                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        echo "<script>
            window.location.href='login.php';
            </script>";
    }
    ?>
</body>
</html>