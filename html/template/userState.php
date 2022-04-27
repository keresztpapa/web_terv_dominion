<div id="user_sync">
    <?php 
        if(isset($_SESSION['username'])){
            echo $_SESSION["username"]; 
        }else{
            echo "asd";
        }
    ?>
</div>