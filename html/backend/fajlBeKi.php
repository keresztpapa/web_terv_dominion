<?php 
  include "backend/UserClass.php";

  function loadUsers(string $filename): User{
    $file = fopen($filename, "r");
    if ($file === FALSE)
      die("Nem sikerült megnyitni a fajlt!");
    while (($line = fgets($file)) !== FALSE) {
      $user = unserialize($line);
    }

    fclose($file);
    return $user;
  }


  function saveUsers(string $filename, User $user){
    $file = fopen($filename, "w");
    if($file === FALSE){
      die("rip");
    }else{
      $serialized_user = serialize($user);
      fwrite($file, $serialized_user."\n");
    }
    fclose($file);
  }

  /*

  function loadUsers(string $filename): array{
    $users = [];

    $file = fopen($filename, "r");
    if ($file === FALSE)
      die("Nem sikerült megnyitni a fajlt!");

    while (($line = fgets($file)) !== FALSE) {
      $user = unserialize($line);
      $users[] = $user;
    }

    fclose($file);
    return $users;
  }

  function saveUsers(string $filename, array $users){
    $file = fopen($filename, "w");
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
  */
?>