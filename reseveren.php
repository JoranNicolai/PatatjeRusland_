<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styles.css">

</head>
<body>
<div class="containerfixed">
    <div class="images">
        <img src="images/output-onlinepngtools(1).png" width="200px" height="120px">
    </div>
    <section class="responsive2">

        <div class="random">
            <a href="index.php"><div id="home" class="div"><p id="homep" class="p">Home</p></div></a>
        </div>
        <div class="random">
            <a href="menu.php"><div class="div" id="about"><p class="p">Menu Kaart</p>
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

        </div>
        <div class="random">
            <div class="div2" onclick="document.getElementById('id01').style.display='block'" id="resevation"><p class="p">login</p>
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

                        <button class="container100"  type="submit">Login</button>
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
        </div>
        <?php


        if (isset($_POST['date'])) {
            include "res-lib.php";
//            $_RSV = new resevation();
            echo $_RSV->save($_POST['date'], $_POST['name'], $_POST['email'])
                ? "<div>OK</div>" : "<div>".$_RSV->error."</div>";
        }
        ?>
    </section><a target='_blank' href='https://www.javascriptfreecode.com/' style='font-size: 8pt; text-decoration: none'></a>
    <div class="hoofdcontainer2">
        <div class="displayflex1">
            <div class="witcontainer1">
                <h1>Reseveer hier!</h1>
                <div class="margintop">
                <form method="post" target="_self">
                    <input type="text" name="name" placeholder="Name" required/>
                    <input type="email" name="email" placeholder="Email" required/>
                    <input type="text" name="aantal" placeholder="Aantal" required/>
                    <input type="date" name="date" placeholder="Date" required/>
                    <button class="kleurbutton">Submit</button>
                </form>
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