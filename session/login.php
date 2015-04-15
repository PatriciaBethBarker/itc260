<?php
include('password.php');
session_start(); //Starting session
$_SESSION["password"] = $_POST["password"];
?>

<?php
//if($_SERVER["REQUEST_METHOD"] == "POST"){
//  $password = $_REQUEST["password"];
if($_SESSION["password"] == $password){
  ?>

  <h1>Welcome!Yaaaa</h1>
  <p>This is our flow chart <a href="http://mykhabarovsk.com/itc260/assignment/session/flowchart.pdf">A3: Session Passphrase</p>
  <img src="flowchart.jpg" />
  <p><a href="logout.php">Log out</a></p>
  <?php
}else {
  $error = "Username or Password is invalid";
  ?>
<p>Password is invalid. Return to <a href="index.php">Log in</a></p>
<?php
}
?>
