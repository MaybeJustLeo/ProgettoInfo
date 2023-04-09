<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Boogie Restaurants - Registrati</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body style="background-color: #383838;">
        <div id = "MenuBanner">
            <ul id = "bannerTitle">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Ordina</a></li>
                <li style="background-image: none; margin-left: 17%; top: -1px; "><img src="./GraphicResources/LogoRistorante.png" width="90px" height="90px" style="border-radius: 15px;"></li>
                <li style="margin-left: 24%;">
                    <div class="dropdown">
                        <a href="">Login</a>
                        <div class="dropdown-content">
                            <form method="POST" action="scriptLoginCliente.php">
                                <span style="font-family: cursive; color: #f9f9f9; margin-left: -30px; padding-bottom: -20px;">Username:</span><br>
                                <input type="text" id="Username" name="Username" placeholder="Username" style="width: 105px; border-radius: 12px; background-color: #f7a638; opacity: 1;"><br>
                                <span style="font-family: cursive; color: #f9f9f9; margin-left: -30px; padding-bottom: -20px;">Password:</span><br>
                                <input type="text" id="Password" name="Password" placeholder="Password" style="width: 105px; border-radius: 12px; background-color: #f7a638; opacity: 1;"><br>
                                <a href="Registrazione.php" style="color: #f9f9f9; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-right: 20px; font-size: 9px;">Registrati</a>
                                <input type="submit" value="Login" style="background-color: black; color: #f9f9f9; border-width: 2px; border-radius: 4px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"/>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id = "LeftBanner"></div>
        <div id = "BannerRegistrazione">
            <h1>Registrazione</h1>            
        </div>
        <div id = "RightBanner"></div>
        <div id = "FormRegistrazione">
            <form id="formRegistrazione" name="formRegistrazione" method="POST" action="scriptRegistrazione.php">
                <input type="text" placeholder="Username" id="Username" name="Username" class="input">
                <input type="text" placeholder="Password" id="Password" name="Password" class="input">
                <input type="text" placeholder="Nome" id="Nome" name="Nome" class="input">
                <input type="text" placeholder="Cognome" id="Cognome" name="Cognome" class="input">
                <input type="submit">
            </form>
        </div>
    </body>
</html>