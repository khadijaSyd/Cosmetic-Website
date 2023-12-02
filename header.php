<?php 
    session_start();
    /*if(!isset($_SESSION['user_name'])){
        header("location: index.php");
    }*/
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>K.A.T Cosmetics</title>
    <link rel='stylesheet' href='header.css'>
    <script src="https://kit.fontawesome.com/f051a17616.js" crossorigin="anonymous"></script>
</head>
    


<body>
    <header class='header'>
        <!-----------------------------Nav Bar--------------------------------------->
        <nav>
            <span><img src='images/logo.jpeg' class='logo'></span>
            <section class='nav-icons'>
                <div class='container'>
                    <form action='' method='post' class='search'>
                        <input type='text' placeholder='Search Products..' name='user_query'>
                        <button type='submit' name="search"><i class='search fa fa-search'></i></button>
                    </form>
                </div>
                <li><a href='wishlist.php'><i class='fa-solid fa-heart'></i><br><span class='nav-text'>Like</span></a></li>
                <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count ($_SESSION['cart']);
                    }
                ?>
                <li><a href='mycart.php'><i class='fa-solid fa-cart-shopping'> <?php echo $count;?></i></i><br><span class='nav-text'>Cart </span></a></li>
                <li><a href='login.php'><i class='fa fa-user' aria-hidden='true'></i><br><span class='nav-text'>Profile</span></a></li>
                
            </section>
                
            <!-----------------------------Category-------------------------------------->
            <section class='category'>
                <div class='dropit'>
                    <button class='dropbtn'><a href='index.php'>HOME</a></button>
                    <div class='dropdown1'>
                        <button class='dropbtn1'><a href='Lips.php'>LIP</a></button>
                        <div class='dropdown-content1'>
                            <a href='#'>Liquid Lipstick</a>
                            <a href='#'>Matte Lipstick</a>
                            <a href='#'>Nude Lipstick</a>
                            <a href='#'>Lip Gloss</a>
                            <a href='#'>Lip Tint</a>
                        </div>
                    </div>
                    <div class='dropdown2'>
                        <button class='dropbtn2'><a href='Eyes.php'>EYE</a></button>
                        <div class='dropdown-content2'>
                            <a href='#'>Eyeliner</a>
                            <a href='#'>Eyeshadow</a>
                            <a href='#'>Kajal</a>
                            <a href='#'>Mascara</a>
                            <a href='#'>Eyebrow Gel</a>

                        </div>
                    </div>
                    <div class='dropdown3'>
                        <button class='dropbtn3'><a href='Face.php'>FACE</a></button>
                        <div class='dropdown-content3'>
                            <a href='#'>Foundation</a>
                            <a href='#'>BB Cream</a>
                            <a href='#'>Concealer</a>
                            <a href='#'>Corrector</a>
                            <a href='#'>Primer</a>
                        </div>
                    </div>
                    <div class='dropdown4'>
                        <button class='dropbtn4'><a href='Skincare.php'>SKINCARE
                        </a></button>
                        <div class='dropdown-content4'>
                            <a href='#'>Moisturizer</a>
                            <a href='#'>Serum</a>
                            <a href='#'>Face Mist</a>
                            <a href='#'>Sheet Mask</a>
                            <a href='#'>Cleansers</a>
                            <a href='#'>Exfoliators</a>
                            <a href='#'>Sunscreens</a>
                      </div>
                    </div>
                    <div class='dropdown5'>
                        <button class='dropbtn5'><a href=Accessories.php>ACCESSORIES</a></button>
                        <div class='dropdown-content5'>
                        <a href='#'>Brushes</a>
                        <a href='#'>Facial Razor</a>
                        <a href='#'>Eyelash Curler</a>
                        <a href='#'>Blenders</a>
                        </div>
                    </div>    
                    <button class='dropbtn'>TRENDING</button>
                    <button class='dropbtn'>NEW LAUNCHES</button>
                    <button class='dropbtn'>COMBO & KIT</button>
                     <button class='dropbtn'>TUTORIAL</button>
                </div>
                <br>
                <div class='flex' style='color:white; margin-left: 52px;'>
                <p> Username : <span> <?php echo $_SESSION['user_name'] ?></span> </p>
                <a href="logout.php" onclick="return confirm('are your sure you want to logout?');" class="delete-btn" style= "color:white;text-decoration:none;">logout</a> 
                </div>
            </section>
               

        </nav>
    </header>
</body>
</html>