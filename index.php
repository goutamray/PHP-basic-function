<?php

if (file_exists(__DIR__ . "/autoload.php")) {
  require_once __DIR__ . "/autoload.php";
}

info("Goutam"); 

createTitle("This is title", "p", "right");


echo createOtp();


?>