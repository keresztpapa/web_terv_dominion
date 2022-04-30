<div id="user_sync">
    <?php 
        /*
        if(isset($_SESSION['username'])){
            echo $_SESSION['username']; 
        }else{
            echo '<li><a>Anonym</a></li>';
        }*/

        if(!isset($_COOKIE["user_nev"])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
          } else {
            echo $_COOKIE["user_nev"];
          }
    ?>
</div>