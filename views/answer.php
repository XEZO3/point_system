<br>
        <div class='row justify-content-center' Style='text-align:center' >
        <br>
       
        <a style='color:white;text-decoration:none' href='test.php'><button class=" btn btn-primary" >العودة</button></a>
        <br>
        
        <p class="text-justify" style='font-size:25px;'>
        
       <?= $question; ?>
        
        </p>
        
        </div>
        <div class="row justify-content-center" >
       <div class="col-8 col-md4">
        <form method='POST' >
  
 
  
   <div class='mb-3'>
  <label  class=' d-flex justify-content-end form-label'>الاجابة</label>
    <textarea  style='border-radius: 10px;height:70px' dir='rtl'  class='form-control' name='answer' ><?=$prev; ?></textarea>
  </div>
  <button name='send' type='submit' style='float:right;border-radius: 10px;' class=' btn btn-primary'>ارسل</button>
</form>
        </div>
        </div>