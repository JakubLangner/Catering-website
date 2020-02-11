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

                <div id="content">
                

                        <h3 class="p1">Kontakt</h3>
                        
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156388.35438325495!2d20.921111022413918!3d52.2330653213856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc669a869f01%3A0x72f0be2a88ead3fc!2sWarszawa!5e0!3m2!1spl!2spl!4v1573496799920!5m2!1spl!2spl" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <dl>
                            <dt></dt>Warszawa ul. Warszawska 17 03-284</dt>
                            <dd><span>Telefon:</span>  +48 456 789 456</dd>
                            <dd><span>Email:</span><a href="#">jedzenie@katering.pl</a></dd>

                        </dl>
                

                
          
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