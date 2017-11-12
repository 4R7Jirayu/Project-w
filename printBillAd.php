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
include "header.php";
?>
<title>Print Bill</title>
<center>
<div class="div">
<h1 style="color:red">PRINT</h1>
</div>
<div>
<h3 style="text-decoration: underline">Receipt</h3><br>
<span style="display:inline-block">
<input type=text name=foo id=foo placeholder=ID>
</span><br>
<span style="display:inline-block">
<input type=text name=bar id=bar placeholder=DATE>
</span><br>
<span style="display:inline-block">
<input type=text name=bar id=bar placeholder=TIME>
</span><br>

<div class="container">
	<div class="row">
	 <div class="col-md-10 col-md-offset-1">
	 <div class="table-responsive">
	 <table id="mytable" class="table table-striped" style="background-color:#33CC33">
	  <tr>
	  <th style="text-align:center">No.</th>
	  <th style="text-align:center">Customer</th>
	  <th style="text-align:center">CUST_ID</th>
	  <th style="text-align:center">Price</th>
	  </tr>
	  <td>asdasd</td>
	  <td>zxc</td>
	  <td>asdl</td>
	  <td>qwe</td>
	  <tr>
	<td colspan="3"><b>Total Price</b></td>
    <td>---</td>
  		</tr>


<?php $sql = mysqli_query($conn,"Select * from student inner join major on student.major_id=major.major_id inner join faculty on faCulty.faculty_id=major.faculty_id ORDER BY std_id ASC"); 
    $n=1; 
    while($row = mysqli_fetch_array($sql))
    { 
        echo "<tr class='text-center'>";
        echo "<td>".$n."</td>"; 
        echo "<td>".$row['std_fname']."</td>"; 
        echo "<td>".$row['std_lname']."</td>"; 
        echo "<td>".$row['std_id']."</td>"; 
        echo "<td>".$row['faculty_name']."</td>"; 
        echo "<td>".$row['std_nick']."</td>"; 
        echo "<td>".$row['std_tel']."</td>"; 
        echo "<td>".$row['std_birthday']."</td>"; 
        echo "<td>".$row['std_age']."</td>"; 
        echo "<td>".$row['std_address']."</td>"; 
      
       echo "<td>
       <a href='edit_student.php?std_id=".$row['std_id']."'>
       <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
       </a>
       <a href='del_student.php?std_id=".$row['std_id']."' onclick='return confirm(\"คุณต้องการลบข้อมูลนี้ ?\");'>
       <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
       </a>
       </td>";
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