 <!--Menüsor-->
 <?php session_start(); ?>
 <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="daredevil.php" id="menupont">Daredevil</a></li>
        <li><a href="jessicaJones.php">Jessica Jones</a></li>
        <li><a href="lukeCage.php">Luke Cage</a></li>
        <li><a href="ironFist.php">Iron Fist</a></li>
        <li><a href="defenders.php">The Defenders</a></li>
        <li><a href="punisher.php">The Punisher</a></li>
        <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
        <li><a href="register.php">Regisztracio</a></li>
        
        <?php
            if($_SESSION['userName'] != null){
               echo '"<li><a href="felhasznalo.php">Fiók</a></li>"';
            }
        ?>
</ul>




