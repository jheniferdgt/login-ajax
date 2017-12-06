<?php
session_start();
if (!array_key_exists('user_session', $_SESSION) ) {
    header("Location:index.php"); // ?
}

require 'controller.php';
$row = $dm->search_user_by_id();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <title>hola usuario</title>
    <h2> hola  <?php echo $row['nom_usu']; ?> </h2>



</head>
<body>
<div>
<!--    <a href="logout.php" class="btn btn-primary btn-lg" id="btn-out" >cerrar sesion</a>-->

    <input type="submit" name="btn-out" id="btn-out"  value="out" >

</div>

</body>
</html>


