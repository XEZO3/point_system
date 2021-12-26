<?php
//include("connection.php");
class users{
    public $username;
    public $userid;
    public $point;
    function  __construct(){
       // $this->username = $this->getbytoken($value);
       @$this->name = $this->getbytoken("name");
       @$this->point = $this->getbytoken("points");
       @$this->userid = $this->getbytoken("id");
    }
    function getbytoken($what_to_return){
        $query = db::sql("select * from users where token  = ? ",array($_COOKIE['token']),1,$what_to_return);
       
        return $query;
    }
   // function getuserid(){}
   function profile_edit(){

   }
}

?>