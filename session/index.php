<?php
session_start();
?>
<!doctype html>
<html>
<head>
<style>

</style>
</head>
<body>
<h1>Please log in</h1>
<!-- Create a form -->
<form action="login.php" method="POST">
<table>
<tr>
<td><label for="password">Enter the password</label></td>
<td><input name="password" value="">
</tr>
<td><button>SUBMIT</button></td>
</tr>
</table>
</form>
</body>
</html>
