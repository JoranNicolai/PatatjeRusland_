
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/styles.css">

</head>
<body>
<div class="containerfixed">
    <div class="images">
        <img src="../images/output-onlinepngtools(1).png" width="200px" height="120px">
    </div>
    <section class="responsive2">

        <div class="random">
            <a href="index.php"><div id="home" class="div"><p id="homep" class="p">Home</p></div></a>
        </div>
        <div class="random">
            <a href="../menu.php"><div class="div" id="about"><p class="p">Menu Kaart</p>
                </div></a>
        </div>

        <div class="random">
            <a href="reseveren.php"><div class="div" id="reseveren"><p class="p">Reseveren</p>
                </div></a>
        </div>
        <div class="random">
            <a href="overons.php"><div class="div" id="gallery"><p class="p">Over ons!</p>
                </div></a>
        </div>
        <div class="random">
            <a href="contact.php"><div class="div" id="resevation"><p class="p">Contact</p>
                </div></a>
            <div class="random">
                <a href="../login/login.php"> <div class="div2" onclick="document.getElementById('id01').style.display='block'" id="resevation"><p class="p">login</p>
                    </div></a>
            </div>




    </section><a target='_blank' href='https://www.javascriptfreecode.com/' style='font-size: 8pt; text-decoration: none'></a>
    <div class="displayflex">
        <div class="witcontainer2">
            <h1>Welcome to Patatje Oorlog</h1>
            <h8>Beste cafe van Nederland voor meer dan 10 jaar!</h8>
            <h8>reseveer, bestel of haal af op meer dan 200 locaties in Nederland!</h8>
            <h8></h8>
        <div class="logos">
            <a href="https://www.instagram.com/"> <div class="insta">
                    <div class="innerbox">
                    </div></a>
                </div>
            <div class="face">
                <a href="https://nl-nl.facebook.com/"><img src="../images/1499793235facebook-clipart-hd.png" width="150" height="150px">
                </div></a>
            <a href="https://twitter.com/?lang=nl"><div class="twitter">
                <img src="../images/tweet2.png" width="150" ">
            </div></a>
        </div>
            </div>
            </div>


    </div>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            margin-top: 200px;

        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;

        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */


        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }


    </style>
</head>
<body>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="../images/cafe2.jpeg" style="width:100%">
        <div class="text">Patatje Oorlog</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="../images/cafe3.jpeg" style="width:100%">
        <div class="text">Patatje Oorlog</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="../images/cafe1.jpeg" style="width:100%">
        <div class="text">Patatje Oorlog</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script src="JS/main.js"></script>

</body>
</html>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Cafetaria<span> Patatje Oorlog</span></h3>

            <p class="footer-links">
                <a href="index.php">Home</a> ·
                <a href="../menu.php">Menu kaart</a> ·
                <a href="reseveren.php">Reseveren</a> ·
                <a href="contact.php">Contact</a>
            </p>

            <p class="footer-company-name">@everyone voor de meme &copy; 2021</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Heyendaalseweg 98</span> ROC Nijmegen, Nederland</p>
            </div>

            <div>
                <i class="Joran Nicolai"></i>
                <p>+31621334928</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="jorannicolai@gmail.com">patatjerusland@gmail.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>Cafetaria Patatje Oorlog</span> al 10 jaar de best geteste!
            </p>

            <div class="footer-icons">

                <a href="#">
                    <p>Back to top!<i class="facebook"></i></p>
                </a>

            </div>

        </div>

    </footer>




    <script src="../JS/main.js"></script>

</body>
</html>