<?php
require_once 'lib/init.php';
//require_once 'lib/class_registrar.php';
require_once  'lib/login_process.php';
//require_once  'lib/home.php';
//require_once  'lib/logout.php';

$dm = new login_process($db);
$action = $_REQUEST['action'];

