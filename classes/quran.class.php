<?php
class quran{
    public function sendData($userid){
        $page_number = $_POST['page_number'];
        $sura_name =$_POST['name'];
        $note = $_POST['nots'];
        $query = db::sql("INSERT INTO `quran`( `user_id`, `page_number`, `sura_name`,`note` ,`p_point`) VALUES(?,?,?,?,0);",array($userid,$page_number,$sura_name,$note),0,"");
    }
    public function qPoint($userid){
        $query = db::sql("select p_point from quran where user_id = ?",array($userid),0,"");
        if($query->rowCount() > 0){
            $allP=0;
            $rows=$query->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row){
                    $p_point = $row['p_point'];
                    $allP = $allP + $p_point;
                }
            return $allP;
            }
    }
    public function details($userid){
        $query =db::sql("select * from quran where user_id =?",array($userid),0,"");
        if($query->rowCount() > 0){
            $rows=$query->fetchAll(PDO::FETCH_ASSOC);
            $comments = [];
                foreach($rows as $row){
                    $page_number = $row['page_number'];
                    $p_point = $row['p_point'];
                    $sura_name = $row['sura_name'];
                    $all = "<tr>
                    <th scope=\"col\">$p_point</th>
                    <th scope=\"col\">$sura_name</th>
                    <th scope=\"col\">$page_number</th>
                    </tr>
                    ";
                    $comments[] = $all;
                }
                return implode("", $comments);
        }else{
            return "<p>لا يتوفر اي بيانات</p>";
        }
    }

}

?>