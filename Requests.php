<html>
<head>
</head>

<style>
h1{
	text-align: center;
}
table, th, td {
  text-align: center;
}

tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);

}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
  
}
</style>
<body>
<h1>
 جدوال الطلبات وتعديل والحذف
</h1>
<br>
<br>
<table  border="1" width="100%" >
 <tr>
 <td>تعديل</td>
 <td>الحذف</td>
 <td>حالة الطلب</td>
 <td>مانوع المشكلة</td>
 <td>التاريخ</td>
 <td>رقم التدريبي</td>
 <td>رقم القاعة</td>
  <td>اسم المبنى</td> 
  <td>المهنة</td>
   <td>رقم الطلب</td>
 </tr>



<?php
include"conn.php";
$sh=mysqli_query($con,"SELECT * FROM data11");
while($row=mysqli_fetch_array($sh)){
	


?>

 <tr>
   <td> <a href="edit.php?id=<?php  echo $row['id']; ?>">edit</a></td>
  <td> <a href="delete.php?id=<?php  echo $row['id']; ?>">delete</a></td>
 <td> <?php  echo $row['Order_Status'] ?></td>
 <td> <?php  echo $row['the_problem'] ?> </td>
 <td> <?php  echo $row['date'] ?> </td>
 <td> <?php  echo $row['Training_number'] ?> </td>
 <td> <?php  echo $row['Hall_number'] ?> </td>
 <td> <?php  echo $row['Department_Name'] ?> </td>
 <td> <?php  echo $row['job'] ?> </td>
  <td> <?php  echo $row['id'] ?> </td>

 </tr>
<?php
}

?>

</body>
</html>