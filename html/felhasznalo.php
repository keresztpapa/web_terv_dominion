<?php

    include "backend/UserClass.php";
    include "backend/backend_template.php";
    include "backend/fajlBeKi.php";
    
    if(!isset($_SESSION["status"])){
        header("Location:: bejelentkezes.php");
    }

    define("DEF_PIC", "/kepek/mosomedve.jpg");
    $profilkep = DEF_PIC;

    $path = "kepek/" . $_SESSION["user"]->getFelhasznalonev();
    $extensions = ["jpg","png"];
    foreach ($extensions as $ex){
        if(file_exists("$path.$ex")){
            $profilkep = "$utvonal.$kit";
        }
    }

    $err = [];



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
    <?php
        if (count($hibak) > 0) {
            echo "<div class='errors'>";
            foreach ($hibak as $hiba) {
                echo "<p>" . $hiba . "</p>";
            }
            echo "</div>";
        }
        $user = $_SESSION["user"];
    ?>

    
        <table id="profile-table">
            <tr>
                <th colspan="2">Felhasználói adatok</th>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="<?php echo $profilkep; ?>" alt="Profilkép" height="200">
                    <form action="felhasznalo.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="profile-picture">
                        <input type="submit" name="upload-btn" value="Profilkép módosítása">
                    </form>
                </td>
            </tr>
            <tr>
                <th>Felhasználónév</th>
                <td><?php echo $user->getFelhasznalonev(); ?></td>
            </tr>
            <tr>
                <th>E-mail cím</th>
                <td><?php echo $user->getEmail(); ?></td>
            </tr>
            <tr>
                <th>Születési év</th>
                <td><?php echo $user->getSzuletesiEv(); ?></td>
            </tr>
            <tr>
                <th>Nem</th>
                <td><?php echo $user->getNem(); ?></td>
            </tr>
        </table>


    <div id="cetli">A mezők kitöltése kötelező!</div>

    <br>

    <?php include_once "template/footer.php"; ?>
</body>
</html> 
