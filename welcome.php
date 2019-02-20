<<?php
if(!empty($_POST) && isset($_POST["user"])) {
  $user_input = $_POST["user"];
  if(filter_var($user_input, FILTER_VALIDATE_EMAIL)) {
    include "welcome.php";
  } else {
    echo "try again";
    setCookie("user", "", time() + (86400 * 1), "/");
  }