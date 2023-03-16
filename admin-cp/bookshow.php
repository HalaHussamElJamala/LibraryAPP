<?php
include('../include/header.php');
?>
 <article class="col-lg-9" style="height:320px; padding-right:250px; width:1300px;">
            <div class="card" style="margin-top:30px;">
            <div class="card-body">    

        <div class="col-md-9">
        <table class="table" style="text-align:center; margin-right:100px; margin-top:10px; ">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">اسم الكتاب</th>
            <th scope="col"> اسم المؤلف </th>
            <th scope="col">صنف الكتاب</th>
            <th scope="col">صورة الكتاب</th>
            <th scope="col">تعديل</th>
            <th scope="col">حذف</th>
            </tr>
        </thead>
    <?php
 $sq="select * from books";
$result=mysqli_query($conn,$sq);
if(mysqli_num_rows($result)>0){
 $num='1';


while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$num."</td>
<td>".$row['title']."</td>
<td>".$row['author']."</td>
<td>".$row['category']."</td>
<td>"."  <img src=".$row['cover_image'].' heigth="180px" width="120px"  >'."</td>
<td>"."<a href='bookedit.php?id=".$row['id']."' class='btn btn-danger' style='border:none;background-color:purple;'>edit</a>"."</td>
<td>"."<a href='bookdelete.php?id=".$row['id']."' class='btn btn-danger' style='border:none;background-color:purple;'>delete</a>"."</td>
</tr>";
$num++;
}
}else{
    echo "لا توجد نتائج";}
?>
        </table>
        </div>
<div class="col-md-3">
<a href="bookinsert.php" ><button type="button" class="btn btn-info" style="background-color: purple; margin-top:5px; color: white; border:none; margin-right:30px;">إضافة جديد</button></a>
</div>
 </div>
  </div>
    </div>
</div>
        </article>

