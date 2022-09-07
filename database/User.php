<?php

class User
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getUid($name1){
       $result1 = $this->db->con->query("SELECT user_id FROM user WHERE name = '$name1'");
       $resultarray =array();
       while($item=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
           $resultarray[]=$item;
       };
       return $resultarray[0];

    }
}