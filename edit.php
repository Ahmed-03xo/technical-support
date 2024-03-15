<html>
<?php
$id=$_GET['id'];

?>

<?php
if(isset($_POST['edit'])){
include"conn.php";

$job=$_POST['job'];

$Department_Name=$_POST['Department_Name'];

$Hall_number=$_POST['Hall_number'];

$Training_number=$_POST['Training_number'];

$date=$_POST['date'];

$the_problem=$_POST['the_problem'];

$Order_Status=$_POST['Order_Status'];

$update=mysqli_query($con,"update data11 set job='$job', Department_Name='$Department_Name', Hall_number='$Hall_number', Training_number='$Training_number', date='$date', the_problem='$the_problem',Order_Status='$Order_Status' where id=$id ");
if($update){
	header("Location:Requests.php");
}
else{
	die("error".mysqli_error($con));
}

}

?>





<div  align="center">
<?php
include"conn.php";
$sh=mysqli_query($con,"SELECT * FROM data11 where id=$id");
while($row=mysqli_fetch_array($sh)){


?>

<head>
</head>

<style>
 body{
 background:#FAEBD7;

 }
 .Title{
 background-color:#A52A2A;
   text-align: center;
  color: fff;
 
 }

.job,.Department_Name,.Hall_number,.Training_number,.date,.Order_Status{
background-color:#fff;
  width: 50%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  resize: vertical;
  text-align: right;
   font-size: 15px;
    margin-left:5%;
}

.the_problem{
	background-color:#fff;
  width: 50%;
   height: 10%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  resize: vertical;
  text-align: right;
   font-size: 15px;
    margin-left:5%;
}
label{
 margin-left:50%;
}
.submit2{
 background-color:#A52A2A;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:4%;
}
</style>
<body>

   <div class="Title">
     <h1>
   تعديل حالة الطلب
     </h1>
  </div>

 <form method='post' action=''  >
   <label>المهنة</label><br>
     <input type="text" name="job" id="" value="<?php  echo $row['job'] ?> "placeholder="ادخل المهنة" class="job" required >
     <br>
	 <br>
    <label>الاسم القسم</label><br>
     <input type="text" name="Department_Name" id="" value="<?php  echo $row['Department_Name'] ?>" placeholder="ادخل اسم القسم" class="Department_Name" required>
     <br>
	 <br>
   <label>رقم القاعة</label><br>
     <input type="text" name="Hall_number" id="" value="<?php  echo $row['Hall_number'] ?>"placeholder="ادخل رقم القاعة"class="Hall_number"required >
     <br>
	 <br>
	  <label>رقم التدريبي</label><br>
     <input type="text" name="Training_number" id="" value=" <?php  echo $row['Training_number'] ?>" placeholder="ادخل رقم التدريبي"class="Training_number" required>
     <br>
	 <br>
	  <label>تاريخ</label><br>
     <input type="date" name="date" id="" value=" <?php  echo $row['date'] ?>"placeholder="ادخل التاريخ"class="date"required>
     <br>
	 <br>
	  <label >مانوع المشكلة؟</label><br>
     <input type="text" name="the_problem" id="" value="<?php  echo $row['the_problem'] ?>" placeholder="ادخل نوع المشكلة؟"class="the_problem" required>
     <br>
	 <br>
	 <label >حالة الطلب</label><br>
     <input type="text" name="Order_Status" id="" value="<?php  echo $row['Order_Status'] ?>" placeholder="ادخل جالة الطلب"class="Order_Status" required></
     <br>
	 <br>
	  
     <input type="submit" name="edit" id="" value="ارفع طلبك"class="submit2">
	 <form>
	 <?php
}
	 ?>
	 </div>
	 </body>
	 </html