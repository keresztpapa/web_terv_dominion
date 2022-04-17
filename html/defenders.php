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
            background-color: rgb(134, 180, 169);
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

    <?php include_once "template/menu.php"; ?>

    <!--Defenders leírás style="width: 217"-->
    <div class="oldalDiv" style="background-color: rgb(134, 180, 169);">
        <img src="../kepek/defenders.jpg" style="width: 20%;" alt="The Defenders">
        <div class="infok">
            <h2>The Defenders (2017)</h2>
            <p><strong>Alkotó:</strong> Melissa Rosenberg</p>
            <p><strong>Szereplők:</strong> Charlie Cox, Krysten Ritter, Mike Colter, Finn Jones</p>
            <p><strong>Évadok száma:</strong> 1</p>
            <p><strong>Értékelés:</strong></p>
            <ol class="rating">
                <li class="rating-item" data-rate="1"></li>
                <li class="rating-item active" data-rate="2"></li>
                <li class="rating-item" data-rate="3"></li>
                <li class="rating-item" data-rate="4"></li>
                <li class="rating-item" data-rate="5"></li>
            </ol>  
        </div>
        <p class="leiras">A The Defenders 2017-ben vetített amerikai akció dráma sorozat, amelyet Douglas Petrie és Marco Ramirez alkotott. A sorozat producere Evan Perazzo. A zeneszerzője John Paesano. A sorozat a <em>Marvel Television</em>, az <em>ABC Stúdió</em>, a <em>Goddard Textiles</em> és a <em>Nine and a Half Fingers, Inc.</em> megbízásából készült, forgalmazója a Netflix Streaming Services. Amerikában 2017. augusztus 18-án mutatta be a Netflix. Magyarországon nem mutatták be.</p>
    </div>

    <!--Videó-->
    <iframe width="1064" height="608" src="../videok/TheDefenders.mp4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <!--Idézet-->
    <blockquote style="background-color: rgb(134, 180, 169);">
        "The thing about war is, it only works if both sides believe they're the good guys."
    </blockquote>

    <?php include_once "template/footer.php"; ?>

</body>
</html>