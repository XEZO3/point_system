<?php
class test{
    public $question_id;
    function ques_design(){
        $ddd = $this->questions();
       // return"
    //     <table class=\"table\" style=\"text-align: right;\">
    //   <thead>
    //     <tr>
        
    //       <th scope=\"col\">الاجابة</th>
          
    //       <th scope=\"col\">النقاط المكتسبة</th>
    //     </tr>
        
    //   </thead>
    //   <tbody>
    //  $ddd
    //   </tbody>
    // </table>
       // ";
      //  main::view("views/question",['ddd'=>$ddd]);
    }



 function questions($userid){

    

    $query = db::sql("select * from test_question LEFT JOIN test_answer on test_question.q_id = test_answer.question_id Left JOIN users on users.id= test_answer.user_id order by test_question.q_id  ;
    ",array(),0,"");
    if($query->rowCount() > 0){
      $rows=$query->fetchAll(PDO::FETCH_ASSOC);
      $ques =[];
      $count=0;
      foreach($rows as $row){
       $id = $row['q_id'];
       $check = db::sql("select * from test_answer where question_id = ? and user_id = ?",array($id,$userid),1,"point") ;
        $point = ($check == null) ? "لم يتم الاجابة بعد" : $check;//db::sql("select point from test_answer where question_id = ?",array($id),1,"point");
        $button =($check == null) ? "اجابة السؤال"  : "تعديل الاجابة";
        $count = $count +$check;
        
        $design ="

        <tr>
        
        
        <th scope=\"col\">
        <a href=\"test.php?function=answer&id=$id\">
        <button class=\" btn btn-primary\">$button</button>
        </a>
        </th>
        <th scope=\"col\">$point</th>
        </tr>
        
        
        </tr>
        
        ";
        $ques[] = $design;
        $ddd = implode("",$ques);
      }
      //return implode("",$ques);
      main::view("views/question",['ddd'=>$ddd,'point'=>$count]);
    }
}
function answer($userid){
$query = db::sql("select * from test_question where q_id =?",array($this->question_id),0,"");
@$prev = db::sql("select * from test_answer where user_id = ? and question_id =?",array($userid,$this->question_id),1,"answer");

if($query->rowCount() > 0){
    $rows=$query->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($rows as $row){
        $question = $row['question'];
//         $design ="
//         <br>
//         <div class='row justify-content-center' Style='text-align:center' >
//         <br>
       
//         <a style='color:white;text-decoration:none' href='test.php'><button class=\" btn btn-primary\" >العودة</button></a>
//         <br>
        
//         <p class=\"text-justify\" style='font-size:25px;'>
//         $question
//         </p>
        
//         </div>
//         <div class=\"row justify-content-center\" >
//        <div class=\"col-8 col-md4\">
//         <form method='POST' >
  
 
  
//    <div class='mb-3'>
//   <label  class=' d-flex justify-content-end form-label'>الاجابة</label>
//     <textarea  style='border-radius: 10px;height:70px' dir='rtl'  class='form-control' name='answer' >$prev</textarea>
//   </div>
//   <button name='send' type='submit' style='float:right;border-radius: 10px;' class=' btn btn-primary'>ارسل</button>
// </form>
//         </div>
//         </div>
//         ";

      main::view("views/answer",['question'=>$question,'prev'=>$prev]);
      
    }
}
}
function send($userid){
   $answer = $_POST['answer'];
   if(empty($answer)){
     echo"
     <script>
     alert('الرجاء ملئ خانة السؤال')
     </script>
     ";
   }else{
   $query1=db::sql("select * from test_answer where user_id = ? and question_id = ?",array($userid,$this->question_id),1,"answer");
   if($query1==null || empty($query1)){
    $query = db::sql("INSERT INTO `test_answer`( `user_id`, `question_id`, `answer`, `point`) VALUES (?,?,?,0)",array($userid,$this->question_id,$answer),0,"");

   }else{
    $query = db::sql("update `test_answer` set answer =? where user_id =? and question_id = ?  ",array($answer,$userid,$this->question_id),0,"");
   }
  }
  }
}
?>