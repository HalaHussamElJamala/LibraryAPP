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
            <th scope="col">المستخدم</th>
            <th scope="col"> كلمةالمرور</th>
            <th scope="col">تعديل</th>
            <th scope="col">حذف</th>
            </tr>
        </thead>
        <?php
        $sq="select * from user";
$result=mysqli_query($conn,$sq);
if(mysqli_num_rows($result)>0){
    $num='1';
while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$num."</td>
<td>".$row['username']."</td>
<td>".$row['password']."</td>
<td>"."<a href='useredit.php?id=".$row['id']."' class='btn btn-danger' style='border:none;background-color:purple;'>edit</a>"."</td>
<td>"."<a href='userdelete.php?id=".$row['id']."' class='btn btn-danger' style='border:none;background-color:purple;'>delete</a>"."</td>
</tr>";
$num++;
}}else{
    echo "لا توجد نتائج";
}?>
</table>
        </div>
<div class="col-md-3">
<a href="userinsert.php" ><button type="button" class="btn btn-info" style="background-color: purple; margin-top:5px; color: white;border:none;">إضافة جديد</button></a>
</div>
 </div>
  </div>
    </div>
</div>
        </article>
        
