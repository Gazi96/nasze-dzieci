<?php

class AdminLoginModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function action($name, $password){
        $sth = $this->db->prepare("SELECT id, role FROM users "
                . "WHERE name = :name AND password = :password");
        
        $sth->execute(array(
            ':name' => $name,
            ':password' => md5($password)
        ));
        
        $count = $sth->rowCount();
        if($count > 0) {
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            if($data[0]['role'] == 'admin') {
                return $data[0];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}