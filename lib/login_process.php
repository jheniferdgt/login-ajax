<?php
session_start();

class  login_process{
    var $db;

    function __construct($db) {
        $this->db = $db;
    }

    function  login() {
        if ($_POST['action'] == 'login') {
            $username = trim($_POST['username']);
            $pass = trim($_POST['password']);
            $password = md5($pass);
            $qformat = 'select * from usuario where nom_usu = "%s" ';
            $query = sprintf($qformat, $username);
            $row = $this->db->row($query);

            if ($row['pass_usu'] == $password && $row['nom_usu']==$username)
            {
                $_SESSION['user_session'] = (int)$row ['id'];
            } else {
                $row[] = "user or password does not exist.";
            }
        }
        return $row;

    }

    function search_user_by_id(){
        $qformat = 'select * from usuario where id="%s"';
        $query = sprintf($qformat,$_SESSION['user_session'] ); //?
        $row=$this->db->row($query);
        return $row;
    }

}

