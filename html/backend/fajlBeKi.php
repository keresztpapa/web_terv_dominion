<?php 

  function loadUsers() {
    $users = [];

    $file = fopen("data/fiokok.txt", "r");
    if ($file === FALSE)
      die("Nem sikerült megnyitni a fajlt!");

    while (($line = fgets($file)) !== FALSE) {
      $user = unserialize($line);
      $users[] = $user;
    }

    fclose($file);
    return $users;
  }

  function saveUsers($users) {
    $file = fopen("data/fiokok.txt", "w");
    if ($file === FALSE){
      die("Nem sikerült megnyitni a fajlt!");
    }
    else{
      foreach($users as $user) {
        $serialized_user = serialize($user);
        fwrite($file, $serialized_user . "\n");
      }
    }
    fclose($file);
  }
  
?>