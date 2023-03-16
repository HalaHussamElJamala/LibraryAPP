<?php
include('../include/header.php');
?>
 <article class="col-lg-9" style="height:320px; padding-right:250px; width:1200px;">
            <div class="card" style="margin-top:30px;">
            <div class="card-body">    

        <div class="col-md-9">
        <table class="table" style="text-align:center; margin-right:100px; margin-top:10px; ">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">اسم الصورة</th>
            <th scope="col">صورة الصورة </th>
            <th scope="col">تعديل</th>
            <th scope="col">حذف</th>
            </tr>
        </thead>
    <?php
 $sq="select * from slipic";
$result=mysqli_query($conn,$sq);
if(mysqli_num_rows($result)>0){
 $num='1';


while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$num."</td>
<td>".$row['name']."</td>
<td>"."  <img src=".$row['image'].' heigth="180px" width="120px"  >'."</td>
<td>"."<a href='slipicedit.php?id=".$row['id']."' class='btn btn-danger' style='border:none;background-color:purple;'>edit</a>"."</td>
<td>"."<a href='slipicdelete.php?id=".$row['id']."' class='btn btn-danger' style='border:none;background-color:purple;'>delete</a>"."</td>
</tr>";
$num++;
}
}else{
    echo "لا توجد نتائج";}
?>
        </table>
        </div>
<div class="col-md-3">
<a href="slipicinsert.php" ><button type="button" class="btn btn-info" style="background-color: purple; margin-top:5px; color: white;border:none;">إضافة جديد</button></a>
</div>
 </div>
  </div>
    </div>
</div>
        </article>

