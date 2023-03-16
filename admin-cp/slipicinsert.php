<?php
include('../include/header.php');
$msg='';
if(isset($_POST['submit'])){
$name=strip_tags($_POST['name']);
if(empty($name)){
    $msg= "<div class='alert alert-danger' role='alert'>الحقول فارغة</div>";
}else{ 
    if(isset($_FILES['image'])){// ترجع مصفوفة فيها 5 قيم
                                //البيانات المستخرجة من الملف المراد رفعه
        $image_name=$_FILES['image']['name'];  // الاسم
        $image_size=$_FILES['image']['size']; //الحجم
        $image_tmp=$_FILES['image']['tmp_name'];// مسار
        $image_error=$_FILES['image']['error']; //الاخطاء
        $image_n=Date("YMD").rand(0,10000).basename($image_name);
        $ext='../image/';
        $ext=$ext.basename($image_n);
        move_uploaded_file($image_tmp,$ext);                      
  
           $sql_insert="insert into slipic(name,image)
           values('$name','$ext')";
           $result_insert=mysqli_query($conn,$sql_insert);
             if(isset($result_insert)){
   echo"<div class='alert alert-success text-center' role='alert'> <h2> 
   جاري تحويلك تم تسجيلك بنجاح  </h2>  </div>";
      echo '<meta http-equiv="refresh" content="3; \' slipicshow.php \'">';
                 }
                }else{
                 } }}        
?>

<section class="login  bg-light" style="padding-top:15px; padding-right:150px;margin-right:-150px">
    <div class="container" >
<div class="row g-0">
<div class="col-lg-5" margin-right:-500px;>
<img src="../image/num10.jpg" alt="" class="img-fluid" width="450px" height="800px" >
</div>
<div class="col-lg-7 text-center py-5">
<h1 class="animate__animated animate__heartBeat animate__infinite" style="color: purple; margin-left: 100px;">أهلاً بكم</h1>

<form action="" method="POST" enctype="multipart/form-data">
<div class="form-row py-4 pt-5">
    <div class="offset-1 col-lg-10">
    <input name="name" type="text" class="inp  px-3" placeholder="اسم الصورة">
    </div>
</div>

<div class="form-row">
    <div class="offset-1 col-lg-10">
    <input type="file" name="image" class="inp px-3" placeholder="أدخل الصورة" style="margin-top:20px;">
    </div>

</div>

<div class="form-row py-4">
    <div class="offset-1 col-lg-8">
 <button name="submit" class="btn1" style="margin-left:-90px;margin-top:20px;">اضافة</button>
    </div>

</div>

</form>

</div>
</div>
    </div>
</section>

