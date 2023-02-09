<?php
session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Validate the username and password
  if ($username === 'som' && $password === 's@m23') {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit;
  } else {
    echo "Invalid username or password";
  }
}
?>

<form action="" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="submit" value="Login">
</form>
