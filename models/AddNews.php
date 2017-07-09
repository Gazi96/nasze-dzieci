<?php

class AddNewsModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function addNews($name, $href){
        $sth = $this->db->prepare("INSERT INTO news VALUES(NULL, :name, "
                . ":href, :time, :year, :month, :day);");
        
        $time = date("H:m");
        $year = date("Y");
        $month = date("m");
        $day = date('d');
        
        $sth->execute(array(
            ':name' => $name,
            ':href' =>$href,
            ':time' =>$time,
            ':year' =>$year,
            ':month' =>$month,
            ':day' =>$day
        ));
        
        return $this->db->lastInsertId();
        /*$count = $sth->rowCount();
        if($count > 0) {
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            if($data[0]['role'] == 'admin') {
                return $data[0];
            } else {
                return false;
            }
        } else {
            return false;
        }*/
    }
    
    function addDescribe($newsid, $paragraph){
        $sth = $this->db->prepare("INSERT INTO newsdescribe VALUES(NULL, :newsid, :paragraph);");
        
        $sth->execute(array(
            ':newsid' => $newsid,
            ':paragraph' =>$paragraph
        ));
    }
}