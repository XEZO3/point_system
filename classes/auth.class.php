<?php
#include("connection.php");
class auth{
    function  __construct(){
        
    }
   public function token(){
       //Generate a random string.
        $token = openssl_random_pseudo_bytes(32);

//Convert the binary data into hexadecimal representation.
            $token = bin2hex($token);

//Print it out for example purposes.
            return $token;
   }
   public function login($username,$password){
    $token = $this->token();
        $query = db::sql("select * from users where username = ? and password = ?",array($username,$password),0,"");
        if($query->rowCount() > 0){
            $rows=$query->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row){
                    $name = $row['username'];
                    $id = $row['id'];
                   
                }
                
               
                    $query3 =db::sql("update users set token = ? where id = ?",array($token,$id),0,"");
                
                setcookie('token',$token,time()+ ( 365 * 24 * 60 * 60));
                header("location: index.php");
                exit;
        
   } else{
       echo"hhhh";
   }
}
static function check(){
//    if(isset($_COOKIE['token'])){
//        header("location:index.php");
//        exit;
//    }
}
}
?>