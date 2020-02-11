<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Firma Cateringowa</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <div id="container">

            <div id="header">   
                    <div id="logo">
                            <img src="images/Logo-Dieta-v1.png" style="float: left; padding-right: 20px;"> 
                            Jedz więcej Płać mniej
                            <div style="clear: both;"></div>
                    </div>
                </div>

        

                <div id="nav">
                        <ol>
                            <li><a href="index.php">Strona Główna</a></li>
                            <li><a href="przystawki.php">Przystawki</a></li>
                            <li><a href="dania.php">Dania Główne</a></li>
                            <li><a href="kontakt.php">Kontakt</a></li>
                            <li><a href="Log.php">Zaloguj się</a></li>
                            <li><a href="konto.php">Konto</a></li>
                        </ol>
                    </div>

            <div id="main">
            

                <div id="image">

                <img src="images/przystawki.jpg"> 

                </div>

                <div id="content">
                    <article>
                        Krakersy z białym twarogiem z dodatkiem pomidorka koktajlowego oraz oliwki i szczyporku
                    </article>
                </div>
                 
                <div id="button">
                <input type="submit" value="Dodaj nową pozycję">
                </div>
            </div>
        


        </div>

        <div id="footer">
        <?php
                if(isset($_SESSION['user']))
                
                echo "Zalogowany: ".$_SESSION['user'];
            ?>
        </div>


    </div>

</body>
</html>