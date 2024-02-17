<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel="stylesheet" href="cpu.css">
    <title>Sign up</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a href="index.html" id="logo"><img width="150px" src="LogoNavBar.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse sticky-top" id="navbarNav">
            <div class="navbar-nav ml-auto" id="balra">
                <li class=""><a href="szamitogep.html">Számítógépek</a></li>
                <li class=""><a href="alkatresz.html">Alkatrészek</a></li>
                <li class=""><a href="#">DunkaCoin</a></li>
            </div>
            <ul class="navbar-nav ml ml-auto" id="kosar">
                <a href="#" id="bejelentkezes"><img width="30px" src="login.png" alt=""></a>
                <a href="#" id=""><img width="30px" src="cart-2655083_1920.png" alt=""></a>
            </ul>
        </div>
    </nav>
    <h1>Sign up</h1> 
<div class="signup">
   <form action="formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" id="inputs"> <br>
        <input type="password" name="pwd"placeholder="password" id="inputs"><br>
        <input type="text" name="email"placeholder="E-Mail" id="inputs"><br>
        <button id="signup1">Sign up</button>
   </form>
</div>
<br>
<br>
<br>
<br>
    <footer>
        <div>
            <div id="footerfelsovonal" class="footerclass1">
                <div>
                            <div class="footerlogo">
                                <img src="Logo.png" width="150px" style="margin-top: 20px;" style="margin-bottom: 5px;">
                            </div>
                        <p id="footerdunkashop">
                            
                        </p>
                        <div id="footerfelsovonal1"></div>
                        <div class="footer-container">
                            <a href="kapcsolat.html" class="footerahref">Kapcsolat</a> 
                            <a href="impresszum.html" class="footerahref">Impresszum</a> 
                            <a href="nyilatkozat.html" class="footerahref">Jogi nyilatkozat</a> 
                            <a href="adatvedelem.html" class="footerahref">Adatvédelem</a> 
                        </div>
                    <p style="text-align: center;" id="footerszoveg">
                        &copy; Dunka shop 2024 Ez a Weboldal csak tanulmányi célokból jött létre.
                    </p>
                </div>
            </div>
        </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>