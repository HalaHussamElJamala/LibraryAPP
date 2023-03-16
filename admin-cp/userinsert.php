<?php
include('../include/header.php');
$msg='';
if(isset($_POST['submit'])){
$username=strip_tags($_POST['username']);
$password=$_POST['password'];

if(empty($username) or empty($password)){
    echo "<div class='alert alert-danger' role='alert'>  الرجاء ادخال البيانات</div>";
}else{ 
           $sql_insert="insert into user(username,password)
           values('$username','$password')";
           $result_insert=mysqli_query($conn,$sql_insert);
             if(isset($result_insert)){
echo "<div class='alert alert-success text-center' role='alert'>
 <h2> جاري تحويلك تم تسجيلك بنجاح </h2></div>";
      echo '<meta http-equiv="refresh" content="2; \' usershow.php \'">';
                }else{ 
       }       }
}
?>

<section class="login  bg-light" style="padding-top:15px; padding-right:195px;margin-right:-150px;">
    <div class="container" >
<div class="row g-0">
<div class="col-lg-5">
<img src="../image/num10.jpg" alt="" class="img-fluid" width="450px" height="800px">
</div>
<div class="col-lg-7 text-center py-5">
<h1 class="animate__animated animate__heartBeat animate__infinite" style="color: purple; margin-left: 100px;">أهلاً بكم</h1>

<form method="POST">
<div class="form-row py-4 pt-5">
    <div class="offset-1 col-lg-10">
    <input style="margin-bottom:20px;" type="text" name="username" class="inp  px-3" placeholder="اسم المستخدم">
    </div>
</div>

<div class="form-row">
    <div class="offset-1 col-lg-10">
    <input style="margin-bottom:20px;" type="password" name="password" class="inp px-3" placeholder="كلمة المرور">
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


