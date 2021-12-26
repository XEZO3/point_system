<?php
class main{
    function __construct()
    {
        if(isset($_COOKIE['token']) &&!empty($_COOKIE['token'])){
           $query =db::sql("select * from users where token =?",array($_COOKIE['token']),1,"token");
           if($query ==null || empty($query)){
            header("location: login.php");
            exit;
           }
        }else{
            header("location: login.php");
            exit; 
        }
    }
    function category(){
        $query = db::sql("select * from category",array(),0,"");
        if($query->rowCount() > 0){
           return $rows=$query->fetchAll(PDO::FETCH_ASSOC);
            
           
             
        }
    }
    function navbody(){
       $rows= $this->category();
       foreach($rows as $row){
           $category = $row['category_name'];
           $ar = $row['ar_name'];
           echo "<li class=\"nav-item\">
           <a style='font-size:23px;color:white;font-weight: bold;' class=\"nav-link active\" href=\"$category.php\">$ar</a>
         </li>";
       }
    }
    public static function view($path,$parm){
        extract($parm);
        require_once($path.".php");
    }
}
?>