<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:ital@1&family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/13.css">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-rtl1.min.css">

     
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/respond.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <title>NEW WEBSITE</title>
  </head>
  <body>

    <?php
       include('conn.php');
       session_start();
     ?>


    <nav class="navbar navbar-expand-lg sticky-top navbar" style="background-color: black; color:white; ">
      <div class="container" style="color:white;">
      <img src="../image/library-high-resolution-logo-color-on-transparent-background.png" alt="" height="55px;" width="135px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav m-auto my-2 my-lg-0 " >
            <li class="nav-item">
              <a class="nav-link active"  href="../index.php"  style="color: white; font-size: 20px;">الصفحة الرئيسية</a>
            </li>

            <li class="nav-item dropdown">
    <a style="color: white; font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
           أنواع الكتب
          </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white; background-color:black;">   
    <li><a class="dropdown-item" href="" style="color:white;">الكتب الدينية</a></li>
    <li><a class="dropdown-item" href="" style="color:white;">الكتب الثقافية</a></li>
    <li><a class="dropdown-item" href="" style="color:white;">الكتب التاريخية</a></li>
    <li><a class="dropdown-item" href="" style="color:white;">الكتب الطبية</a></li>
    <li><a class="dropdown-item" href="" style="color:white;">كتب الأطفال</a></li>
    </ul>
    </li>

    <?php
        $sq="select * from menu";
$result=mysqli_query($conn,$sq);
while($row=mysqli_fetch_assoc($result)){
echo
   '<li class="nav-item active">
    <a style="color: white; font-size: 20px;" class="nav-link" href="menudetail.php?id='.$row['id'].'"> '. $row['name'].'</a>
      </li>';
         } ?>

    <?php
if(isset($_SESSION['id'])){
  ?>      
   <li class="nav-item dropdown active"  >
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false" style="color:white; font-size:20px;">الإعدادات</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="../admin-cp/userinsert.php"> لوحة التحكم</a>

          <a class="dropdown-item" href="logout.php?id='.$_SESSION['id'].">تسجيل خروج</a>
        </div>
      </li>
   <?php
   }else{
   '      <li class="nav-item dropdown active "  style="color:white;">
   <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" style="color:white;">الإعدادات</a>
   <div class="dropdown-menu" aria-labelledby="dropdown01">
     <a class="dropdown-item" href="login.php"> تسجيل للوحة التحكم </a>
   </div>
 </li>';
   }
   ?>


   </ul>
        
   
          
        
          <form class="d-flex">
            <input class="px-2 search" type="search" placeholder="ابحث" aria-label="Search">
            <button class="btn0 " type="submit">ابحث</button>
          </form>
        </div>
      </div>
    </nav> 


<script src="../js/jQueryslim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>