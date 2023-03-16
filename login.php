
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
     <link rel="stylesheet" href="css/15.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>NEW WEBSITE</title>
  </head>
  <body>


       

  <?php 
include('include/conn.php');
session_start();
$msg="";
if(isset($_POST['submit'])){
 $username=htmlspecialchars($_POST['username']);
$password=$_POST['password'];
if(empty($username)){
    echo "<div class='alert alert-danger' role='alert'> 
    الرجاء ادخال اسم المستخدم</div>";
}elseif(empty($_POST['password'])){
    echo "<div class='alert alert-danger' role='alert'>
    الرجاء ادخال كلمة المرور  </div>";
}else{
    $sql="select * from user where username='$username' and password='$password'" ;
    $result=mysqli_query($conn,$sql);
  
     if(mysqli_num_rows($result)==0){
          echo "<div class='alert alert-danger' text-center role='alert'>
           خطأ في اسم المستخدم أو كلمة المرور  </div>";
     }else{
    $user=mysqli_fetch_assoc($result);
        $_SESSION['id']=$user['id'];
        $_SESSION['user']=$user['username'];
      header('location:index.php');   
 }}}
 ?>


 

<nav class="navbar navbar-expand-lg sticky-top navbar" style="background-color: black; color:white; ">
      <div class="container" style="color:white;">
      <img src="image/library-high-resolution-logo-color-on-transparent-background.png" alt="" height="55px;" width="135px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav m-auto my-2 my-lg-0 " >
            <li class="nav-item">
              <a class="nav-link active"  href="#1"  style="color: white; font-size: 20px;">الصفحة الرئيسية</a>
            </li>

            <li class="nav-item dropdown">
    <a style="color: white; font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
           أنواع الكتب
          </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white; background-color:black;">   
    <li><a class="dropdown-item" href="#2" style="color:white;">الكتب الدينية</a></li>
    <li><a class="dropdown-item" href="#3" style="color:white;">الكتب الثقافية</a></li>
    <li><a class="dropdown-item" href="#4" style="color:white;">الكتب التاريخية</a></li>
    <li><a class="dropdown-item" href="#5" style="color:white;">الكتب الطبية</a></li>
    <li><a class="dropdown-item" href="#6" style="color:white;">كتب الأطفال</a></li>
    </ul>
    </li>

    <li class="nav-item">
              <a class="nav-link active"  href="#10"  style="color: white; font-size: 20px;">اتصل بنا</a>
     </li>

    <?php
if(isset($_SESSION['id'])){
  ?>      
               <li class="nav-item dropdown">
    <a style="color: white; font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
          الاعدادات
          </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white; background-color:black;">   
    <li><a class="dropdown-item" href="cpanel.php" style="color:white;">لوحة التحكم</a></li>
    <li><a class="dropdown-item" href="logout.php?id='.$_SESSION['id']." style="color:white;">تسجيل الخروج</a></li>
    </ul>
    </li>
   <?php
   }else{
        echo '  <li class="nav-item dropdown">
        <a style="color: white; font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              الاعدادات
              </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white; background-color:black;">   
        <li><a class="dropdown-item" href="login.php" style="color:white;">تسجيل الدخول</a></li>
        </ul>
        </li> ';
   }
   ?>


   </ul>
        




        
          <form class="d-flex" method="POST">
            <input class="px-2 search" type="search" placeholder="ابحث" aria-label="Search" name="category">
            <button class="btn0" type="submit" name="submit">ابحث</button>
          </form>
        </div>
      </div>
    </nav> 




    <section class="login  bg-light" style="padding-top:10px; padding-right:195px;margin-top:15px;margin-right:-150px;">
    <div class="container" >
<div class="row g-0">
<div class="col-lg-5">
<img src="image/num10.jpg" alt="" class="img-fluid" width="450px" height="800px">
</div>
<div class="col-lg-7 text-center py-5">
<h1 class="animate__animated animate__heartBeat animate__infinite" style="color: purple; margin-left: 100px;">أهلاً بكم</h1>

<form method="POST">
<div class="form-row py-4 pt-5">
    <div class="offset-1 col-lg-10">
    <input type="text" name="username" class="inp  px-3" placeholder="اسم المستخدم">
    </div>
</div>

<div class="form-row">
    <div class="offset-1 col-lg-10">
    <input type="password" name="password" class="inp px-3" placeholder="كلمة المرور">
    </div>

</div>

<div class="form-row py-4">
    <div class="offset-1 col-lg-8">
 <button name="submit" class="btn1" style="margin-left:-90px;">تسجيل الدخول</button>
    </div>

</div>

</form>


 
</div>
</div>
    </div>
</section>





<script src="js/jQueryslim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>




