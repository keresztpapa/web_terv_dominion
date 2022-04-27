<?php
    session_start();
    include "UserClass.php";
    include "backend/fajlBeKi.php";
    $fiokok=loadUsers();
    //$checker = true;


    if(isset($_POST['login_btn'])){
            
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        foreach($fiokok as $user){
            if($user->getUsername() === $username && password_verify($password, $user->getPassword())){
                $_SESSION['user'] = $user;
            }
        }
        echo '<script>alert("Sikeres login")</script>';

    }

    if(isset($_POST['logout'])){
        echo '<script>alert("Sikeres login")</script>';
        session_unset();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="icon" href="../kepek/icon.png">
    <script src="../javascript/script.js"></script>
    <title>Marvel X Netflix</title>

    <style>
        /*Lista/Menü*/
        ul{
            width: 75%;
            height: auto;

            border-radius: 25px;

            background-color: rgb(136, 0, 21);
            list-style-type: none;
            text-align: center;

            position: sticky;
            top: 0;
            left: 12.5%;

            padding: 1% 5%;

            overflow: auto;
        }

        /*Menü elemek*/
        li {
            height: auto;
            list-style-type: none; /*Felsorolás elemeket eltűnteti*/
            display: inline-block; /*Blokkba rakja az elemeket*/
            font-size: 25px;
            margin: 5px;

            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
        }

        /*Menü linkek*/
        li a{
            display: block;
            color: black;
            text-align: center;    
            text-decoration: none;
            width: auto;
            height: auto;
        }

        /*Menü linkjei*/
        li a:hover{
            background-color: rgb(97, 0, 16);
        }

        /*Nem meglátogatott linkek*/
        a:link{
            color: black;
        }

        /*Meglátogatott linkek*/
        a:visited{
            color: black;
        }
    </style>

</head>
<body>
    <img src="../kepek/logo.png" style="width: 600px;" title="Logo">
    <?php include_once "template/menu.php"; ?>
    <?php include_once "template/userState.php";?>
    
    <div id="login_box">
        <form method="post" autocomplete="off">
            <label for="nev">Username</label><br>
            <input type="text" id="nev" size="30" name="username" />
            <br><br>
            
            <label for="jelsz">Password</label><br>
            <input type="password" name="password" id="jelsz" size="30" required>

            <input type="submit" name="login_btn" value="Bejelentkezés">
            
            
            <input type="reset" value="Reset"><br>

            <?php
                if(array_key_exists("userame", $_SESSION) && $username != ""){
                    echo '<input type="submit" value="Logout" name="logout"><br>';
                }
            ?>

        </form>
    </div>

    <div id="cetli">A mezők kitöltése kötelező!</div>

    <br>

    <?php include_once "template/footer.php"; ?>
</body>
</html> 