<?php 
include "header.php";
$bock=$_GET['bock'];
$time=$_GET['time'];

?>
<?php
include "head.php";
include "connectdb.php";
session_start();
$ID_Order=$_REQUEST['idorder'];
$_SESSION['Cus_ID'] = $_GET['idorder'];
$_SESSION['Cus_TIME'] = $_GET['time'];

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<html>
<style>
#button{
	background-color: #FF6600;
	border: none;
	color: white;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	cursor: pointer;
	padding: 10px 60px;
	font-size:16px;
	margin: 4px 2px;
	width:250px;
}
h3{
    display:block;
}
div{
    margin-bottom:8px;
    margin-top:8px;
}
span{
    text-align: justify;
}
th{
	text-align: center;
}
td{
	text-align: center;
}
</style>

<?php
        $sql = mysqli_query($conn,"select * from customer where Cus_User='".$Cus_User."'");
        while($row = mysqli_fetch_array($sql)){
           $fname = $row['Cus_Fname'];
           $lname = $row['Cus_Lname'];
		   $tel = $row['Cus_Tel'];
		   $email = $row['Cus_Email'];
		   $add = $row['Cus_Address'];
		   $model = $row['Cus_Model'];
        }
if($_GET['id'] != ''){ ?>
<center>
<div class="div">
<h1 style="color:red">Result</h1>
</div>
<div>
<h3 style="text-decoration: underline">Personal Data</h3><br>
<span style="display:inline-block">
<input type=text class=form-control name="fname" id=foo value=<?php echo $fname ?> disabled>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name="lname" id=bar value=<?php echo $lname ?> disabled>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name="tel" id=bar value=<?php echo $tel ?> disabled>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name="email" id=bar value=<?php echo $email ?> disabled>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name="add" id=bar value=<?php echo $add ?> disabled>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name="add" id=bar value=<?php echo $model ?> disabled>
</span><br>
</div>
<?php }else{header('Location: index.php');}?>

<?php
        $sql = mysqli_query($conn,"select * from orderlist where ID_Order='".$ID_Order."'");
        while($row = mysqli_fetch_array($sql)){
           $idorder = $row['ID_Order'];
           $price = $row['Order_Price'];
		   $name = $row['Order_Name'];
		}
		$_SESSION['Cus_Pr'] = $price; 
?>
<div class="container">
	<div class="row">
	 <div class="col-md-10 col-md-offset-1">
	 <div class="table-responsive">
	 <table id="mytable" class="table table-striped" style="background-color:#33CC33">
	  <tr>
	  <th>Order Name</th>
	  <th>Order Price</th>
	  <th>Time</th>
	  </tr>
	  <td><?php echo $name;?></td>
	  <td><?php echo $price;?></td>
	  <td><?php echo $time;?></td>
     </table>
    </div>
    </div>
    </div>
</div>
<form method="POST"><input type="submit" value="Checkout"  name="checkout" class="checkout" id="button"></form>
<?php
if(isset($_POST['checkout'])){
	
	$IDO = $_SESSION['Cus_ID'];
	$BTime = $_SESSION['Cus_TIME'];
	$OP = $_SESSION['Cus_Pr'];
	
	$sql = "INSERT INTO bill(Cus_User,Order_Name,Total_Price,Order_Time,Order_Status)
	VALUES ('".$Cus_User."','".$name."','".$OP."','".$BTime."','ยังไม่จ่าย')";
	
	$sql1 = "UPDATE bockschedule SET $bock = 'ไม่ว่าง' WHERE TimeS='".$time."' ";
	$sql_query = mysqli_query($conn,$sql);
	$sql_query1 = mysqli_query($conn,$sql1);
	if($sql_query){
	 echo "บันทึกข้อมูลสำเร็จ";
	 //echo $msg;
	 }else{
	  echo "ไม่สามารถบันทึกข้อมูลได้[".$sql."]";
	 //$msg;
	 }

	 if($sql_query1){
		echo "บันทึกข้อมูลสำเร็จ";
		//echo $msg;
		}else{
		 echo "ไม่สามารถบันทึกข้อมูลได้[".$sql1."]";
		//$msg;
		}
}
?>
</html>