<?php 

class User{
  public string $username;
  public string $passwd;  

  public function __construct(string $usrnm, string $pass){
      $this->username = $usrnm;
      $this->passwd = $pass;
  }

  public function getUsername():string {
      return $this->username;
  }

  public function getPassword():string {
      return $this->passwd;
  }

  public function setUsername(string $asd): void {
    $this->username = $asd;
  }

  public function setPasswd(string $asd): void{
      $this->passwd = $asd; 
  }

  /*
  public function loadUsers($path) {
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

  public function saveUsers($path, $users) {
    $file = fopen($path, "a");
    if ($file === FALSE)
      die("Nem sikerült megnyitni a fajlt!");

    foreach($users as $user) {
      $serialized_user = serialize($user);
      fwrite($file, $serialized_user . "\n");
    }

    fclose($file);
  }*/

}
?>