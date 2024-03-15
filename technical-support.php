<?php
if(isset($_POST['submit'])){
include"conn.php";
$job=$_POST['job'];
$Department_Name=$_POST['Department_Name'];
$Hall_number=$_POST['Hall_number'];
$Training_number=$_POST['Training_number'];
$date=$_POST['date'];
$the_problem=$_POST['the_problem'];

$in=mysqli_query($con,"INSERT INTO data11 (job, Department_Name, Hall_number, Training_number, date, the_problem) VALUES('$job','$Department_Name','$Hall_number','$Training_number','$date','$the_problem')");
if($in){
	echo "";
}
else{
	die("error".mysqli_error($con));
}
mysqli_close($con);
}

?>

<html>
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
 

.submit{
   width: 100px;
    height: 25px;
	background-color:powderblue;
    text-align: center;
    text-decoration: none;
    background: rgba(0, 0, 0, 0);
    color: #000!important;
    font-size: 15px;
    font-weight: bold;
    line-height: 30px;
    border: 2px solid #DCDCDC;
    border-radius: 10px;
    transition: 5.5s;
  display: inline-block;
  background-color:#FFF;
  margin-left:90%;
}
.submit:hover{
    background:#powderblue;
    color: #000!important;
    transition:0.5s;
}
.job,.Department_Name,.Hall_number,.Training_number,.date,.the_problem{
background-color:#fff;
  width: 50%;
  padding: 12px;
  border: 1px solid #000;
  border-radius: 4px;
  resize: vertical;
  text-align: right;
   font-size: 15px;
    margin-left:30%;
}

label{
 margin-left:75%;
}
.submit2{
 background-color:#A52A2A;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:53%;
}
 
 </style>
  <body>
   <div class="Title">
     <h1>
    الدعم الفني
     </h1>
  </div>
    <div class="submit">
  
      <a href="Search.php">البحث عن طلب </a>
	   
    </div>
	
   <form method='post' action=''  >
   <label>المهنة</label><br>
     <input type="text" name="job" id="" value=""placeholder="ادخل المهنة" class="job" required >
     <br>
	 <br>
    <label>اسم المبنى</label><br>
     <input type="text" name="Department_Name" id="" value="" placeholder="ادخل اسم المبنى" class="Department_Name" required>
     <br>
	 <br>
   <label>رقم القاعة</label><br>
     <input type="text" name="Hall_number" id="" value=""placeholder="ادخل رقم القاعة"class="Hall_number"required >
     <br>
	 <br>
	  <label>رقم التدريبي</label><br>
     <input type="text" name="Training_number" id="" value="" placeholder="ادخل رقم التدريبي"class="Training_number" required>
     <br>
	 <br>
	  <label>التاريخ</label><br>
     <input type="date" name="date" id="" value=""placeholder="ادخل التاريخ"class="date"required>
     <br>
	 <br>
	  <label >مانوع المشكلة؟</label><br>
     <textarea type="text" name="the_problem" id="" value="" placeholder="ادخل نوع المشكلة؟"class="the_problem" required></textarea>
     <br>
	 <br>
	
     <input type="submit" name="submit" id="" value="ارفع طلبك"  class="submit2" onclick="submit1()"/>
	 
	 <form>
     <br>
	 <br>
  <script type="text/javascript">
  
  function submit1(){
	  alert("تم رفع طلبك");
	  
  }
  </script>
  
  </body>



</html>