<?php 

class User{
  public string $username;
  public string $passwd;  
  public int $szulDatum;
  public Sring $nem;

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

  public function getSzul(): int{
    return $this->$szulDatum;
  }

  public function setSzul(int $asd): void{
    $this->$szulDatum = $asd;
  }


  public function getNem(): string{
    return $this->$nem;
  }

  public function setNem(string $asd): void{
    $this->$nem = $asd;
  }
}
?>