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
  

?>