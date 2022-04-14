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
            background-color: rgb(107, 109, 108);
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
    <img src="../kepek/logo.png" style="width: 600px;" title="Logo">

    <?php include_once "php/menu.php"; ?>

    <!--Punisher leírás-->
    <div class="oldalDiv" style="background-color: rgb(107, 109, 108);">
        <img src="../kepek/punisher.jpg" style="width: 20%;" alt="Punisher">
        <div class="infok">
            <h2>The Punisher (2017-2019)</h2>
            <p><strong>Alkotó:</strong> Steve Lightfoot</p>
            <p><strong>Szereplők:</strong> Krysten Ritter, Rachael Taylor, Eka Darville, Finn Jones</p>
            <p><strong>Évadok száma:</strong> 3</p>
            <p><strong>Értékelés:</strong></p>
            <ol class="rating">
                <li class="rating-item" data-rate="1"></li>
                <li class="rating-item active" data-rate="2"></li>
                <li class="rating-item" data-rate="3"></li>
                <li class="rating-item" data-rate="4"></li>
                <li class="rating-item" data-rate="5"></li>
            </ol>  
        </div>
        <p class="leiras">A Marvel - A Megtorló vagy röviden A Megtorló (Marvel's The Punisher) 2017-ben indult amerikai websorozat, melyet Steve Lightfoot alkotott meg a Netflix számára a <a href="https://hu.wikipedia.org/wiki/Marvel-moziuniverzum" target="_blank">Marvel-moziuniverzum</a> részeként. A sorozat - mely a Daredevil spin-offja - a <em>Marvel Comics</em> képregények Punisher, magyarul Megtorló nevű szereplőjének történetét dolgozza fel. A cselekmény középpontjában Frank Castle áll (a Daredevilhez hasonlóan ezúttal is Jon Bernthal alakítja), aki Megtorló álnéven önbíráskodó antihősként harcol a bűnözés ellen.</p>
    </div>

    <!--Videó-->
    <iframe width="1064" height="608" src="../videok/Punisher.mp4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <!--Idézet-->
    <blockquote style="background-color: rgb(107, 109, 108);">
        "People Think That Torture Is Pain. It's Not Pain. It's Time."
    </blockquote>

 
    <?php include_once "php/footer.php"; ?>
    
</body>
</html>