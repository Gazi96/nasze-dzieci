<?php

class ContactModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function getDetails(){
        $sth = $this->db->prepare("SELECT * FROM details");
        
        $sth->execute();
        
        $count = $sth->rowCount();
        if($count > 0) {
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $data[0];
        } else {
            return false;
        }
    }
}