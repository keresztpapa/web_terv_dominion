<div id="user_sync">
    <?php 

         if (session_status() == PHP_SESSION_NONE) {session_start();}        
         try{   
            if(array_key_exists("userName", $_SESSION)){
                echo $_SESSION["userName"];
            }
         }catch (Exception $e){
            echo "rips";
         }
    ?>
</div>