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
    <title>NEW WEBSITE</title>
  </head>
  <body>
    <?php
     include('header.php');
    ?>

<div class="row" style="padding-top:20px;" >
    <div class="col-md-1">
</div>
        <div class="col-md-2" style="margin-right:-80px;">
        
         <div class="list-group" style="min-height:425px;">
          <a style="background-color:black;color:white" href="cpanel.php" class="list-group-item"><h5>لوحة التحكم</h5></a>
          <a style="background-color:black;color:white" href="admin-cp/bookshow.php" class="list-group-item"><h5>الكتب</h5></a>
          <a style="background-color:black;color:white" href="admin-cp/slipicshow.php" class="list-group-item"><h5>الأخبار</h5></a>
          <a style="background-color:black;color:white" href="admin-cp/usershow.php" class="list-group-item"><h5>مدراء الموقع</h5></a>
         </div>
        </div>
       
        <div class="col-lg-8">
            <div class="card" style="background-color:black;color:white;">
            <div class="card-header text-center">مرحبا بك يا :  <?php echo "<h4>"
            . $_SESSION['user']."</h4>"; ?> في لوحة التحكم</div>
            </div>
        </div>
</div>



<script src="js/jQueryslim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
