<?php
require 'controller.php';
$params = $_POST;
switch ($params['action']) {
    case 'login':
        $row = $dm->login();
        $msg = ($row['id'] > 0)? 'Login correcto' : 'Error en el login';
        $output = array('status' => ($row['id'] > 0)? 'ok' : 'fail', 'msg' => $msg);
        echo json_encode($output);
        die;
        break;

}