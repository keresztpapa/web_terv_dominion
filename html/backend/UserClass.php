<?php 

class User{
  public string $username;
  public string $passwd;  

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

 
}
?> 