<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Firma Cateringowa</title>
    <link rel="stylesheet" href="style/style.css">
    
    <script src="script.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body onload="zmienslajd()">
    
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



            <div id="main" style="height: 900px;">



                    <div id="slider">
                            
                        </div>

            <div id="content">
                <article>
                Nasza firma istnieje na rynku od ponad 20 lat <br>
                Posiadamy ponad 30 tysięcy zadowolonych klientów <br>
                Zapraszamy do zapoznania się z naszą bogatą ofertą <br>
                W razie pytań zapraszamt do kontaktu telefonicznego albo mailowego 
                </article>
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