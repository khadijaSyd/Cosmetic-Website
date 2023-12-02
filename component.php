<?php

function component($productname, $productprice, $productimg){
    
    $element = "
        <div class='col'>
            <form action='manage_cart.php' method='POST'>
                    <img src='$productimg'>
                    <h4>$productname</h4>
                    <p><b>₹$productprice</b></p>
                    <div class=buttonwrap>
                        <button class='liked' name='like'><i class='fa-solid fa-heart'></i></button>
                        <button class='button' name='Add_To_Cart'>Add</button>
                    </div>
                    <input type='hidden' name='product_name' value='$productname'>
                    <input type='hidden' name='product_price' value='$productprice'>       
            </form>
        </div>
                 
    ";
    echo $element;
}
?>