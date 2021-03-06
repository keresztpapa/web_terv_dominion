<?php

    include "backend/fajlBeKi.php";
    include "backend/UserClass.php";
    session_start();

    if(!isset($_SESSION['user'])){
        header("Location: bejelentkezes.php");
    }

    if(isset($_GET['delete-btn'])){
        deleteUser("data/fiokok.txt",$_SESSION['user']);
        setcookie("user_nev", time() - 3600);
        session_destroy();
        session_unset();
        header("Location: bejelentkezes.php");
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

    
        <table id="profile-table">
            <tr>
                <th colspan="2" id="fejlec">Felhasználói adatok</th>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="../kepek/mosomedve.jpg" alt="Profilkép" height="200px" width="200px">
                    <form action="felhasznalo.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="profile-picture">
                        <input type="submit" name="upload-btn" value="Profilkép módosítása">
                    </form>
                </td>
            </tr>
            <tr>
                <th> Felhasználónév: </th>
                <td><?php echo $_SESSION['user']->getUsername(); ?></td>
            </tr>
            <tr>
                <th> Fiók törlés: </th>
                <form method="GET">
                    <td> <input type="submit" name="delete-btn" value="fiok torles"> </td>
                </form>
            </tr>
        </table>
    <?php include_once "template/footer.php"; ?>
</body>
</html> 
