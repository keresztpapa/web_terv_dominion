<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['username'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passwd = $_REQUEST['password'];
    if (empty($passwd)) {
        echo "Passwd is empty";
    } else if(strlen($passwd) < 8){
        echo "too short"; 
    } else{
      echo "ok";
    }
}
  
/*****************************/

    function loadUsers($path) {
        $users = [];

        $file = fopen($path, "r");
        if ($file === FALSE)
            die("Nem sikerült megnyitni a fajlt!");

        while (($line = fgets($file)) !== FALSE) {
            $user = unserialize($line);
            $users[] = $user;
        }

        fclose($file);
        return $users;
    }

    function saveUser($path, $felhasznalonev, $jelszo) {
        $file = fopen($path, "a");
        if ($file === FALSE) die("Nem sikerült megnyitni a fajlt!");

        fwrite($file, $felhasznalonev . "\n");
        fwrite($file, $jelszo . "\n");

        fclose($file);
    }

    session_start();
    $hibak = [];

    $text = fopen("data/hipertitkosformatum.txt", "r") or die("Unable to open file!");
    
    //$fiokok = fread($text,filesize("data/hipertitkosformatum.txt"));
    

    if (isset($_POST["SubmitReg"])) {
        if (!isset($_POST["usernameReg"]) || trim($_POST["usernameReg"]) === ""){
            $hibak[] = "A felhasználónév megadása kötelező!";
        }

        if (!isset($_POST["passwordReg"]) || trim($_POST["passwordReg"]) === "" || !isset($_POST["passwordAgain"]) || trim($_POST["passwordAgain"]) === ""){
            $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";
        }

        $felhasznalonev = $_POST["usernameReg"];
        $jelszo = $_POST["passwordReg"];
        $jelszo2 = $_POST["passwordAgain"];

/*
        foreach ($fiokok as $fiok) {
        if ($fiok["usernameReg"] === $felhasznalonev)
            $hibak[] = "A felhasználónév már foglalt!";
        }
*/
        if (strlen($jelszo) < 8)
            $hibak[] = "A jelszónak legalább 8 karakter hosszúnak kell lennie!";

        if ($jelszo !== $jelszo2)
            $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";

        if (count($hibak) === 0) {
            $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
            $fiokok[] = ["usernameReg" => $felhasznalonev, "passwordReg" => $jelszo];

            saveUser("data/hipertitkosformatum.txt", $felhasznalonev, $jelszo);
                                                    //$fiokok
            $siker = TRUE;
        } else {
            $siker = FALSE;
        }
    }
    
    fclose($text);


    
    /*
    function saveUser($path, $users) {
            $file = fopen($path, "a");
            if ($file === FALSE)
              die("Nem sikerült megnyitni a fajlt!");
        
            foreach($users as $user) {
              $serialized_user = serialize($user);
              fwrite($file, $serialized_user . "\n");
            }
        
            fclose($file);
        }
    */

?>


?>