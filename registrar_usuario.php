<?php
///**
// * Created by PhpStorm.
// * User: Dev
// * Date: 11/21/2017
// * Time: 9:34 AM
// */
//require 'lib/db.class.php';
//
//$db= new DbMysql();
//$credentials = array(
//    'hostname' => 'localhost',
//    'database' => 'bd_registro',
//    'username' => 'root',
//    'password' =>  ''
//);
//$db->connect($credentials);
//
//
//if ( isset( $_POST['login'] ) ) {
//    $qformat = 'select * from usuario where nom_usu = "%s" && pass_usu="%s"';
//    $query = sprintf($qformat,$_POST['username'] , $_POST['password'] );
//    $result = $db->query($query);
//    $cont = count($result);
//    if ($cont == 1) {
//        require_once 'hola.html';
//    }
//    else{
//        echo "<br/>" . "error al ingresar usuario" . "<br/>";
//    }
//
//}

//
//if(array_key_exists('action',$_GET)){
//    echo 'debo de editar el usuario';
//    var_dump($_GET);
//}
//if(array_key_exists('action1',$_GET)){
//    echo 'debo de eliminar el usuario';
//    var_dump($_GET);
//}
//
//
//
//if ( isset( $_POST['submit'] ) ) {
//    $qformat = 'select * from usuario WHERE nom_usu = "%s"';
//    $query = sprintf($qformat, $_POST['username']);
//    $result = $db->query($query);
//
//    $cont = count($result);
//    if ($cont == 1) {
//        echo "<br/>" . "el nombre de usuario ya ha sido tomado." . "<br/>";
//        echo "<br/>" . "Escoga otro nombre." . "<br/>";
//    } else {
//        $qinsert = "insert into usuario (nom_usu, pass_usu)values ('$_POST[username]','$_POST[password]')";
//        $res = $db->query($qinsert);
//        if ($res == true) {
//            echo "<br/>" . "usuario creado exitosamente" . "<br/>";
//        } else {
//            echo "<br/>" . "error al crear usuario" . "<br/>";
//        }
//    }
//}
////update
//if ( isset( $_POST['update'] ) ) {
//    $qformat = 'update usuario set pass_usu="%s" WHERE nom_usu = "%s"';
//    $query = sprintf($qformat, $_POST['password'] ,$_POST['username']);
//    $result = $db->query($query);
//    echo "<br/>" . "actualizar" . "<br/>";
//    var_dump( $result);
//}
//
////delete
//if ( isset( $_POST['delete'] ) ) {
//    $qformat = 'DELETE FROM usuario WHERE nom_usu="%s"';
//    $qdelete = sprintf($qformat, $_POST['username']);
//    $result = $db->query($qdelete);
//    echo "<br/>" . "eliminar." . "<br/>";
//    var_dump( $result);
//}
//

