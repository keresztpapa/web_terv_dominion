<div id="user_sync">
    <?php 
        if($_SESSION["userName"] != ""){
            echo $_SESSION["userName"];
        } else {
            echo "Anonymus";
        }
    ?>
</div>