<?php
    include_once "UserClass.php";
    session_start();

    $file = fopen("../data/hipertitkosformatum.txt", "rw");
    $adatok = [];

    if (!$file) {
        die("Typo");
    }

    while (($sor = fgets($file)) !== false) {
        $adat = unserialize($sor);
        $adatok[] = $adat;
    }

    fclose($file);


    if (isset($_POST["Submit"])) {
        $felhasznalonev = $_POST["username"];
        $jelszo = $_POST["password"];

        foreach ($felhasznalok as $felhasznalo) {
            if ($felhasznalo->getFelhasznalonev() === $felhasznalonev && password_verify($jelszo, $felhasznalo->getJelszo())) {
                $_SESSION["user"] = $felhasznalo;
            }
        }

    }

    //Regisztracio

    $hibak = [];
    $fiokok = loadUsers("../data/hipertitkosformatum.txt");

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
        if ($fiok["usernameReg"] === $felhasznalonev)
            $hibak[] = "A felhasználónév már foglalt!";
        }

        if (strlen($jelszo) < 8)
            $hibak[] = "A jelszónak legalább 8 karakter hosszúnak kell lennie!";

        if ($jelszo !== $jelszo2)
            $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";

        if (count($hibak) === 0) {
            $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
            $fiokok[] = ["usernameReg" => $felhasznalonev, "passwordReg" => $jelszo];
            saveUsers("users.txt", $fiokok);
            $siker = TRUE;
        } else {
            $siker = FALSE;
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

    <script> 
        if (sessionStorage.getItem('status') != null){
            //redirect to page
            alert("Is Login : True");
        }else{
            //show validation message
            alert("Is Login : False");
        } 
    </script>


    <img src="../kepek/logo.png" style="width: 600px;" title="Logo">
    <?php include_once "template/menu.php"; ?>

    <div id="login_box">
        <form method="post">
            <label for="username">Username</label><br>
            <input type="text" id="username" size="30"><br><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" size="30"><br>
            <input type="submit" value="Submit"><br>
            <input type="reset" value="Reset"><br>

            <label id="hardmode">Hard-mode</label><br>
            <button class="button" onclick="crack()">Click me</button>
        </form>
    </div>

    <div id="cetli">A mezők kitöltése kötelező!</div>

    <br>

    <?php include_once "template/footer.php"; ?>
</body>
</html> 