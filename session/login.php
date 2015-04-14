<?php
include('password.php');
session_start(); //Starting session
$_SESSION["password"] = $_POST["password"];
?>

<?php
//if($_SERVER["REQUEST_METHOD"] == "POST"){
//  $password = $_REQUEST["password"];
if($_SESSION["password"] == $password){
	 session_destroy();
  ?>
 
  <h1>Welcome!Yaaaa</h1>
  <p><a href="http://mykhabarovsk.com/itc260/assignment/session/">Go back</a></p>
  <?php

}else {
  $error = "Username or Password is invalid";
  ?>
<p>Password is invalid. Return to <a href="index.php">Log in</a></p>
<?php
}
?>
