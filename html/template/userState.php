<div id="user_sync">
    <?php 
    
    if($_SESSION["user"]->getFelhasznalonev() != null){
        echo $_SESSION["user"]->getFelhasznalonev();
    } else {
        echo "Anonymus";
    }
    
    ?>
</div>