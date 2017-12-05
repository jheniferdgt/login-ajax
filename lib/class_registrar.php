<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 12/4/2017
 * Time: 5:51 PM
 */

class class_registrar
{
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function login(){

        if(array_key_exists('action', $_POST) && $_POST['action'] == 'login') {
            $qformat = 'select * from usuario where nom_usu = "%s" and pass_usu="%s"';
            $query = sprintf($qformat,$_POST['username'] , $_POST['password'] );
            $row=$this->db->query($query);
            echo $query;
            $cont = count($row);

            if ($cont == 1) {

            $msg = '<div class="alert alert-success"><strong>Success!</strong>  </div>';


            }
            else{
                $msg = '<div class="alert alert-success"><strong>error!</strong>  </div>';
            }
            return $msg;

        }

    }


}