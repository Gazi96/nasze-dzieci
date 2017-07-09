<?php

class IndexModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function loadNews(){
        $sth = $this->db->prepare("SELECT * FROM news");
        
        $sth->execute();
        
        $count = $sth->rowCount();
        if($count > 0) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
    
    function loadImages($newsid){
        $sth = $this->db->prepare("SELECT * FROM newsimages WHERE newsid = :newsid");
        
        $sth->execute(array(
            ':newsid' => $newsid
        ));
        
        $count = $sth->rowCount();
        if($count > 0) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
    
    function loadDescribes($newsid){
        $sth = $this->db->prepare("SELECT * FROM newsdescribe WHERE newsid = :newsid");
        
        $sth->execute(array(
            ':newsid' => $newsid
        ));
        
        $count = $sth->rowCount();
        if($count > 0) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
}