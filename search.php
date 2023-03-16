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
     <link rel="stylesheet" href="css/footer.css">
     <link rel="stylesheet" href="css/btn.css">
     <link rel="stylesheet" href="css/index.css">
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
    <li><a class="dropdown-item" href="#5" style="color:white;">الكتب التاريخية</a></li>
    <li><a class="dropdown-item" href="#4" style="color:white;">كتب الرعب</a></li>
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
   <div class="flex-w flex-c-m m-tb-10">

<li>
    <form class="d-flex" action="#" method="post">
        <input type="text" name="category" class="form-control me-1" id="se" placeholder="Search ">
        <input type="submit" name="submit" class="btn btn-success" value=" بحث">
</div>
        </div>
      </div>
    </nav>      <div class="row ">


<?php
if(isset($_POST['submit'])){
    $category=$_POST['category'];
    $sq="select * from books where category like '%$category%'";
    $res=mysqli_query($conn,$sq);
    if(mysqli_num_rows($res)>0){
        $num=1;
        while($row=mysqli_fetch_assoc($res)){
            ?>

<div class="col-sm-4 col-md-4 mb-0  " >
<div class="card" style="width: 22rem;height:auto; margin-right:45px;">
  <?php  echo "<img src=image/".$row['cover_image']." heigth='250px' width='350px' class='img-tumbnail m-auto' >";
   ?>
  <div class="card-body text-center">
<h5 class="card-title"><?php echo $row['title'];?></h5>

<p class="card-text"><?php echo substr( $row['book_text'],0,150);   ?></p>

<?php echo '<a href="admin-cp/pdfshow.php?id='.$row['id'].'"class="btn btn-primary" style="background-color:purple;border:none;"><button name="submit" style="background-color:purple; border:none; color:white;">تنزيل كتاب</button></a>';
?>
  </div>
</div>
</div>
<?php }
echo'</div>';

        }
    }

?>