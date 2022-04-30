<div id="user_sync">
    <?php 
        if(isset($_COOKIE["cookie_value"])) {
            echo $_COOKIE["cookie_value"];
          } else {
            echo "Anonym";
          }
    ?>
</div>