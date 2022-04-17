<?php

 
$fiokok = [
    ["usernameReg" => "admin", "jepasswordReglszo" => "admin"],
    ["usernameReg" => "guest", "passwordReg" => "guest"],
    ["usernameReg" => "TestUser", "passwordReg" => "test"]
  ];
  
  
  function loadUsers($path) {
    $users = [];
  
    $file = fopen($path, "r");
    if ($file === FALSE)
        die("Nem sikerült megnyitni a fajlt!");
  
    while (($line = fgets($file)) !== FALSE) {
        $user = unserialize($line);
        $users[] = $user;
    }
  
    fclose($file);
    return $users;
  }
  
  function saveUser($path, $felhasznalonev, $jelszo) {
    $file = fopen($path, "a");
    if ($file === FALSE) die("Nem sikerült megnyitni a fajlt!");
  
    fwrite($file, $felhasznalonev . "\n");
    fwrite($file, $jelszo . "\n");
  
    fclose($file);
  }
  
  session_start();
  $hibak = [];
  
  $text = fopen("data/hipertitkosformatum.txt", "r") or die("Unable to open file!");
  
  //$fiokok = fread($text,filesize("data/hipertitkosformatum.txt"));
  
  
  if (isset($_POST["SubmitReg"])) {
    if (!isset($_POST["usernameReg"]) || trim($_POST["usernameReg"]) === ""){
        $hibak[] = "A felhasználónév megadása kötelező!";
    }
  
    if (!isset($_POST["passwordReg"]) || trim($_POST["passwordReg"]) === "" || !isset($_POST["passwordAgain"]) || trim($_POST["passwordAgain"]) === ""){
        $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";
    }
  
    $felhasznalonev = $_POST["usernameReg"];
    $jelszo = $_POST["passwordReg"];
    $jelszo2 = $_POST["passwordAgain"];
  
  
    foreach ($fiokok as $fiok) {
      if ($fiok["usernameReg"] === $felhasznalonev) $hibak[] = "A felhasználónév már foglalt!";
    }
  
    if (strlen($jelszo) < 8) $hibak[] = "A jelszónak legalább 8 karakter hosszúnak kell lennie!";
  
    if ($jelszo !== $jelszo2) $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";
  
    if (count($hibak) === 0) {
        $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
        $fiokok[] = ["usernameReg" => $felhasznalonev, "passwordReg" => $jelszo];
  
        saveUser("data/hipertitkosformatum.txt", $felhasznalonev, $jelszo);
  
        $siker = TRUE;
    } else {
        $siker = FALSE;
        print_r($hibak);
    }
  }
  
  
  fclose($text);
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

    <div id="login_box">
        <form method="post">
            <label for="username">Username</label><br>
            <input type="text" name="usernameReg" size="30"><br><br>
            
            <label for="password">Password</label><br>
            <input type="password" name="passwordReg" size="30"><br>
            
            <label for="passwordAgain">Password Again</label><br>
            <input type="password" name="passwordAgain" size="30"><br>
            
            <input type="submit" value="Submit" name="register"><br>
            
            <input type="reset" value="Reset"><br>
        </form>
    </div>

    <?php
        if (isset($siker) && $siker === TRUE) {
            alert("Sikeres regisztráció!");
        }
    ?>

    <div id="cetli">A mezők kitöltése kötelező!</div>

    <br>

    <?php include_once "template/footer.php"; ?>
</body>
</html> 

