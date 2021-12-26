<?php
include("includes/header.php");
$quran = new quran();
$main =  new main;


if(isset($_POST['send'])){
 $quran->sendData($userid);
}
?>


<html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>

    </title>
    <style>

        a{
            list-style-type: none;
            color: black;
        }
    </style>
</head>
<body style="background-color: #b6e0df;">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<head>

<?php
include("includes/navbar.php");
if(isset($_GET['details'])){
?>

<div class="container">
  <br>
  <div style="text-align: center;">
  <a style="text-decoration: none;color:white" href="quran.php">
  <button class=" btn btn-primary" style="border-radius: 30px;">
   العودة
</button>
</a>
</div>
<br>
<table class="table" style="text-align: right;">
  <thead>
    <tr>
      
      <th scope="col">النقاط المكتسبة</th>
      <th scope="col">اسم السورة</th>
      <th scope="col">رقم الصفحة</th>
    </tr>
    
  </thead>
  <tbody>
 <?php echo $quran->details($userid) ?>
  </tbody>
</table>
</div>


<?php }else{ ?>

        <br>
 
   <div class="container  shadow-lg p-3 mb-5 bg-body rounded" style="border-radius: 100px;text-align:center" >
   
  
   
   
    <div class='row justify-content-md-center' >
   <!-- <div class="col-1 col-md4 align-self-center " >
        
        <div class="col-4 col-md4 align-self-center">
        <span style="text-align: center;">النقاط على الحفظ فقط</span><br>
</div>      -->
<div class="row justify-content-center">
    <div class="col-1">
    <div><span style="border-radius:30px;border:1px solid"><?php echo  $quran->qPoint($userid)?></span></div>
        
    
    </div>
    <div class="col-3">
    
    نقاط الحفظ
    </div>
  </div>
   </div> 
      <br>  
        <div class='row justify-content-md-center ' style="text-align: center;"  >
              <div class="col align-self-center">
              <a style="padding-top:70px;text-align: center;list-style-type:none;text-decoration:none;color:white" href="quran.php?details"> <button class=" btn btn-primary" style="width: 100px;border-radius: 44px;">التفاصيل</button></a>
              </div>
          </div>
         
     <div class="row justify-content-center" >
       <div class="col-8 col-md4">
<form method="POST" >
  <div class="mb-3">
    <label  class="d-flex justify-content-end form-label">رقم الصفحة</label>
    <input style="border-radius: 15px;width:100px; float:right" default="0" type="number" min="0" max="604" class="form-control" name="page_number" ><br><br><br>
    
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class=" d-flex justify-content-end form-label">اسم السورة</label>
    <input style="border-radius: 10px;" type="text" class="form-control" name="name" >
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class=" d-flex justify-content-end form-label">ملاحظات</label>
    <input style="border-radius: 10px;" type="text" class="form-control" name="nots" >
  </div>
  <button name="send" type="submit" style="float:right;border-radius: 10px;" class=" btn btn-primary">ارسل</button>
</form>
     </div>
     </div>
     </div>
 </div>



<?php }?>
</body>
</html>
<script>
$(document).on('click',function(){
$('.collapse').collapse('hide');
})
</script>