<?php 

class User{
  public string $username;
  public string $passwd;  
  public string $email;
  public string $gender;

  public function __construct(string $usrnm, string $pass, string $mail, string $gend){
      $this->username = $usrnm;
      $this->passwd = $pass;
      $this->email = $mail;
      $this->gender = $gend;
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

  public function getGender(): string{
    return $this->gender;
  }

  public function setGender(string $asd): void{
    $this->gender = $asd;
  }

  public function getEamil(): string{
    return $this->email;
  }

  public function setEamil(string $asd): void{
    $this->email = $asd;
  }
}
?>