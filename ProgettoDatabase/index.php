<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Boogie Restaurants</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div id = "MenuBanner">
            <ul id = "bannerTitle">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Ordina</a></li>
                <li style="background-image: none; margin-left: 19%; top: -1px;"><img src="./GraphicResources/LogoRistorante.png" width="90px" height="90px" style="border-radius: 15px;"></li>
                <?php
                    if(isset($_SESSION['ruolo']))
                    {
                        echo "<li><a style = 'float: right'>Benvenuto " + $_SESSION['ruolo'] + "</a></li>";
                    }
                    else
                        echo "<script>alert('not stonks');</script>";
                ?>
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
                <span style = "display:none, position: relative, text-align: center, float: left" id ="add_logout"></span>
            </ul>
        </div>
    </body>
</html>