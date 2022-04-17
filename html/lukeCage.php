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
            background-color: rgb(204, 129, 27);
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

    <!--Luke Cage leírás-->
    <div class="oldalDiv" style="background-color: rgb(204, 129, 27);">
        <img src="../kepek/lukeCage.jpg" style="width: 20%;" alt="Luke Cage">
        <div class="infok">
            <h2>Luke Cage (2016-2018)</h2>
            <p><strong>Alkotó:</strong> Cheo Hodari Coker</p>
            <p><strong>Szereplők:</strong> Mike Colter, Simone Missick, Theo Rossi, Alfre Woodard</p>
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
        <p class="leiras">A Luke Cage 2016 és 2018 között vetített amerikai akció dráma sorozat, amelyet Cheo Hodari Coker alkotott. A sorozat producerei Aïda Mashaka Croal, Akela Cooper és Gail Barringer. A zeneszerzői Adrian Younge és Ali Shaheed Muhammad. A főszerepekben Mike Colter, Mahershala Ali, Simone Missick, Theo Rossi és Erik LaRay Harvey láthatóak. A sorozat a <em>Marvel Television</em> és az <em>ABC Studios</em> megbízásából készült, forgalmazója a Netflix Streaming Services. Amerikában 2016. szeptember 30-án mutatta be a Netflix. Magyarországon csak feliratosan elérhető.</p>
    </div>

    <!--Videó-->
    <iframe width="1064" height="608" src="https://www.youtube.com/embed/ORa4hPhGrpo" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!--Idézet-->
    <blockquote style="background-color: rgb(204, 129, 27);">
        "I'll enforce the unwritten rules while you enforce the written ones."
    </blockquote>
    
    <?php include_once "template/footer.php"; ?>

</body>
</html>