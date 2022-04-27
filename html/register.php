<?php
    include "backend/fajlBeKi.php";
    include "UserClass.php";
    session_start();
    $fiokok=loadUsers();

    $hibak = [];
  
    if (isset($_POST["register"])) {
        if (!isset($_POST["username"]) || trim($_POST["username"]) === ""){
            $hibak[] = "A felhasználónév megadása kötelező!";
        }
    
        if (!isset($_POST["password"]) || trim($_POST["password"]) === "" || !isset($_POST["password2"]) || trim($_POST["password2"]) === ""){
            $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";
        }
    
        $felhasznalonev = $_POST["username"];
        $jelszo = $_POST["password"];
        $jelszo2 = $_POST["password2"];

        foreach ($fiokok as $fiok) {
            if ($fiok["username"] === $felhasznalonev){
                $hibak[] = "A felhasználónév már foglalt!";
            } 
        }
    
        if (strlen($jelszo) < 8) {
            $hibak[] = "A jelszónak legalább 8 karakter hosszúnak kell lennie!";
        } 
    
        if ($jelszo !== $jelszo2) {
            $hibak[] = "A jelszavak nem egyeznek!";
        } 
    
        if (count($hibak) === 0) {
            $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
            $fiokok[] = ["username" => $felhasznalonev, "password" => $jelszo];
            $user = new UserClass($felhasznalonev, $jelszo);
            saveUsers($fiokok);
            $siker = TRUE;
        } else {
            $siker = FALSE;
            print_r($hibak);
        }

        if ($siker === TRUE) {
            echo '<script>alert("Sikeres Regisztráció")</script>';
        }
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
        <form method="post">
            <label for="nev">Username</label><br>
            <input type="text" name="username" id="nev" size="30" <?php if (isset($_POST["username"])) echo "value='" . $_POST["username"] . "'" ?> ><br><br>
            
            <label for="pwd">Password</label><br>
            <input type="password" name="password" id="pwd" size="30"><br>
            
            <label for="pwdAgain">Password Again</label><br>
            <input type="password" name="password2" size="30" id="pwdAgain"><br>
            
            <input type="submit" value="Submit" name="register"><br>
            
            <input type="reset" value="Reset"><br>
        </form>
    </div>

    <?php

    ?>

    <div id="cetli">A mezők kitöltése kötelező!</div>

    <br>

    <?php include_once "template/footer.php"; ?>
</body>
</html> 

