<?php
session_start();
if (array_key_exists('user_session', $_SESSION) && (int)$_SESSION['user_session'] > 0) {
    header("Location:home.php"); // ?
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
    <script type="text/javascript" src="js/jquery.js"></script>
<!--    <script type="text/javascript" src="js/ajax.js"></script>-->
    <script type="text/javascript" src="js/script.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
<!--    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">-->
</head>
<body>

<form  id="login-form"    method="post">
    <input type="hidden" id="action" name="action" value="login" />
    <div id="error">
    </div>
    <!--username-->
    <label   for="user"> Nombre de Usuario:</label><br>
    <input   type="text" name="username" maxlength="32" REQUIRED>
    <br/><br/>
    <!--Password-->
    <label  for="pass">Password:</label><br>
    <input  type="password" name="password" maxlength="8" REQUIRED>
    <br/><br/>
    <!--boton-->
    <input type="submit" name="login" id="btn-login" value="login">


</form>
<hr /><br />

</body>
</html>