<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:ital@1&family=Tajawal:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/13.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <img src="image/library-high-resolution-logo-color-on-transparent-background.png" alt="" height="55px;"
                width="135px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#1" style="color: white; font-size: 20px;">الصفحة الرئيسية</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a style="color: white; font-size: 20px;" class="nav-link dropdown-toggle" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            أنواع الكتب
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"
                            style="color:white; background-color:black;">
                            <li><a class="dropdown-item" href="#2" style="color:white;">الكتب الدينية</a></li>
                            <li><a class="dropdown-item" href="#3" style="color:white;">الكتب الثقافية</a></li>
                            <li><a class="dropdown-item" href="#5" style="color:white;">الكتب التاريخية</a></li>
                            <li><a class="dropdown-item" href="#4" style="color:white;">كتب الرعب</a></li>
                            <li><a class="dropdown-item" href="#6" style="color:white;">كتب الأطفال</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#10" style="color: white; font-size: 20px;">اتصل بنا</a>
                    </li>

                    <?php
if(isset($_SESSION['id'])){
  ?>
                    <li class="nav-item dropdown">
                        <a style="color: white; font-size: 20px;" class="nav-link dropdown-toggle" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            الاعدادات
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"
                            style="color:white; background-color:black;">
                            <li><a class="dropdown-item" href="cpanel.php" style="color:white;">لوحة التحكم</a></li>
                            <li><a class="dropdown-item" href="logout.php?id='.$_SESSION['id']."
                                    style="color:white;">تسجيل الخروج</a></li>
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


    <div class="row">


        <?php
if(isset($_POST['submit'])){
    $category=$_POST['category'];
    $sq="select * from books where category like '%$category%'";
    $res=mysqli_query($conn,$sq);
    if(mysqli_num_rows($res)>0){
        $num=1;
        while($row=mysqli_fetch_assoc($res)){
            ?>

        <div class="col-sm-4 col-md-4 mb-0  ">
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

        <div id="1">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php 
       $x=0;
       $sq="select * from slipic order by id DESC limit 4";
       $result=mysqli_query($conn,$sq);
       $count=mysqli_num_rows($result);
       while($row=mysqli_fetch_assoc($result)){
?>
                    <div class="carousel-item <?php echo ($x==0 ? 'active' : '')  ?>">

                        <img src="image/<?php echo $row['image'];?>" height="620px" class="d-block w-100"
                            style="padding-top:-20px;">

                    </div>
                    <?php 
   $x++;
       }
?>

                    <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- كود الكارد للكتب -->

        <br>

        <div id="2">
            <h3
                style="color:purple; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:45px;">
                الكتب الدينية</h3>
            <br>
            <div class="row ">

                <?php $sq="select * from books where category='الكتب الدينية'";
$result=mysqli_query($conn,$sq);
while($row=mysqli_fetch_assoc($result)){
?>
                <div class="col-sm-4 col-md-4 mb-0  ">
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
                <?php }?>
            </div>
        </div>


        <br>
        <br>
        <div id="3">
            <h3
                style="color:purple; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:45px;">
                الكتب الثقافية</h3>
            <br>
            <div class="row ">

                <?php $sq="select * from books where category='الكتب الثقافية'";
$result=mysqli_query($conn,$sq);
while($row=mysqli_fetch_assoc($result)){
?>
                <div class="col-sm-4 col-md-4 mb-0  ">
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
                <?php }?>
            </div>
        </div>

        <br>
        <div id="4">
            <h3
                style="color:purple; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:45px;">
                كتب الرعب </h3>
            <br>
            <div class="row ">

                <?php $sq="select * from books where category='كتب الرعب'";
$result=mysqli_query($conn,$sq);
while($row=mysqli_fetch_assoc($result)){
?>
                <div class="col-sm-4 col-md-4 mb-0  ">
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
                <?php }?>
            </div>
        </div>

        <br>
        <div id="5">
            <h3
                style="color:purple; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:45px;">
                الكتب التاريخية</h3>
            <br>
            <div class="row ">

                <?php $sq="select * from books where category='الكتب التاريخية'";
$result=mysqli_query($conn,$sq);
while($row=mysqli_fetch_assoc($result)){
?>
                <div class="col-sm-4 col-md-4 mb-0  ">
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
                <?php }?>
            </div>
        </div>

        <br>
        <div id="6">
            <h3
                style="color:purple; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:45px;">
                كتب الأطفال</h3>
            <br>
            <div class="row ">

                <?php $sq="select * from books where category='كتب الأطفال'";
$result=mysqli_query($conn,$sq);
while($row=mysqli_fetch_assoc($result)){
?>
                <div class="col-sm-4 col-md-4 mb-0  ">
                    <div class="card" style="width: 22rem;height:auto; margin-right:45px;">
                        <?php  echo "<img src=images/".$row['cover_image']." heigth='250px' width='350px' class='img-tumbnail m-auto' >";
   ?>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $row['title'];?></h5>

                            <p class="card-text"><?php echo substr( $row['book_text'],0,150);   ?></p>

                            <?php echo '<a href="admin-cp/pdfshow.php?id='.$row['id'].'"class="btn btn-primary" style="background-color:purple;border:none;"><button name="submit" style="background-color:purple; border:none; color:white;">تنزيل كتاب</button></a>';
?>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>



        <footer id="10">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-3">
                        <h4>القائمة</h4>
                        <ul>
                            <li><a href="">الرئيسية</a></li>
                            <li><a href="">الكتب</a></li>
                            <li><a href="">عن الموقع</a></li>
                            <li><a href="">اتصل بنا</a></li>
                        </ul>
                    </div>
                    <!-- #region -->
                    <div class="footer-col col-3">
                        <h4>أنواع الكتب</h4>
                        <ul>
                            <li><a href="#2"> الكتب الدينية</a></li>
                            <li><a href="#3">الكتب الثقافية</a></li>
                            <li><a href="#4">كتب الرعب</a></li>
                            <li><a href="#5">الكتب التاريخية</a></li>
                        </ul>
                    </div>

                    <div class="footer-col col-3">
                        <h4>من نحن</h4>
                        <ul>
                            <li><a href="">عمل الطالبة: حلا الجملة</a></li>
                            <li><a href="">اشراف المهندسة :ايمان الخولي</a></li>
                            <li><a href="">تطبيقات الويب الثاني عشر</a></li>
                            <li><a href="">مدرسة عبد المعطي الريس</a></li>
                        </ul>
                    </div>
                    <?php
           include('include/conn.php');
            if(isset($_POST['submit'])){
              $opinion=$_POST['opinion'];
              if(empty($opinion)){
                echo "<div class='alert alert-danger' role='alert'>  الرجاء ادخال اقتراحك</div>";
              }
              else{ 
                $sql_insert="insert into suggests(opinion)
                values('$opinion')";
     
                   $result_insert=mysqli_query($conn,$sql_insert);
                  if(isset($result_insert)){
     echo "<div class='alert alert-success text-center' role='alert'>
      <h2>تم الارسال</h2></div>";
           echo '<meta http-equiv="refresh" content="2; \' index.php \' ">';
                     }
                     else{ 
            }       
          }
            }
            
          ?>

                    <div class="footer-col col-3">
                        <h4>اقتراحات</h4>
                        <form method="POST">
                            <textarea name="opinion" type="text" placeholder="رأيك يهمنا"
                                class="input-opinion"></textarea>
                            <br>
                            <input name="submit" type="submit" value="ارسال" class="inputsubmit">
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class=col>
                        <p>&#169; جميع الحقوق محفوظة 2023</p>
                    </div>
                    <div class="socialicons">
                        <a href="https://www.facebook.com/halah.aljamala"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/hala_h_jamala/"><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>




        <script src="js/jQueryslim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


</body>

</html>