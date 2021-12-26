<?php
spl_autoload_register( function ($class){
    require 'classes/'.$class.'.class.php' ;
   }); 
   $users = new users;
   
   $username =$users->name; 
    $userid = $users->userid;
   $point = $users->point;

?>