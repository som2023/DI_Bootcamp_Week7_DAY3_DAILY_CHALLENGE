<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$username = $_SESSION['username'];
?>

<h1>Welcome, <?php echo $username; ?>!</h1>

<form action="" method="post">
  <input type="submit" name="logout" value="Logout">
</form>

<?php
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: login.php");
  exit;
}
?>
