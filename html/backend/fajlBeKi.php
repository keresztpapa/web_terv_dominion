<?php 
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
    }else{
      foreach($users as $user) {
        $serialized_user = serialize($user);
        fwrite($file, $serialized_user . "\n");
      }
    }
    fclose($file);
  }

  function deleteUser(string $filename, User $usr){
    $file = fopen($filename, "r");
    if($file === FALSE){
      die("Nem sikerült megnyitni a file-t");
    }else{
      while (($line = fgets($file)) !== FALSE) {
        $user = unserialize($line);
        $users[] = $user;
      }
    }
    fclose($file);

    
    $file = fopen($filename, "w");
    if($file === FALSE){
      die("Nem sikerült megnyitni a file-t");
    }else{
      foreach($users as $user) {
        if($user != $usr){
          $serialized_user = serialize($user);
          fwrite($file, $serialized_user . "\n");
        }
      }
    }
    fclose($file);
  }

?>