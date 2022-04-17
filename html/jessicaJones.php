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
            text-align: center;
            padding-left: 16px;
            padding-right: 16px;
            list-style-type: none;
            border-radius: 25px;
            width: auto;
            background-color: rgb(100, 82, 134);
            height: auto;
            float: left;
            position: absolute;
            overflow: auto; 
            z-index: 0;
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
            width: 100%;
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

    <!--Jessica Jones leírás-->
    <div class="oldalDiv" style="background-color: rgb(100, 82, 134);">
        <img src="../kepek/jessicaJones.jpg" style="width: 20%;" alt="Jessica Jones">
        <div class="infok">
            <h2>Jessica Jones (2015-2019)</h2>
            <p><strong>Alkotó:</strong> Melissa Rosenberg</p>
            <p><strong>Szereplők:</strong> Krysten Ritter, Rachael Taylor, Eka Darville, Carrie-Anne Moss</p>
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
        <p class="leiras">A Jessica Jones 2015 és 2019 között vetített amerikai krimi-dráma websorozat, ami a <em>Marvel Comics</em> hasonló nevű karakterén alapul. A sorozat alkotója Melissa Rosenberg, a történet pedig a címszereplő magánnyomozó életét követi nyomon. A sorozatot eredetileg Rosenberg fejlesztette ki az <em>ABC</em> számára 2010-ben, de a hálózat lemondott a sorozatról. 2013 végére Rosenberg AKA Jessica Jones névre keresztelte át a Netflix számára. New York városában forgatták, olyan területeken amelyek úgy néznek ki, mint a régi Hell's Kitchen. A sorozat első évada 2015. november 20-án, a második 2018. március 20-án, a harmadik, egyben az utolsó pedig 2019 június 14-én került fel a Netflixre.</p>
    </div>

    <!--Videó-->
    <iframe width="1064" height="608" src="https://www.youtube.com/embed/kmUQAZ7K3co" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!--Idézet-->
    <blockquote style="background-color: rgb(100, 82, 134);">
        "I can control myself which means I'm more powerful than you ever were."
    </blockquote>

    <?php include_once "template/footer.php"; ?>

</body>
</html>
