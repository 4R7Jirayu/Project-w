<style>
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
td{
	text-align: center;
}
</style>
<html> 
<?php include "head.php"; ?>
<?php 
include "header1.php";
include "connectdb.php";
?>
<title>Print Bill</title>
<center>
<div class="div">
<h1 style="color:red">PRINT</h1>
</div>
<div>
<h3 style="text-decoration: underline">Receipt</h3><br>

<div class="container">
	<div class="row">
	 <div class="col-md-10 col-md-offset-1">
	 <div class="table-responsive">
	 <table id="mytable" class="table table-striped" style="background-color:#33CC33">
	  <tr>
	  <th style="text-align:center">No.</th>
	  <th style="text-align:center">Customer</th>
      <th style="text-align:center">Order Name</th>
	  <th style="text-align:center">Order Price</th>
      <th style="text-align:center">Time</th>
	  <th style="text-align:center">Action</th>
	  </tr>
<?php
	  $sql = mysqli_query($conn,"select * from bill");
	 $n=1;
		while($row = mysqli_fetch_array($sql)){
			echo "<tr class='text-center'>";
			echo "<td>".$n."</td>";
            echo "<td>".$row['Cus_User']."</td>";
            echo "<td>".$row['Order_Name']."</td>";
            echo "<td>".$row['Total_Price']."</td>";
            echo "<td>".$row['Order_Time']."</td>";
			echo "<td><a type='button' class='btn btn-danger' href='changPayStatus.php?status=จ่ายแล้ว'>PRINT</a></td>";
			echo "</tr>";
			$n++;
		}
?>
</table> 
</div>
</div>
</div>       
</div>
<a href="#" class="btn btn-primary btn-lg"><b>PRINT</b></a>	

</html>