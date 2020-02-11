<?php
    session_start();

    if(isset($_POST['email']))
    {
        $wszystko_ok=true;

        $nick = $_POST['nick'];

        if((strlen($nick)<3) || (strlen($nick>20)))
        {
            $wszystko_ok = false;
            $_SESSION['e_nick'] = "Nick musi posiadać od 3 do 20 znaków";
        }

        $email = $_POST['email'];
        if((strlen($email)<5) || (strlen($email>20)))
        {
            $wszystko_ok = false;
            $_SESSION['email'] = "E-mail musi posiadać od 5 do 20 znaków";
        }

        $haslo1 = $_POST['haslo1'];
        if((strlen($haslo1)<4) || (strlen($haslo1>20)))
        {
            $wszystko_ok = false;
            $_SESSION['haslo1'] = "Hasło musi posiadać od 4 do 20 znaków";
        }

        require_once "connect.php";

        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

        if($polaczenie->connect_errno!=0)
        {
            echo"Error: ".$polaczenie->connect_errno;
        }
        else
        {
            if($wszystko_ok==true)
            {
                if($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo1', '$email')"))
                $_SESSION['udanarejestracja']=true;
                header('Location: Log.php');
            }
            $polaczenie->close();
        }
            
        
            
        


        
    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Firma Cateringowa</title>
    <link rel="stylesheet" href="style/style.css">

    <style> 
        .error{
            color:red;
        }
    </style>

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
                    <li><a href="index.php">Zaloguj się</a></li>
                    <li><a href="konto.php">Konto</a></li>
                </ol>

            </div>

            <div id="main">


            <form method="post">

            Imie: <br> <input type="text" name="nick"> <br>
            <?php
                if(isset($_SESSION['e_nick']))
                echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                unset($_SESSION['e_nick']);
            ?>
            E-mail: <br> <input type="text" name="email"> <br>
            <?php
                if(isset($_SESSION['email']))
                echo '<div class="error">'.$_SESSION['email'].'</div>';
                unset($_SESSION['email']);
            ?>
            Hasło: <br> <input type="password" name="haslo1"> <br>
            <?php
                if(isset($_SESSION['haslo1']))
                echo '<div class="error">'.$_SESSION['haslo1'].'</div>';
                unset($_SESSION['haslo1']);
            ?>
            <br>
            <label>
            <input type="checkbox" name="regulamin"> Akceptuję regulamin
            </label>
            <br>
            <input type="submit" value="Zarejestruj się">
            </form>
                        
                    
            

        </div>

        <div id="footer">
        &copy; Jakub Langner 2019
        </div>


    </div>

</body>
</html>