<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="icon" href="../kepek/icon.png">
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
    <!--Főkép-->
    <img id="fokep" src="../kepek/wallpaper.jpg" alt="főkép helye">

    <!--Weboldal leírás-->
    <main id="fooldalDiv">
        <article>
            <header>
                <h1 id="udvozles">Üdvözlünk a honlapunkon!</h1>
            
                <p id="foleiras">Az oldal célja, hogy minél több embernek bemutassa, a Netflix által sugárzott Marvel sorozatokat.</p>
            </header>
            <p class="leiras">A <strong>Marvel Netflix televíziós sorozatai</strong> egymáshoz kapcsolódó amerikai televíziós sorozatok, amelyeket a Netflix streaming szolgáltatás számára hoztak létre, a <em>Marvel Comics</em> kiadványaiban megjelenő karakterek alapján. A <em>Marvel Television</em> és az <em>ABC Studios</em> által készített alkotások a <a href="https://hu.wikipedia.org/wiki/Marvel-moziuniverzum" target="_blank">Marvel Moziverzumban</a> (MCU) játszódnak, és elismerik a franchise filmjeinek és más televíziós sorozatainak folytonosságát. A Marvel együttesen a <em>„Marvel Street-Level Heroes”</em> vagy <em>„Marvel Knights”</em> sorozatként hivatkozik a műsorcsoportra.</p>
        </article>
    </main>

    <p class="jellemzo">
        <strong>Fő karakterek jellemzőik:</strong>
    </p>

    <table style="overflow-x:auto;">
        <tr>
            <th></th>
            <th id="dd">Daredevil</th>
            <th id="jj">Jessica Jones</th>
            <th id="lc">Luke Cage</th>
            <th id="if">Iron Fist</th>
            <th id="p">Punisher</th>
        </tr>
        <tr>
            <td class="sorkezdo">Személyazonosság:</td>
            <td headers="dd">Matt Murdock</td>
            <td headers="jj">Jessica Jones</td>
            <td headers="lc">Luke Cage</td>
            <td headers="if">Danny Rand</td>
            <td headers="p">Frank Castle</td>
        </tr>
        <tr>
            <td class="sorkezdo">Foglalkozás:</td>
            <td headers="dd">Ügyvéd</td>
            <td headers="jj">Detektív</td>
            <td headers="lc">Bűnüldőző</td>
            <td headers="if">Harcművész</td>
            <td headers="p">Veterán</td>
        </tr>
        <tr>
            <td class="sorkezdo">Képesség:</td>
            <td headers="dd">Ember feletti érzékek</td>
            <td headers="jj">Szuperhumán erő</td>
            <td headers="lc">Szuperhumán erő<br>Sebezhetetlenség</td>
            <td headers="if">Vasököl misztikus ereje</td>
            <td headers="p">Katonai tapasztalat<br>Fegyver ismeret</td>
        </tr>
        <tr>
            <td class="sorkezdo">Gyengeség:</td>
            <td headers="dd">Vakság</td>
            <td headers="jj">PTSD</td>
            <td headers="lc">Érzelmi problémák<br>Belülről sebezhető</td>
            <td headers="if">Identitás problémák</td>
            <td headers="p">Gyilkolási szándék<br>Lőszer hiány</td>
        </tr>
        <tr>
            <td class="sorkezdo">Defenders tagja:</td>
            <td headers="dd jj lc if" colspan="4">Igen</td>
            <td headers="p">Nem</td>
        </tr>
    </table>

    <?php include_once "template/footer.php"; ?>

</body>
</html>
