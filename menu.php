<!DOCTYPE html>
<html>
<head>

</head>
<meta charset="UTF-8">
<title>Pizza</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="CSS/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
</style>
<body>
<div class="container3">
    <div class="containerdiv">
        <div class="images">
            <img src="images/output-onlinepngtools(1).png" width="200px" height="120px">
        </div>
        <div class="stage">
<div class="random">
    <a href="index.php"><div id="home" class="div"><p id="homep" class="p">Home</p></div></a>
</div>
<div class="random">
    <a href="menu.php"><div class="div" id="about"><p class="p">Menu Kaart</p>
    </div></a>
</div>

<div class="random">
    <a href="reseveren.php"><div class="div" id="contact"><p class="p">Reseveren</p>
    </div></a>
</div>
<div class="random">
    <a href="overons.php"><div class="div" id="gallery"><p class="p">Over ons!</p>
    </div></a>
</div>
        <div class="random">
            <a href="contact.php"><div class="div" id="resevation"><p class="p">Contact</p>
            </div></a>
        </div>
            <div class="random1">
                <div class="div2" onclick="document.getElementById('id01').style.display='block'" id="resevation"><p class="p">login</p>
                </div>
            </div>
    </div>
    </div>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/logo.png" alt="">
            </div>

            <div class="container1">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <button class="container100" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

<div id="home" class="w3-content">

    <div id="menu" class="w3-container w3-black w3-xxlarge w3-padding-64">

        <h1 class="w3-center w3-jumbo w3-padding-32">THE MENU</h1>
        <div class="w3-row w3-center w3-border w3-border-dark-grey">
            <a href="#pizza"><div class="w3-third w3-padding-large w3-red">patat</div></a>
            <a href="#pasta"><div class="w3-third w3-padding-large w3-hover-red">Snacks</div></a>
            <a href="#starters"><div class="w3-third w3-padding-large w3-hover-red">Bundels</div></a>
        </div>

        <div id="pizza" class="w3-container w3-white w3-padding-32">

            <h1><b>Patatje</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€2,50</span></h1>
            <p class="w3-text-grey">Een heerlijk patatje zonder saus!</p>

            <hr>
            <h1><b>Patatje met</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€2,90</span></h1>
            <p class="w3-text-grey">Een pataje met mayonaise!</p>

            <hr>
            <h1><b>Patatje sate</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€3,00</span></h1>
            <p class="w3-text-grey">Een pataje met Satesaus!</p>

            <hr>
            <h1><b>Patatje speciaal</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€3,00</span></h1>
            <p class="w3-text-grey">Een pataje met mayonaise, curry en uien!</p>

            <hr>
            <h1><b>Patatje oorlog</b> <span class="w3-tag w3-red w3-round">Hot!</span>
                <span class="w3-right w3-tag w3-dark-grey w3-round">€3,00</span></h1>
            <p class="w3-text-grey">Een F in de chat voor Oekraïne :(</p>
        </div>

        <h1 id="pasta" class="w3-center w3-jumbo w3-padding-32">Snacks</h1>
        <div class="w3-container w3-white w3-padding-32">

            <h1><b>Frikandel</b> <span class="w3-tag w3-grey w3-round">Popular</span>
                <span class="w3-right w3-tag w3-dark-grey w3-round">€1,70</span></h1>
            <p class="w3-text-grey">Een lekkere frikandel!</p>

            <hr>
            <h1><b>Frikandel speciaal</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€2,00</span></h1>
            <p class="w3-text-grey">Frikandel met curry,mayonaise en uitjes</p>

            <hr>
            <h1><b>Mexicano</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€2,10</span></h1>
            <p class="w3-text-grey">Een heerlijke mexicano</p>

        </div>

        <h1 id="starters" class="w3-center w3-jumbo w3-padding-32">Bundels</h1>
        <div class="w3-container w3-white w3-padding-32">

            <h1><b>Familie zak patat</b> <span class="w3-tag w3-grey w3-round">Seasonal</span>
                <span class="w3-right w3-tag w3-dark-grey w3-round">€5,50</span></h1>
            <p class="w3-text-grey">Small, medium en large</p>

            <hr>
            <h1><b>Waterfiets</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€8.10</span></h1>
            <p class="w3-text-grey">Frietje speciaal met 2 frikandellen</p>

            <hr>
            <h1><b>Rakketje</b> <span class="w3-right w3-tag w3-dark-grey w3-round">€0,00</span></h1>
            <p class="w3-text-grey">Bombadeer Oekraïne hier mee!</p>
        </div>
    </div>
</div>

</div>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Cafetaria<span> Patatje Oorlog</span></h3>

        <p class="footer-links">
            <a href="index.php">Home</a> ·
            <a href="menu.php">Menu kaart</a> ·
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
            <span>Cafetaria Patatje Rusland</span> al 10 jaar de best geteste!
        </p>

        <div class="footer-icons">

            <a href="#">
                <p>Back to top!<i class="facebook"></i></p>
            </a>

        </div>

    </div>

</footer>
<script src="JS/main.js"></script>
</body>
</html>
