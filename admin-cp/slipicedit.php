<?php
include('../include/header.php');
$id=$_GET['id'];
$sql1="select * from slipic where id=".$_GET['id'];
$result1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result1);
$name1=$row['name'];
$img=$row['image'];



if(isset($_POST['submit'])){
    $name=strip_tags($_POST['name']);
   
   if(empty($name)){
 echo "<div class='alert alert-danger' role='alert'> الرجاء إدخال القيمة</div>";
   }else{ 
       if(isset($_FILES['image'])){// ترجع مصفوفة فيها 5 قيم
                                   //البيانات المستخرجة من الملف المراد رفعه
           $image_name=$_FILES['image']['name'];  // الاسم
           $image_size=$_FILES['image']['size']; //الحجم
           $image_tmp=$_FILES['image']['tmp_name'];// مسار
           $image_error=$_FILES['image']['error'];// الاخطاء
           $image_n=Date("YMD").rand(0,10000).basename($image_name);
           $ext='../image/';
           $ext=$ext.basename($image_n);
           move_uploaded_file($image_tmp,$ext);
           $sql = "update slipic set name='$name',image='$ext' where id=" . $_GET['id'];
           $result = mysqli_query($conn,$sql); 
       if (isset($result)){
           header('location:slipicshow.php');
       } }else {
       }
   }
};?>
<section class="login  bg-light" style="padding-top:50px; padding-right:150px;margin-right:-100px;">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-5">
                <img src="../image/num10.jpg" alt="" class="img-fluid" width="450px" height="800px">
            </div>
            <div class="col-lg-7 text-center py-5">
                <h1 class="animate__animated animate__heartBeat animate__infinite"
                    style="color: purple; margin-left: 100px;">أهلاً بكم</h1>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row py-4 pt-5">
                        <div class="offset-1 col-lg-10">
                            <input name="name" type="text" value="<?php echo $name1 ?>" class="inp  px-3"
                                placeholder="اسم الصورة">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="offset-1 col-lg-10">
                            <input type="file" value="<?php echo $img ?>" name="image" class="inp px-3"
                                placeholder="أدخل الصورة" style="margin-top:25px">
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