<?php
include('../include/header.php');
$id=$_GET['id'];
$sql1="select * from user where id=".$_GET['id'];
$result1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result1);
$username1=$row['username'];
$password1=$row['password'];


if(isset($_POST['submit'])){
    $username=strip_tags($_POST['username']);
$password=$_POST['password'];
   
  $sql="update user set username='$username', password='$password' where id=".$_GET['id'];
  $result=mysqli_query($conn,$sql);
  if(isset($result)){
   header('location:usershow.php');
      }else{
           echo mysqli_error($conn);
       }
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
    <input type="text" name="username" class="inp  px-3" placeholder="اسم المستخدم" value="<?php $username1 ?>">
    </div>
</div>

<div class="form-row">
    <div class="offset-1 col-lg-10">
    <input type="password" name="password" class="inp px-3" placeholder="كلمة المرور" style="margin-top:25px;" value="<?php echo $password1 ?>">
    </div>

</div>

<div class="form-row py-4">
    <div class="offset-1 col-lg-8">
 <button name="submit" class="btn1" style="margin-left:-90px;margin-top:25px;">تعديل</button>
    </div>

</div>

</form>

 
</div>
</div>
    </div>
</section>
