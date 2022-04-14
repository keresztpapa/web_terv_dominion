<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../css/design.css">
    <link rel="icon" href="../kepek/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="print" href="../css/print.css" />
  
    <script src="../javascript/script.js"></script>
    <title>Marvel X Netflix</title>

    <style>
        ul {
            list-style-type: none;
            text-align: center;
            overflow: hidden;
            background-color: rgb(136, 0, 21);
            width: auto;
            float: left;
            position: absolute;
            border-radius: 25px;
        }

        li a {
            display: block;
            color: #000000;
            padding-bottom: 16px;
            text-decoration: none;
            font-size: 17px;
        }

        li a:hover {
            background-color: rgb(82, 6, 6);
            color: black;
            border-radius:25px; 
        }

        li a.active {
            background-color: #aa040456;
            color: white;
        }
   </style>

</head>
<body>
   <img src="../kepek/logo.png" id="logo" style="width: 600px;" title="Logo">

    <?php include_once "php/template/menu.php"; ?>

    <!--Daredevil leírás-->
    <div class="oldalDiv" style="background-color: rgb(166, 42, 30);">
        <img src="../kepek/daredevil.jpg" style="width: 20%;" alt="Daredevil">
        <div class="infok">
            <h2>Daredevil (2015-2018)</h2>
            <p><strong>Alkotó:</strong> Drew Goddard</p>
            <p><strong>Szereplők:</strong> Charlie Cox, Deborah Ann Woll, Elden Henson, Vincent D'Onofrio, Rosario Dawson</p>
            <p><strong>Évadok száma:</strong> 3</p>
            <p><strong>Értékelés:</strong></p><br>
            <ol class="rating">
                <li class="rating-item" data-rate="1"></li>
                <li class="rating-item active" data-rate="2"></li>
                <li class="rating-item" data-rate="3"></li>
                <li class="rating-item" data-rate="4"></li>
                <li class="rating-item" data-rate="5"></li>
            </ol>            
        </div>
        <p class="leiras">A Marvel's Daredevil vagy röviden Daredevil 2015-ben indult amerikai webes televízió sorozat, melyet Drew Goddard alkotott meg a Netflixnek a <a href="https://hu.wikipedia.org/wiki/Marvel-moziuniverzum" target="_blank">Marvel-moziuniverzum</a> részeként. A sorozat a <em>Marvel Comics</em> képregények Daredevil, magyarul Fenegyerek nevű szereplőjének történetét dolgozza fel. Magyarországon a sorozat 2019. augusztus 31-én jelent meg magyar szinkronnal. Televízióban az M2 Petőfi TV mutatta be új szinkronnal 2021. január 5-én.</p>
    </div>

    <!--Videó-->
    <iframe width="1064" height="608" src="../videok/JessicaJones.mp4" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <!--Idézet-->
    <blockquote style="background-color: rgb(166, 42, 30);">
        "I'm Daredevil. Not even God can stop that now."
    </blockquote>

    <?php include_once "php/template/footer.php"; ?>

</body>
</html>