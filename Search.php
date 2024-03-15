<html>

<head>
</head>
<style>
 body {
 background:#FAEBD7;

 }
 table, th, td {
  text-align: center;
  background:#fff;
}

 .text-1{
	
	width: 240px;
	height: 35px;
	margin-left:42%;
	  text-align: center;
}

.submit-2{
	
margin-left: 49%;

}
.h-2{
 background-color:#A52A2A;
   text-align: center;
  color: fff;
 	
}

.Return{
   width: 100px;
    height: 25px;
	background-color:powderblue;
    text-align: center;
    text-decoration: none;
    background: rgba(0, 0, 0, 0);
    color: #000!important;
    font-size: 13px;
    font-weight: bold;
    line-height: 15px;
    border: 2px solid #DCDCDC;
    border-radius: 10px;
    transition: 5.5s;
  display: inline-block;
  background-color:#FFF;
  margin-left:0%;
}
.Return:hover{
    background:#powderblue;
    color: #000!important;
    transition:0.5s;
}
</style>
<body >
<div class='h-2'>
<h1>البحث عن الطلب</h1>
<h3>ادخال رقم التدربي</h3>
</div>
 <button type="button" class="Return"onclick="history.back()" >الرجوع</button>




<form action='' method='post' class='' >

   <input type='text' name='Search' class='text-1' placeholder='ادخال رقم التدريبي؟'  />
       <input type='submit' name='btn_search'  value='بحث' class='submit-2' />
	   </form>
<?php
if(isset($_POST['btn_search'])){

?>
<table  border="1" width="100%" >
 <tr>

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
$search=$_POST['Search'];
include"conn.php";
$sh=mysqli_query($con,"SELECT * FROM data11 where Training_number like '%$search%' ");
while($row=mysqli_fetch_array($sh)){
	


?>

 <tr>
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
}
?>

</body>


</html>