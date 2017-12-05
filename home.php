<?php
session_start();
if (array_key_exists('user_session', $_SESSION) && (int)$_SESSION['user_session'] > 0) {
    header("Location:index.php"); // ?
}

require 'controller.php';
$row = $dm->search_user_by_id();

?>
<!DOCTYPE html >
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login Form </title>
<!--    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
<!--    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">-->
<!--    <link href="style.css" rel="stylesheet" media="screen">-->

</head>

<body>

<div class="container">
    <div class='alert alert-success'>
<!--        <button class='close' data-dismiss='alert'>&times;</button>-->
        <strong>Hello '<?php echo $row['nom_usu']; ?></strong>  Welcome .

    </div>
</div>

</div>
<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>