<?php

class db{
    protected $db;
    function __construct(){
       // $this->db = $this->connection();
    }
    private static function connection(){
        $dsn = "mysql:host =localhost;dbname=point_system";
        $con= new PDO ($dsn,"root","");
       
        return $con;
    }
    public static function sql($sql,$argu,$rtype,$whatreturn){
        $query = db::connection()->prepare($sql);
        $query->execute($argu);
        //return id by name
        if($rtype == 1){
            if($query->rowCount() > 0){
                $rows=$query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($rows as $row){
                        $return = $row[$whatreturn];
                        return $return;
                    }
                }
        }else{
        return $query;
        }
    }
}

?>