<?php
    session_start();
    if(isset($_SESSION["bravogoodlife"])) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/my_content.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/footer.css" media="screen">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap');
            body {
                font-family: 'Roboto Condensed', sans-serif;
            }
            /* Style the video: 100% width and height to cover the entire window */
            #myVideo {
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
            }
    </style>
    <title>Goodlife Health & Beauty</title>
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="./img/video.mp4" type="video/mp4">
    </video>
    <?php include("header.php"); ?>
    <div class="my_content">
        <div class="services_pics">
            <div>
                <span class="services_title_1">Health & Wellness</span>
                <img src="./img/health.jpg" alt="">
                <p class="service_text_1">
                    Lifestyle - Vitamine - Nutrition - Wellness - Body - Beauty - Weight Loss - Calories - Goals - Endurance - Active - Move - Health - Run - Fruits - Focus - Natural - Motivation - Exercice
                </p>
            </div>
            <div>
                <span class="services_title_2">Simply Beauty</span>
                <img src="./img/gorgeous.jpg" alt="">
                <p class="service_text_2">
                    Cute - Nice - Superb - Sublime - Charming - Lovely - Handsome - Gorgeous - Magnificient - Wonderful - Splendid - Admirable - Elegant - Pleasing - Stunning - Graceful - Pretty
                </p>
            </div>
            <div>
                <span class="services_title_3">Personal Care</span>
                <img src="./img/personal_care.jpg" alt="">
                <p class="service_text_3">
                    In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.
                </p>
            </div>
        </div>
        <div class="slogan">
            "Our Delivery Van 24/7 set to Go"
        </div>
        <div class="ambulance">
            <img src="./img/ambulance.jpg" alt="">
        </div>
        <div class="pregnancy">
            <div>
                <h1>Your guide to a <span class="purple_color">Healthy pregnancy</span></h1>
                <p>
                    To keep you and your baby healthy, it's important that you Don't smoke or drink alcohol, Eat healthy and get enough folic acid, Stay physically active.
                </p>
                <p>
                    Get more tips for a healthy pregnancy. If you just learned that you're pregnant, find out what to do nextThis link is external to health.gov. Check out these tips for staying healthy and safe during pregnancy.
                </p>
                <p>
                    From trying to conceive to the first trimester to labor, learn what to expect during your pregnancy.
                </p>
                <hr>
                <a href="">LEARN MORE</a>
            </div>
            <div class="">
                <img src="./img/pregnant.jpg" alt="">
            </div>
        </div>
        <div class="phone_pregnancy">
                <h2>Your guide to a <br> <span class="purple_color">Healthy pregnancy</span></h2>
                <img src="./img/pregnant.jpg" alt="">
                <p>
                    To keep you and your baby healthy, it's important that you Don't smoke or drink alcohol, Eat healthy and get enough folic acid, Stay physically active.
                </p>
                <p>
                    Get more tips for a healthy pregnancy. If you just learned that you're pregnant, find out what to do nextThis link is external to health.gov. Check out these tips for staying healthy and safe during pregnancy.
                </p>
                <hr>
                <a href="">LEARN MORE</a>
        </div>
        <!-- End -->
        <h1 class="center_text">Beauty</h1>
        <!-- Container element -->
        <div class="parallax_one"></div>
        <h1 class="center_text">Wigs</h1>
        <div class="omg_img">
            <div>
                <img src="./img/omg/wig_1.jpg" alt="">Straight
            </div>
            <div>
                <img src="./img/omg/wig_2.jpg" alt="">Body Wave
            </div>
            <div>
                <img src="./img/omg/wig_3.jpg" alt="">Deep Wave
            </div>
        </div>
        <div class="omg_img">
            <div>
                <img src="./img/omg/wig_5.jpg" alt="">Kinky Straight
            </div>
            <div>
                <img src="./img/omg/wig_6.jpg" alt="">Loose Wave
            </div>
            <div>
                <img src="./img/omg/wig_7.jpg" alt="">Water Wave
            </div>
        </div>
        <div class="omg_img">
            <div>
                <img src="./img/omg/3.jpg" alt="">Tootsie
            </div>
            <div>
                <img src="./img/omg/5.jpg" alt="">Domino
            </div>
            <div>
                <img src="./img/omg/6.jpg" alt="">Pumpkin
            </div>
            <div>
                <img src="./img/omg/4.jpg" alt="">Snickerdoodle
            </div>
        </div>
        <h1 class="center_text">Makeup</h1>
        <!-- Container element -->
        <div class="parallax_two"></div>
        <div class="slogan">
            "We now want East Africans to start living the Goodlife!"
        </div>
        <div class="omg_img">
            <div>
                <img src="./img/beauty/nails_1.jpg" alt="">
            </div>
            <div>
                <img src="./img/beauty/hair.jpg" alt="">
            </div>
            <div>
                <img src="./img/beauty/pro_1.jpg" alt="">
            </div>
        </div>
        <div class="slogan">
            When you look good you feel good
        </div>
        <!-- Container element -->
        <div class="parallax_three">
            <span class="para_three_text">Create your Style <br> With Us</span>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <?php
        } else {
            header('Location: ../');
        }
    ?>
</body>
</html> 
