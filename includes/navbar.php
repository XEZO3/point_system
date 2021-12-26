<nav class="navbar navbar-dark  navbar-expand-md" style="background-color:#ff9f15 ;">
<div><span style="padding: 5px;float:left;font-weight: bold;">نقطة</span><div style="height: 30px;border-radius: 44px;background-color: #ffffff;text-align:center;float:left;margin-top: 4px;"><span style="margin:7px"><?php echo $point  ?></span></div></div>
    <span style="font-size: 20px;font-weight: bold;" ><?php  echo $username;?></span>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" dir="rtl" id="navbar">
        <ul class="navbar-nav">
        <?php
      $main->navbody();
      ?>
        </ul>
    </div>
</nav>



<!--

<nav  class="navbar navbar-expand-lg navbar-light" style="background-color:#ff9f15;">
  <div class="container-fluid" style="float: right;">
  <div><span style="padding: 5px;float:left;font-weight: bold;">نقطة</span><div style="height: 30px;border-radius: 44px;background-color: #ffffff;text-align:center;float:left;margin-top: 4px;"><span style="margin:7px"><?php echo $point  ?></span></div></div>
    <a style="padding: 4px;" class="navbar-brand"><span style="font-size: 20px;font-weight: bold;" ><?php  echo $username;?></span></a>
  
     

    <div dir="rtl" class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="float: right;">
      
        
        <li class="nav-item">
          <a class="nav-link active" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Pricing</a>
        </li>

        
      </ul>
    </div>
    <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"style="color:white"></span>
    </button>
  </div>
</nav>


-->