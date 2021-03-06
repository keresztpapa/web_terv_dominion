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
        ul {
            list-style-type: none;
            text-align: center;
            overflow: hidden;
            background-color: rgb(12, 150, 18);
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
            background-color: rgb(40, 150, 40);
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
    <img src="../kepek/logo.png" style="width: 600px;" title="Logo">
    <?php include_once "template/menu.php"; ?>
    <?php include_once "template/userState.php";?>
    <!--Iron Fist leírás-->
    <div class="oldalDiv" style="background-color: rgb(12, 150, 18);">
        <img src="../kepek/ironFist.jpg" style="width: 20%;" alt="Iron Fist">
        <div class="infok">
            <h2>Iron Fist (2017-2018)</h2>
            <p><strong>Alkotó:</strong> Scott Buck</p>
            <p><strong>Szereplők:</strong> Finn Jones, Jessica Henwick, Tom Pelphrey, Jessica Stroup, Sacha Dhawan</p>
            <p><strong>Évadok száma:</strong> 2</p>
            <p><strong>Értékelés:</strong></p>
            <ol class="rating">
                <li class="rating-item" data-rate="1"></li>
                <li class="rating-item active" data-rate="2"></li>
                <li class="rating-item" data-rate="3"></li>
                <li class="rating-item" data-rate="4"></li>
                <li class="rating-item" data-rate="5"></li>
            </ol>  
        </div>
        <p class="leiras">A Vasököl (eredeti cím: Iron Fist) 2017 és 2018 között vetített amerikai akció dráma sorozat, amelyet Scott Buck alkotott. A sorozat producere Evan Perazzo. A zeneszerzője az első évadban Trevor Morris, a második évadban Robert Lydecker. A sorozat a <em>Marvel Television</em>, az <em>ABC Stúdió</em> és a <em>Devilina Productions</em> megbízásából készült, forgalmazója a Netflix Streaming Services. Amerikában 2017. március 17-én mutatta be a Netflix. Magyarországon csak feliratosan elérhető.</p>
    </div>




    <!--Videó-->
    <iframe width="1064" height="608" src="https://www.youtube.com/embed/jAy6NJ_D5vU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!--Idézet-->
    <blockquote style="background-color: rgb(235, 213, 69);">
        "A man fights with his mouth when his fists are lacking."
    </blockquote>

    <?php include_once "template/footer.php"; ?>

</body>
</html>