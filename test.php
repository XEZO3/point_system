<?php
include("includes/header.php");
$main = new main;
$test = new test;

if(isset($_GET['function']) && !empty($_GET['function']))
{
    $function = $_GET['function'];
}
else{
    $function = "questions";
}
if(isset($_GET['id'])){
    $parm = $_GET['id'];
    $test->question_id = $parm;
}
if(isset($_POST['send'])){
    $test->send($userid,$parm);
}
?>
<html>
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
<script src="js/bootstrap.min.js"></script>
<?php
include("includes/navbar.php");
?>
<div class="container">
    <?php
  
 echo @call_user_func_array([$test,@$function],[$userid]);
    
    
?>
</div>
<script>
   $(document).ready(function () { 
  $(document).click(function () {
     // if($(".navbar-collapse").hasClass("in")){
       $('.collapse').collapse('hide');
     // }
  });
});
</script>
</body>
</html>