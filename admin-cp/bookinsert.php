   <?php
include('../include/header.php');
if(isset($_POST['submit'])){
$title=$_POST['title'];
$author=$_POST['author'];
$category=$_POST['category'];
$book_text=$_POST['book_text'];
if(empty($title) or empty($author) or empty($category) or empty($book_text)){
 echo  "<div class='alert alert-danger' role='alert'>الرجاء التحقق من ادخال البيانات المطلوبة</div>";
}
else{ 
    if(isset($_FILES['cover_image'])){// ترجع مصفوفة فيها 5 قيم
        //البيانات المستخرجة من الملف المراد رفعه
$image_name=$_FILES['cover_image']['name'];  // الاسم
$image_size=$_FILES['cover_image']['size']; //الحجم
$image_tmp=$_FILES['cover_image']['tmp_name'];// مسار
$image_error=$_FILES['cover_image']['error']; //الاخطاء
$image_n=Date("YMD").rand(0,10000).basename($image_name);
$ext='../image/';
$ext=$ext.basename($image_n);
move_uploaded_file($image_tmp,$ext); 
}else{}
if(isset($_FILES['file_book'])){// ترجع مصفوفة فيها 5 قيم
        //البيانات المستخرجة من الملف المراد رفعه
$file_name=$_FILES['file_book']['name'];  // الاسم
$file_size=$_FILES['file_book']['size']; //الحجم
$file_tmp=$_FILES['file_book']['tmp_name'];// مسار
$file_error=$_FILES['file_book']['error']; //الاخطاء
$file_n=Date("YMD").rand(0,10000).basename($file_name);
$extt='../files/';
$extt=$extt.basename($file_n);
// عملية نقل للصورة من المسار القديم الى المسار الجديد
move_uploaded_file($file_tmp,$extt);                       

$sql_insert="insert into books(title,author,category,cover_image,book_text,file_book)
values('$title','$author','$category','$ext','$book_text','$extt')";
$result_insert=mysqli_query($conn,$sql_insert);
} else{
}
}}       
?>

   <!doctype html>
   <html lang="en" dir="rtl">

   <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="../css/book.css">
   </head>

   <body>

       <section class="login  bg-light" style="padding-top:-15px; padding-right:150px;margin-right:-100px;">
           <div class="container">
               <div class="row g-0" style="height:700px;">
                   <div class="col-lg-5">
                       <img src="../image/num10.jpg" alt="" class="img-fluid" width="550px"
                           height="10000px;padding-right:-110px;">
                   </div>
                   <div class="col-lg-7 text-center py-5">
                       <h1 class="animate__animated animate__heartBeat animate__infinite"
                           style="color: purple; margin-left: 100px;">أهلاً بكم</h1>

                       <form action="" method="POST" enctype="multipart/form-data">
                           <div class="form-row py-4 pt-5">
                               <div class="offset-1 col-lg-10">
                                   <input name="title" type="text" class="inp  px-3" placeholder="عنوان الكتاب">
                               </div>
                           </div>

                           <div class="form-row py-4 pt-5">
                               <div class="offset-1 col-lg-10">
                                   <input name="author" type="text" class="inp  px-3" placeholder="اسم المؤلف">
                               </div>
                           </div>

                           <div class="form-row py-4 pt-5">
                               <div class="offset-1 col-lg-10">
                                   <input name="category" type="text" class="inp  px-3" placeholder="صنف الكتاب">
                               </div>
                           </div>

                           <div class="form-row py-4 pt-5">
                               <div class="offset-1 col-lg-10">
                                   <input name="book_text" type="text" class="inp  px-3" placeholder="وصف الكتاب">
                               </div>
                           </div>


                           <div class="form-row">
                               <div class="offset-1 col-lg-10">
                                   <input type="file" name="cover_image" class="inp px-3" placeholder="أدخل الصورة"
                                       style="margin-top:25px;">
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="offset-1 col-lg-10">
                                   <input type="file" name="file_book" class="inp px-3" placeholder="رابط الكتاب"
                                       style="margin-top:25px;">
                               </div>
                           </div>



                           <div class="form-row py-4">
                               <div class="offset-1 col-lg-8">
                                   <button name="submit" class="btn1"
                                       style="margin-left:-90px; margin-top:25px;">اضافة</button>
                               </div>

                           </div>

                       </form>

                   </div>
               </div>
           </div>
       </section>
   </body>

   </html>