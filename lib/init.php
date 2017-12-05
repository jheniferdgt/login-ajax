<?php
require_once 'credentials.php';
require_once 'db.class.php';
require_once 'class_registrar.php';

global $db;

$db = new DbMysql();
$db->connect($credentials);

