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
     <link rel="stylesheet" href="css/13.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl1.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/popper.min.js"></script>
    <title>NEW WEBSITE</title>
  </head>
  <body>
    
  <?php
       include('include/conn.php');
       session_start();
     ?>


    <nav class="navbar navbar-expand-lg sticky-top navbar" style="background-color: black; color:white; ">
      <div class="container" style="color:white;">
        <img src="image/library-high-resolution-logo-color-on-transparent-background.png" alt="" height="60px;" width="135px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav m-auto my-2 my-lg-0 " >
            <li class="nav-item">
              <a class="nav-link active"  href="#"  style="color: white; font-size: 20px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">الصفحة الرئيسية</a>
            </li>

            <li class="nav-item dropdown">
    <a style="color: white; font-size: 20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
           أنواع الكتب
          </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white; background-color:black;">   
    <li><a class="dropdown-item" href="#2" style="color:white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">الكتب الدينية</a></li>
    <li><a class="dropdown-item" href="#3" style="color:white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">الكتب الثقافية</a></li>
    <li><a class="dropdown-item" href="#4" style="color:white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">الكتب التاريخية</a></li>
    <li><a class="dropdown-item" href="#5" style="color:white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">كتب الرعب</a></li>
    <li><a class="dropdown-item" href="#6" style="color:white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">كتب الأطفال</a></li>
    </ul>
    </li>

    <li class="nav-item">
              <a class="nav-link active"  href="#10"  style="color: white; font-size: 20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">اتصل بنا</a>
     </li>

    <?php
if(isset($_SESSION['id'])){
  ?>      
               <li class="nav-item dropdown">
    <a style="color: white; font-size: 20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
          الاعدادات
          </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white; background-color:black;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">   
    <li><a class="dropdown-item" href="../cpanel.php" style="color:white;">لوحة التحكم</a></li>
    <li><a class="dropdown-item" href="../logout.php?id='.$_SESSION['id']." style="color:white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">تسجيل الخروج</a></li>
    </ul>
    </li>
   <?php
   }else{
        echo '  <li class="nav-item dropdown">
        <a style="color: white; font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              الاعدادات
              </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white; background-color:black;">   
        <li><a class="dropdown-item" href="../login.php" style="color:white;">تسجيل الدخول</a></li>
        </ul>
        </li> ';
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










<script src="js/jQueryslim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>