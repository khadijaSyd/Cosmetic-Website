<?php
include 'header.php';
session_start();

require_once ('component.php');
require_once('CreateDb.php');

// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

?>

<!DOCTYPE html>
<html lang='eng'>
<head>
    <meta charset="'UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.A.T Cosmetics</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f051a17616.js" crossorigin="anonymous"></script>
</head>
<body>         
   <!-----------------------------Slider---------------------------------------->
    <div class="content">
        <div class="slides">
            <div class="images first">
                <img src="images/cs3.png" class="pht fade">
                <img src="images/cs2.png" class="pht fade">
                <img src="images/cs6.png" class="pht fade">
                <img src="images/cs4.png" class="pht fade">
            </div>
        <div onclick="side_slide(-1)" class="slide left">
            <span class="fas fa-angle-left"></span>
        </div>
        <div onclick="side_slide(1)" class="slide right">
            <span class="fas fa-angle-right"></span>
        </div>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span>
        </div>
    </div>
    <!-----------------------------Featured products----------------------------->
    <div class="small-cont">
        <h1 class="title">FEATURED PRODUCTS</h1>
            <div class="gallery">
                <div class="row">
                    <div class="col-4">
                        <img src="images/F1.png">
                        <h4>Swiss Beauty Lip Palette</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>322.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F2.jpeg">
                        <h4>Powder Play Mattefying Compact</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>599.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F3.png">
                        <h4>Mettle Liquid Lipstick</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>1199.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F4.png">
                        <h4>Gloss Boss 24HR Eyeliner - 01</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>499.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F5.png">
                        <h4>Gloss And Behold Jelly Highlighter</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>425.00</p>
                    </div>

                </div>
                <div id="gallerywrap" onclick="next_slide(1)" >
                    <span class="fas fa-angle-right"></span> 
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="images/F6.png">
                        <h4>Citrus Daily Moisturizer</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>499.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F7.png">
                        <h4>Hydrating Cameo Conceler</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>480.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F8.png">
                        <h4>Green Tea Face Mist</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>360.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F9.png">
                        <h4>Revolutin Stick Foundation</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>725.00</p>
                    </div>
                    <div class="col-4">
                        <img src="images/F10.png">
                        <h4>Color Icon Brow Pencil</h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>254.00</p>
                    </div>
                </div>

                
                
            </div>    
    </div>  
    <!-----------------------------Combo----------------------------->
    <div class="combocont" id="combo">
        <h1 class="combotitle">COMBO - KIT</h1>
                <div class="combogallery">
                        <div class="col-3">
                            <img src="images/combo1.png">
                            <h4>Party Ready kit</h4>
                            <p><b>2699.00</b></p>
                            <button class="button">Add</button>
                            
                        </div>
                        <div class="col-3">
                            <img src="images/combo2.png">
                            <h4>Festive Makeup kit</h4>
                            <p><b>2499.00</b></p>
                            <button class="button">Add</button>
                        </div>
                        <div class="col-3">
                            <img src="images/combo3.png">
                            <h4>Anniversary kit</h4>
                            <p><b>2799.00</b></p>
                            <button class="button">Add</button>
                        </div>
                        <div class="col-3">
                            <img src="images/combo4.png">
                            <h4>Office Ready kit</h4>
                            <p><b>2599.00</b></p>
                            <button class="button">Add</button>
                        </div>
                
                </div>     
    </div>
    <!-----------------------------THis Or THAt----------------------------->
    <div class="tot">
        <h1 class="tottitle">THIS OR THAT</h1>
        <div class="totgall">
            <div class="col-2">
                <img src="images/TOT1.png" >
            </div>
            <div class="col-2">
                <img src="images/TOT2.png" >
            </div>
        </div>
    </div>
    <!---------------------------NEWLY LAUNCHED------------------------------->
    <div class="newlaunch" id="newlaunch">
        <h1 class="newtitle">NEWLY LAUNCHED</h1>
        <div class="newgall">
            <div class="newslides">
                <img src="images/newlaunch1.png" class="newpht">
                <img src="images/newlaunch2.png" class="newpht">
            </div>
            <div onclick="new_slide(-1)" class="slider left">
                <span class="fas fa-angle-left"></span>
            </div>
            <div onclick="new_slide(1)" class="slider right">
                <span class="fas fa-angle-right"></span>
            </div>
        </div>
    </div>
    <!---------------------------TOP PICKS------------------------------->
    <div class="top">
        <h1 class="toptitle">TOP PICKS OF THE WEEK</h1>
        <div class="topgal">
            <div class="col-5">
                <img src="images/TP1.png" class="one">
            </div>
            <div class="col-5">
                <img src="images/TP4.png" class="two">
            </div>
            <div class="col-5">
                <img src="images/TP6.png" class="three">
            </div>
        </div>
    </div>
    <!---------------------------TRENDING------------------------------->
    <div class="trending" id="trending">
        <h1 class="trendingtitle">TRENDING</h1>
        <div class="trendinggal">
            <div class="trend left" onclick="trending_slide(-1)">
                <span class="fas fa-angle-left"></span>
            </div>
            <div class="trendingrow">
                <div class="col-6">
                    <img src="images/T1.png" style="width: 200px; height: 230px; padding-top: 60px; padding-left: 50px; margin-bottom: 35px;">
                    <p>Ronzille Professional PremiumMaeup Foundation Brush</p>
                    <h4>149.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T10.png" style="width: 250px; height: 230px;padding-left: 20px; padding-top: 50px; margin-bottom: 25px;">
                    <p>Faces Canada Ultime Pro Primerizer + Moisturizer</p>
                    <h4>520.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T7.png" style="width: 250px; height: 250px; padding-top: 15px; padding-left: 15px;">
                    <p>MyGlamm Lip & Cheek Rouge - Cheek Tint</p>
                    <h4>369.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T3.png" style="width: 230px; height: 230px; padding-left: 35px; padding-top: 50px; margin-bottom: 25px;">
                    <p>Maybille NewYork Color Sensational Ultimattes</p>
                    <h4>450.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T9.png" style="width: 250px; height: 250px; padding-top: 10px; padding-left: 25px;">
                    <p>Swiss Beauty Ultimate Eyeshadow Palette Kit</p>
                    <h4>175.00</h4>
                </div>
            </div>
            <div class="trend right" onclick="trending_slide(1)">
                <span class="fas fa-angle-right"></span>
            </div>
            <div class="trendingrow">
                <div class="col-6">
                    <img src="images/T11.png" style="width: 250px; height: 250px; padding-top: 30px;">
                    <p>Lakme Absolute Blur Perfect Makeup Primer (30g)</p>
                    <h4>825.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T4.png" style="width: 200px; height: 230px; padding-top: 45px; padding-left: 40px; margin-bottom: 25px;">
                    <p>SUGAR Cosmetics - Matte Attack - Transferproof Lipstick</p>
                    <h4>674.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T15.png" style="width: 250px; height: 250px; padding-top: 45px; padding-left: 40px;">
                    <p>SUGAR Cosmetics - Coffe Culture Lip Scrub</p>
                    <h4>299.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T6.png" style="width: 230px; height: 230px; padding-top: 45px; padding-left: 40px; margin-bottom: 25px; ">
                    <p>Treat Love Care Brightening Foundation - Face Makep</p>
                    <h4>674.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T8.png" style="width: 230px; height: 230px; padding-top: 45px; padding-left: 40px; margin-bottom: 25px;">
                    <p>Swiss Beauty Metallic Liquid Eyeshadow - 05 Rose Gold</p>
                    <h4>149.00</h4>
                </div>
            </div>
            <div class="trend right" onclick="trending_slide(1)">
                <span class="fas fa-angle-right"></span>
            </div>
            <div class="trendingrow">
                <div class="col-6">
                    <img src="images/T14.png" style="width: 250px; height: 250px; padding-top: 45px; padding-left: 40px; ">
                    <p>LA LA Love Liquid Lipstick</p>
                    <h4>399.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T2.png" style="width: 230px; height: 230px; padding-top: 45px; padding-left: 30px; margin-bottom: 25px;">
                    <p>AYA TRue Matte Liquid Ultra Smooth Matte Lip Cream</p>
                    <h4>99.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T12.png" style="width: 230px; height: 250px;padding-top: 45px; padding-left: 35px">
                    <p>Lakme Peach Milk Ultra Light Gel 50g</p>
                    <h4>120.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T13.png" style="width: 250px; height: 250px; padding-top: 45px;">
                    <p>Faces Canada Perfecting Pressed Powder - Beige 03</p>
                    <h4>617.00</h4>
                </div>
                <div class="col-6">
                    <img src="images/T5.png" style="width: 230px; height: 230px; padding-top: 45px; padding-left: 35px; margin-bottom: 25px;">
                    <p>MARS Seal The Deal Spotless Liquid Concealer - Natural</p>
                    <h4>183.00</h4>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------ONLY------------------------------->
    <div class="only">
        <h1 class="onlytitle">POWDER LIPSTICK</h1>
        <img src="images/only.png">
    </div>
    <!---------------------------TUTORIAL------------------------------->
    <div class="video" id="video">
        <h1 class="videotitle">TUTORIAL</h1>
        <div class="videogal">
            <video src="images/video1.mp4" type="video/mp4" id="v1" controls></video>    
            <video src="images/video2.mp4" type="video/mp4" id="v2" controls></video></div>
    </div>    
    <!---------------------------ACCESSORIES------------------------------>
    <div class="accessories" id="accessories">
        <h1 class="atitle">ACCESSORIES</h1>
        <div class="agallery">
            <div class="col-7">
                <img src="images/blender.png">
                <h4>Chabao Beauty<br>Blender Sponge</h4>
                <p><b>90.00</b></p>
            </div>
            <div class="col-7">
                <img src="images/tweezer.png">
                <h4>Vega Flat Tweezer <br>TW</h4>
                <p><b>80.00</b></p>
            </div>
            <div class="col-7">
                <img src="images/blender2.png">
                <h4>Bronson Pink <br>Beauty Blender</h4>
                <p><b>150.00</b></p>
            </div>
            <div class="col-7">
                <img src="images/puff.png">
                <h4>Proarte Large <br>Beauty Puff</h4>
                <p><b>160.00</b></p>
            </div>
            <div class="col-7">
                <img src="images/eyelashcurler.png">
                <h4>GUBB Eyelash  Curler -<br> Rose Gold</h4>
                <p><b>125.00</b></p>
            </div>
            <div class="col-7">
                <img src="images/Brushesset.png">
                <h4>ME-ON Mermaid Shape Beauty Brushes </h4>
                <p><b>1250.00</b></p>
            </div>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>

    <!-----------------------------Slider---------------------------------------->
    <script>
        let slideIndex = 0; //curent slide
        showSlides();//invoked to start with page loads
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("pht");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {   //iterates through all slides
            slides[i].style.display = "none";  
          }
          slideIndex++;  //incremented by one
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {  //removes dot indicator & highlights the currently active slide
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";//current slide  
          dots[slideIndex-1].className += " active";//current slide's active dot
          setTimeout(showSlides, 3000); // slide transition after setTime Interval
        }
    </script>
    <script>
            
            var indexValue = 1;
            showImg(indexValue);
            function btn_slide(e){showImg(indexValue = e);}
            function side_slide(e){showImg(indexValue += e);}
            function showImg(e){
                var i;
                const img = document.querySelectorAll('.pht');
                const sliders = document.querySelectorAll('.btn-slider span');
                if(e > img.length){indexValue = 1}
                if(e < 1){indexValue = img.length}
                for(i=0; i < img.length; i++){
                    img[i].style.display = "none";
                }
                img[indexValue-1].style.display = "block";
            }    
    </script>
      
    <!-------------------------Featured product slider----------------------------->
    <script>
            var IV = 1;
            sImg(IV);//shows current slide and hides others
            function next_slide(e){sImg(IV += e);}//++ IV variable
            function sImg(e){
                var i;
                const img = document.querySelectorAll('.row');
                if(e > img.length){IV = 1}
                if(e < 1){IV = img.length}
                for(i=0; i < img.length; i++){
                    img[i].style.display = "none";
                }
                img[IV-1].style.display = "inline-flex";
                document.documentElement.style.scrollBehavior = "smooth"
            }     
    </script>

    <!-----------------------------newly launched slider----------------------------->
    <script>
        var indexvalue = 1;
        showimg(indexvalue);
        function new_slide(e){showimg(indexvalue += e);}
        function showimg(e){
            var i;
            const img = document.querySelectorAll('.newpht');
            if(e > img.length){indexvalue = 1}
            if(e < 1){indexvalue = img.length}
            for(i=0; i < img.length; i++){
                img[i].style.display = "none";
            }
            img[indexvalue-1].style.display = "block";
        }
        
    </script>

    <!-----------------------------TRENDING slider----------------------------->
    <script>
         var iv = 1;
            SHOWImg(iv);
            function trending_slide(e){SHOWImg(iv += e);}
            function SHOWImg(e){
                var i;
                const img = document.querySelectorAll('.trendingrow');
                if(e > img.length){iv = 1}
                if(e < 1){iv = img.length}
                for(i=0; i < img.length; i++){
                    img[i].style.display = "none";
                }
                img[iv-1].style.display = "inline-flex";
                document.documentElement.style.scrollBehavior = "smooth"
            } 
    </script>

</body>
</html>