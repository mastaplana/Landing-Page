<?php
  if (array_key_exists("submit", $_POST)) {
    $link = mysqli_connect("localhost", "charlieroth", "Charlie123", "betausersdb");
    if (mysqli_connect_error()) {
      die("Error Connecting To Database");
    }
    if (validateEmail($_POST['email'])) {
      $query = "INSERT INTO `users` (`email`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."')";
      mysqli_query($link, $query);
    }
  }

  function validateEmail($email) {
    if (!preg_match('/^([a-z0-9\+\_\-\.]+)@([a-z0-9\+\_\-\.]{2,})(\.[a-z]{2,4})$/i', $email)) {
      // echo "Invalid Email";
      return false;
    } else {
      $domain = array('umich.edu');
      list(, $user_domain) = explode('@', $email, 2);
      return in_array($user_domain, $domain);
    }
  }
?>
